<!DOCTYPE html>
<html lang="en">
<style type="text/css" id="night-mode-pro-style">html {background-color: #34495e !important;} body {background-color: #34495eF;}</style>
  <head>
    <meta charset="utf-8">
    <title>َLogin SIAS CAMAT NEGARA | Sign in</title>
    <link rel="stylesheet" href="style_login_custom.css">
  </head>
  <body background-color="grey">

						<form class="box" action="act_login.php" method="post">
							  <h1>Login</h1>
							  <h3>Sistem Informasi Arsip Surat Masuk dan Surat Keluar</h3>
 								<input type="text" name="username" placeholder="username">
  								<input type="password" name="password" placeholder="password">
 								<input color="black" type="submit" name="login" value="Login">
							
			<h4>
			<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class=' glyphicon glyphicon-warning-sign'></span> Login gagal! username dan password salah! </div>";
					 }
				}
			?></h4>

			<br/>
			<br/>
							<div>
								<div>
									<h2>SISTEM INFORMASI ARSIP SURAT</h2>
									<h2>(SIAS)</h2>
									<br/>
									<p><strong>© 2020 SIAS CAMAT NEGARA.</strong> All Right Reserved</P>
									<p>Programmer Application By: <strong>PTI Undiksha<strong></p>
								</div>
							</div>
						</form>
	</body>
</html>
