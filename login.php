<html>

<head>
	<title>Trang đăng nhập</title>
	<meta charset="utf-8">
</head>

<body>
	<form method="POST" action="login.php">
		<fieldset>
			<legend>Đăng nhập</legend>
			<tr>
				<td>Username</td>
				<td><input type="text" name="txtUsername" size="30"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="txtPassword" size="30"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnSubmit" value="Đăng nhập">
				</td>
			</tr>
		</fieldset>
	</form>
</body>

</html>

<?php
	if($_POST["txtUsername"] == "admin" && $_POST["txtPassword"] == "admin" && isset($_POST["btnSubmit"])) {
		header("Location: ./success.php");
	}
	else { 
		echo "Login fail";
	}
?>