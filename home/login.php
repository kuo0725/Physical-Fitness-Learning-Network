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
		<title>登入</title>
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
						<h1>登入</h1>
					</header>
										<nav id="nav">
						<ul>
							<li><a href="home.php" class="button">回首頁</a></li>
							<li><a href="register.php" class="button">註冊</a></li>
							<li><a href="logout.php" class="button" id="logoutButton">登出</a></li>
						</ul>
				<!-- Main -->
					<div id="main">
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>歡迎來到體適能學習網站!</h2>
										</header>
					<form action="login_receive.php" method="post">
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
                                    <td colspan="2"><center><input type="submit" value="登入"></center></td>
                                </tr>
                            </table>
                        </form>
									</div>
									<span class="image"><img src="images/1.gif" alt=""></span>
								</div>
							</section>
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