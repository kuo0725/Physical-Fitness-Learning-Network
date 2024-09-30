<?php
// 初始化 session
session_start();

// 檢查是否有表單提交
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 取得表單提交的帳號和密碼
    $account = $_POST['account'];
    $password = $_POST['password'];
    
    // 數據庫配置
    $servername = "localhost";
    $username = "root";
    $passwordDB = "tina0115"; // 根據你的 MySQL 設置填寫
    $dbname = "fitness";
    
    // 建立連接
    $conn = new mysqli($servername, $username, $passwordDB, $dbname);
    
    // 檢查連接
    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }
    
    // 檢查帳號和密碼是否存在
    $sql_check = "SELECT * FROM users WHERE account = ? AND password = ?";
    
    // 使用 prepared statement 防止 SQL 注入攻擊
    $stmt = $conn->prepare($sql_check);
    $stmt->bind_param("ss", $account, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // 登入成功，將帳號存入 session
        $_SESSION['account'] = $account;
        $_SESSION['check_status'] = "login_ok";
        header("Location: home.php"); // 重定向首頁
        exit();
    } else {
        // 登入失敗
        $_SESSION['check_status'] = "login_fail";
        $error_message = "登入失敗: 帳號或密碼錯誤";
        header("Location: login.php"); // 重定向回登入頁面
        exit();
    }
    
    // 關閉連接
    $stmt->close();
    $conn->close();
} else {
    // 如果不是 POST 方法提交的，重定向回登入頁面
    header("Location: login.php");
    exit();
}
?>
