<?php
	require 'koneksi.php';	
?>
<!DOCTYPE html>
<html lang="id">
	<head>
	
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="author" content="adentrisnadk"/>
		
		<title>Login</title>
		
		<link href="../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="../dist/bootstrap/css/bootstrap-float-label.css" rel="stylesheet"/>
		<link href="../dist/font/css/all.css" rel="stylesheet"/>
		<link href="../dist/custom/css/edit.css" rel="stylesheet">
		<link href="../dist/custom/css/input.css" rel="stylesheet">
		<link href="../dist/custom/css/panel-transparan.css" rel="stylesheet">
		<link href="../dist/custom/css/btn-transparan.css" rel="stylesheet">
		<link href="../dist/css/animate.css" rel="stylesheet">
		<link href="../logo.png" rel="icon"/>
		
		<!--[if It IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respon.js"></script>
		<![endif]-->
		<style>
		.container{
			margin:5% auto;
		}
		</style>
		
	</head>
	<?php

	if(isset($_POST['login'])){
		$username = mysqli_real_escape_string($koneksi, stripslashes($_POST['username']));
		$password = mysqli_real_escape_string($koneksi, stripslashes(md5($_POST['password'])));

		$cek_user = mysqli_query($koneksi,"select username from akun where username=$'username'");
		if($cek_user<1){
			$insert = mysqli_query($koneksi,"insert into akun values(null,'$username',$password')");
			echo "<p>Berhasil</p>";
		}else{
			echo "username telah dipakai";
		}
	}

	?>
	<body style="background:url('../foto/bg4.jpg');background-size:;background-repeat: no-repeat;background-position:fixed; ">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-transparan animated bounceIn">
						<div align="center" class="panel-heading">
							<h3><b>Register</b></h3>
						</div>
						<div class="panel-body">
							<center><span class="fa fa-user-plus fa-5x fa-white"></span></center>
							<br/>
							<form role="form" action="login.php" method="post">
								<fieldset>
									<div class="form-group float-label">
										<label for="exampleInputUser">Username</label>
										<input required autofocus autocomplete="false" class="penuh gede" id="exampleInputUser" placeholder="Username" type="text" name="username"/>
									</div>
									<div class="form-group float-label">
										<label for="password">Password</label>
										<input reuqired class="penuh gede" id="password" placeholder="Password" type="password" name="password"/>
									</div><br/>
									<div class="form-group ">
										<input type="submit" class="btn btn-info btn-lg btn-block" name="reg" value="Register"/>
									</div>
								</fieldset>
							</form>
							<div class="pesan"></div>
							<center>Sudah punya akun? Login <a href="login.php">disini!</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="../dist/jquery/jquery.js"></script>
		<script src="../dist/bootstrap/js/bootstrap.js"></script>
		<script src="../dist/bootstrap/js/bootstrap-float-label.js"></script>
		<script>
		$.bootstrapFloatLabel();
		</script>
	</body>
</html>