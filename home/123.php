<?php
// 初始化 session
session_start();
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>照片接收</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
						<h1>表單接收</h1>
					</header>
										<nav id="nav">
						<ul>
							<li><a href="home.php" class="button">回首頁</a></li>
						</ul>
				<!-- Main -->
					<div id="main">
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<?php
										echo "<center>";
										if($_FILES["upload_file"]["type"]=="image/png" or $_FILES["upload_file"]["type"]=="image/jpeg"){
											$check="ok";
										}
										if($check!="ok"){
											die("格式必須JPG或PNG");
										}
										echo "檔案名稱:".$_FILES["upload_file"]["name"]."<br>";
										echo "檔案大小:".$_FILES["upload_file"]["size"]."<br>";
										echo "檔案格式:".$_FILES["upload_file"]["type"]."<br>";
										echo "檔案位址:".$_FILES["upload_file"]["tmp_name"]."<br>";
										echo "檔案代碼:".$_FILES["upload_file"]["error"]."<br>";
									
										echo $_SERVER["PHP_SELF"]."<br>";
										echo $_SERVER["SCRIPT_FILENAME"]."<br>";
										echo __FILE__."<br>";
										echo dirname(__FILE__)."<br>";
										echo basename(__FILE__)."<br>";
										if(is_dir("picture")){echo "picture資料夾存在";}else{echo "picture資料夾不存在";}
										
										// 检查目标文件夹是否存在，如果不存在，则创建它
										if(!is_dir("picture")){
											mkdir("picture");
										}
									
										if($_FILES['upload_file']['error'] == UPLOAD_ERR_OK){
											$dest_upload_file = dirname(__FILE__) . "\\picture\\" . $_FILES['upload_file']['name'];
											move_uploaded_file($_FILES['upload_file']['tmp_name'], $dest_upload_file);
											echo "檔案已成功上傳到：" . $dest_upload_file;
										} else {
											echo "上傳失敗，錯誤代碼：" . $_FILES['upload_file']['error'];
										}
									?>
					</div>

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