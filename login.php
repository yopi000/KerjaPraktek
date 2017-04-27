<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h3>Sistem Informasi Raportku</h3>
	</div>
	<div id="body">
		<form action="#" method="POST">
		<h4 align="center">Silahkan Login Untuk Masuk</h4>

			<i class="fa fa-user"></i><input class="input" type="text" name="username" size="29" maxlength="20" placeholder="Username"/><br/>
			<i class="fa fa-lock"></i><input class="input" type="password" name="password" size="29" maxlength="20" placeholder="Password"/>

			<i class="fa fa-users"></i>
			<select name="hakakses" class="hakakses">
				<option value="#">Pilih Hak Akses</option>
				<option value="admin">Administrator</option>
				<option value="guru">Guru</option>
				<option value="siswa">Siswa</option>
			</select>

			<input class="input-btn" type="submit" name="submit" value="Login"/>
		</form>
	</div>
</div>
</body>
</html>