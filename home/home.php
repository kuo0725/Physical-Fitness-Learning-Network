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
		<title>體適能學習網</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
        .form-check {
            margin-bottom: 1rem; /* 調整這裡可以增加間距 */
        }
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
					<header id="header" class="alt">
						<h1>體適能學習網</h1>

						<?php
						if (isset($_SESSION["check_status"])) {
							echo "檢查session: " . $_SESSION["check_status"]."<br>";
						} else {
							echo "檢查session: 未登入<br>";
						}

						srand((double)microtime() * 1000000);
						$i = rand(1, 3);
						$smart_sentence = array(
							"「超越極限，重新定義自己！」",
							"「挑戰自我，塑造理想身材！」",
							"「健康生活，從今天開始！」",
							"「鍛鍊身心，展現最佳狀態！」",
							"「每一步都是改變，每一個動作都是進步！」",
							"「不斷進化，不斷挑戰，成為更好的自己！」",
							"「健康，不僅是一種習慣，更是一種生活方式！」",
							"「讓運動成為你的生活注解，而不只是偶爾的選擇！」",
							"「不論年齡、不論體能，都能找到適合自己的運動方式！」",
							"「活出活力，健康由我開始！」",
				);
						echo $smart_sentence[$i - 1];
					?>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">網頁說明</a></li>
							<li><a href="#first">動作敘述</a></li>
							<li><a href="#second">體適能學習預約</a></li>
							<li><a href="#cta">照片區</a></li>
							<li>
							<?php
								if (isset($_SESSION["check_status"]) && $_SESSION["check_status"] === "login_ok") {
									echo '<a href="logout.php" class="button">登出</a>';
								} else {
									echo '<a href="login.php" class="button">登入</a>';
								}
						?>
							</li>
						</ul>

					</nav>


				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>歡迎來到體適能學習網站!</h2>
										</header>
										<p>在這裡，我們致力於為您提供最新的體適能知識、技巧和資源，以幫助您實現健康、活力和身體素質的提升。無論您是初學者還是專業人士，我們都有適合您的內容和方案。</p>
										<ul class="actions">
											<li><a href="generic.html" class="button">關於我們</a></li>
										</ul>
									</div>
									<span class="image"><img src="images/2.gif" alt=""/></span>
								</div>
							</section>

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>動作敘述</h2>
								</header>
								<ul class="features">
									<li>
										<span class="icon solid major style1"><img src="images/3.png" alt=""></span>
										<h3>1分鐘仰臥起坐</h3>
										<p>執行者仰臥在瑜珈墊上，雙腳貼地、膝關節彎曲，腳掌貼地，雙手交叉放置在胸前，起始姿勢為雙手交叉放置在胸前，下背部、臀部、肩胛部、頭部貼地，不可離地。</p>
									</li>
									<li>
										<span class="icon solid major style1"><img src="images/4.png" alt=""></span>
										<h3>坐姿體前彎</h3>
										<p>執行者坐在測驗器具上，雙腳自然張開，將握把放在測驗器具的上面，兩手交叉握住握把，以自己的力量向下拉。</p>
									</li>
								</ul>
								<ul class="features">
									<li>
										<span class="icon major style5"><img src="images/3.gif" alt="" width="50%"></span>
										<h3>20公尺漸速折返跑</h3>
										<p>受試者以漸增速度的方式，來回折返跑於相距20公尺的兩條線間，以一分鐘為一階段、每一階段包含7次以上的20公尺折返跑步，過程中來回跑的速度將逐漸增加(使用錄音帶或是光碟控制跑步速度)，直到受試者衰竭為止。</p>
									</li>
									<li>
										<span class="icon major style5"><img src="images/5.gif" alt="" width="50%"></span>
										<h3>立定跳遠</h3>
										<p>執行者雙腳站在起跳線上，聽到發令槍後，以雙腳起跳，跳遠至遠方的落地處，落地後立即用腳尖向前跨步，以減緩衝擊力。</p>
									</li>
								</ul>
							</section>

						<!-- Second Section -->
						<section id="second" class="main special">
							<header class="major">
								<h2>體適能學習預約</h2>
								<p>預約表單</p>
							</header>
							<form action="reserve_receive.php" method="get">
								<table border="1">
									<tr>
										<td><small>姓名:</small></td>
										<td><input type="text" name="name"><font size="-1" color="red">*必填</font></td>
									</tr>
									<tr>
										<td><small>手機:</small></td>
										<td><input type="text" name="number"></td>
									</tr>
									<tr>
										<td><small>性別:</small></td>
										<td>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="gender" value="男" id="genderMale" checked>
											<label class="form-check-label" for="genderMale">男</label>
											<input class="form-check-input" type="radio" name="gender" value="女" id="genderFemale">
											<label class="form-check-label" for="genderFemale">女</label>
										</div>
                    				</td>
									</tr>
									<tr>
										<td>人數:</td>
										<td>
											<select name="people_num">
												<option value="1">1人</option>
												<option value="2">2人</option>
												<option value="3">3人</option>
												<option value="4">4人</option>
												<option value="5">5人</option>
											</select>
											<font size="-1">第1人免費, <font color="red">第2人起每人300元</font></font>
										</td>
									</tr>
									<tr>
										<td><small>用餐:</small></td>
										<td>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="meal" value="葷食" id="mealMeat" checked>
												<label class="form-check-label" for="mealMeat">葷食</label>
												<input class="form-check-input" type="radio" name="meal" value="素食" id="mealVeg">
												<label class="form-check-label" for="mealVeg">素食</label>
											</div>
										</td>
									</tr>
									<tr>
										<td>備註(請填入您的身高體重):</td>
										<td><textarea name="remark" cols="40" rows="10"></textarea></td>
									</tr>
									<tr>
										<td colspan="2"><center>
											<?php
											if(isset($_SESSION["check_status"]) && $_SESSION["check_status"] === "login_ok") {
												echo '<button type="submit">預約</button>';
											} else {
												echo "<small>必須登入才能預約</small>";
											}
											?>
										</center></td>
									</tr>
								</table>
							</form>
						</section>

						<!-- Get Started -->
							<section id="cta" class="main special">
								<header class="major">
									<h2>照片區</h2>
									<?php
										echo "網頁載入時間: ".date('Y-m-d')."<br>";	
										$datestr1="2024-06-21 00:00:00";
										echo "報名截止時間: ".$datestr1."<br>";
										echo "剩餘時間: ".round((strtotime($datestr1)-time())/(60*60*24),0)."天"."<br>";
									?>
								</form>
								</header>
								<footer class="major">
								<form action="123.php" method="post" enctype="multipart/form-data">
									<input type="file" name="upload_file" class="button">
									<?php
									if(isset($_SESSION["check_status"]) && $_SESSION["check_status"]=="login_ok") {
										echo "<input type=\"submit\" value=\"照片上傳\">";
									} else {
										echo "<small>必須登入才能上傳照片</small>";
									}
									?>
								</form>
							</footer>
							</section>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	</body>
</html>