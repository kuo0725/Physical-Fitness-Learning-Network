<?php
	session_start();
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/home.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>
<body background="1.jpg">
	<center>
	<!-- InstanceBeginEditable name="title" -->遊戲預約<!-- InstanceEndEditable -->
		
		<h2>體適能學習網</h2>
		<hr width="70%" color="red">
		<style>a{text-decoration:none}</style>
		<big><b>
		<a href="home.php">首頁</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="illustrate.html">app說明</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="animation.html">動作敘述</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
		<a href="reserve.php">體適能學習預約</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="picture.php">照片區</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
		<a href="about_we.html">關於我們
		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;<a href="login.php">登入</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="logout.php">登出</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</b></big><br>
		<!-- InstanceBeginEditable name="main" -->
	<table border="0" width="50%">
		<tr>
			<td>
				<center>
					<h1>預約</h1>
			<font size="5"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;預約表單&nbsp;&nbsp;&nbsp;&nbsp;</b></font>
		<form action="reserve_receive.php" method="get">
			<table border="1">
				<tr><td><small>姓名:</small></td><td><input type="text" name="name"></input><font size="-1" color="red">*必填</font></td></tr>
				<tr><td><small>手機:</small></td><td><input type="text" name="number"></input></td></tr>
				<tr><td><small>性別:</small></td>
					<td><small>
						<input type="radio" name="gender" value="男" checked>男</input>
						<input type="radio" name="gender" value="女">女</input>
						</small>
				<tr><td>人數</td>
				<td>
					<select name="people_num">
						<option value="1">1人</option>
						<option value="2">2人</option>
						<option value="3">3人</option>
						<option value="4">4人</option>
						<option value="5">5人</option>
					</select>
					<font size="-1">第1人免費, <font color="red">第2人起每人300元</font>
				</td></tr>
				<tr><td><small>用餐</small></td>
					<td><small>
						<input type="radio" name="meal" value="葷食" checked>葷食</input>
						<input type="radio" name="meal" value="素食" >素食</input>
						</small>
					</td>
				</tr>
				<tr>
					<td>備註(請填入您的身高體重):</td><td><textarea name="remark" cols="40" rows="10"></textarea></td>
				</tr>	
				<tr><td colspan="2"><center>
					<?php
					if(isset($_SESSION["check_status"]) && $_SESSION["check_status"] === "login_ok")
					{echo "<Button type=\"submit\"><Img Src=\"2.png\"></Button>";}
					else
					{echo"<small>必須登入才能預約</small>";}
					?>
				</table>
		

			</td>
		</tr>
	</table>
	</center>