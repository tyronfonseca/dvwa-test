<?php

?>
<style>
body {
	background: #fefffe;
	font: 12px/15px Arial, Helvetica, sans-serif;
	line-height: 20px;
	color: #6b6b6b;
}

#wrapper {
	text-align: center;
	margin: 0 auto;
	height: 100vh;
}

#content {
	display: inline-block;
	padding: 20px;
	width: auto;
}

#footer {
	position: absolute;
	width: 100%;
	height: 50px;
	bottom: 0px;
	left: 0px;
}

label {
	float: left;
	text-align: right;
	margin-right: 0.5em;
	display: block;
	overflow: hidden;
	padding-right: 50px;
	font-weight: bold;
}

.loginInput {
	float: left;
	color: #6B6B6B;
	width: 320px;
	background-color: #F4F4F4;
	border: 1px;
	border-style: solid;
	border-color: #c4c4c4;
	padding: 6px;
	margin-bottom: 12px;
}

fieldset {
	width: 350px;
	padding: 10px 20px 10px 20px;
	overflow: hidden;
	border-style: none;
}

p {
	font-size: 10px;
}


</style>
<div style="width: 100%; text-align: center; margin: 1rem">
<h1>Session expired</h1>
<h3>Please log in again<h3>
</div>
<!DOCTYPE html>

<html lang="en-GB" style="height: 100%; overflow: hidden">

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<title>Login :: Damn Vulnerable Web Application (DVWA) v1.10 *Development*</title>

		<link rel="stylesheet" type="text/css" href="dvwa/css/login.css" />

	</head>

	<body>

	<div id="wrapper">

	<div id="header">

	<br />

	<p><img src="/DVWA/dvwa/images/logo.png" /></p>

	<br />

	</div> <!--<div id="header">-->

	<div id="content">


	<fieldset>

			<label for="user">Username</label> <input id="user" type="text" class="loginInput" size="20" name="username"><br />


			<label for="pass">Password</label> <input id="password" type="password" class="loginInput" AUTOCOMPLETE="off" size="20" name="password"><br />

			<br />

			<p class="submit"><input type="submit" value="Login" name="Login" onclick="login()"></p>

	</fieldset>


	<!-- <img src="dvwa/images/RandomStorm.png" /> -->
	</div > <!--<div id="content">-->

	<div id="footer">S

	<p><a href="https://github.com/digininja/DVWA/" target="_blank">Damn Vulnerable Web Application (DVWA)</a></p>

	</div> <!--<div id="footer"> -->

	</div> <!--<div id="wrapper"> -->
	
	<script>
	
	function login(){
		var pwd = document.getElementById('password').value;
		var usr = document.getElementById('user').value;
	
		console.log("User: "+usr);
		console.log("Password: "+pwd);
		window.location.href = "./index.php";
	}
	S
	</script>

	</body>

</html>
