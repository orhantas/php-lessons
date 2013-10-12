<?php
//l1.php dosyasını çağırıp çalıştırıyoruz.
 include 'l1.php';?>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		<table>
			<tr>
				<td>User</td>
				<td>Authentication</td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td></td>
				<td><button>Login</button></td>
			</tr>
		</table>
	</form>
</body>
</html>