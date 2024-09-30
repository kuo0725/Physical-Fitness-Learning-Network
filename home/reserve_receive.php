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
		<title>表單接收</title>
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
										$people_num=$_GET['people_num'];
										$name=$_GET['name'];
								  
									  if($name=="")
									  {
										  header("refresh:5;URL=reserve.php");
										  echo "<center><font size\"+2\">";
										  echo "<font color=\"red\">姓名必填,5秒後返回</font>";
									  }
								  else
								  {
									  echo "<h2>預約成功</h2>";
									  echo "<table border=\"1\">";
									  echo "<tr><td><big><b>姓名:</td><td>".$name."</td></tr>";
									  echo "<tr><td><big><b>手機:</td><td>".$_GET['number']."</td></tr>";
									  echo "<tr><td><big><b>性別:</td><td>".$_GET['gender']."</td></tr>";
									  echo "<tr><td><big><b>人數:</td><td>".$_GET['meal']."</td></tr>";
									  echo "<tr><td><big><b>用餐:</td><td>".$_GET['people_num']."</td></tr>";
									  echo "<tr><td><big><b>備註:</td><td>".$_GET['remark']."</td></tr>";
									  if((($people_num-1)*300)==0){
										  echo "<font color=\"red\">總報名費: ".(($people_num-1)*300)."元,免費真香</font>";
									  }
									  else
									  {
										  echo "<font color=\"red\">總報名費: ".(($people_num-1)*300)."元,請交給曾同學</font>";
									  }
								  }
									  $w=fopen("register.txt","a");
									  fputs($w,$name.",".$_GET['number'].",".$people_num.",".$_GET['meal']."\r\n");
									  fclose($w);
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