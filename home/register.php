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
    $passwordDB = "tina0115"; // 根據你的MySQL配置，如果有設定密碼則填寫
    $dbname = "fitness";
    
    // 建立連接
    $conn = new mysqli($servername, $username, $passwordDB, $dbname);
    
    // 檢查連接
    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }
    
    // 檢查帳號是否已存在
    $sql_check = "SELECT account FROM users WHERE account = '$account'";
    $result = $conn->query($sql_check);
    
    if ($result->num_rows > 0) {
        $error_message = "註冊失敗: 帳號已存在";
    } else {
        // 插入資料庫，不加密密碼
        $sql_insert = "INSERT INTO users (account, password) VALUES ('$account', '$password')";
    
        if ($conn->query($sql_insert) === TRUE) {
            $success_message = "註冊成功！";
        } else {
            $error_message = "註冊失敗: " . $conn->error;
        }
    }
    
    // 關閉連接
    $conn->close();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>註冊 - 體適能學習網</title>
<link rel="stylesheet" href="assets/css/main.css" />
<style>
    .button {
        background-color: black; /* Background color */
        color: white; /* Text color */
    }
</style>
</head>
<body class="is-preload">

<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
			<header id="header">
        	<h1>註冊</h1>
			</header>
        <nav id="nav">
            <ul>
                <li><a href="home.php" class="button">回首頁</a></li>
                <li><a href="login.php" class="button">登入</a></li>
                <li><a href="logout.php" class="button" id="logoutButton">登出</a></li>
            </ul>
        </nav>
        <div id="main">
            <section id="intro" class="main">
                <div class="spotlight">
                    <div class="content">
                        <header class="major">
                            <h2>歡迎來到體適能學習網站!</h2>
                        </header>
                        <?php
                        if (isset($error_message)) {
                            echo "<p style='color: red;'>$error_message</p>";
                        }
                        if (isset($success_message)) {
                            echo "<p style='color: green;'>$success_message</p>";
                        }
                        ?>    
                        <form action="register.php" method="post">
                            <table border="1">
                                <tr>
                                    <td><small>帳號:</small></td>
                                    <td><input type="text" name="account" required><small><font size="-1" color="red">*必填</font></small></td>
                                </tr>
                                <tr>
                                    <td><small>密碼:</small></td>
                                    <td><input type="password" name="password" required><small><font size="-1" color="red">*必填</font></small></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><center><input type="submit" value="註冊"></center></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <span class="image"><img src="images/6.gif" alt=""></span>
                </div>
            </section>
        </div>
    </center>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        document.getElementById('logoutButton').addEventListener('click', function(event) {
            event.preventDefault(); // 防止點擊 a 標籤後跳轉頁面

            // 彈跳視窗
            if (confirm('您確定要登出嗎？登出後將在5秒後回到首頁')) {
                // 五秒後回到首頁
                setTimeout(function() {
                    window.location.href = 'home.php'; // 替換為你的首頁 URL
                }, 5000); // 5000 毫秒 = 5 秒
            }
        });
    </script>
</body>
</html>
