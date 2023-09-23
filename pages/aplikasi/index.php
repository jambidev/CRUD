<?php
	require '../koneksi.php';
	require 'cek_login.php';	
?>
<!DOCTYPE html>
<html lang="id">
	<head>
	
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="author" content="adentrisnadk"/>
		
		<title>Aplikasi CRUD data</title>
		
		<link href="../../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="../../dist/bootstrap/css/bootstrap-float-label.css" rel="stylesheet"/>
		<link href="../../dist/font/css/all.css" rel="stylesheet"/>
		<link href="../../dist/custom/css/edit.css" rel="stylesheet">
		<link href="../../dist/custom/css/input.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../../dist/custom/css/btn-transparan.css">
		<link href="../../dist/css/animate.css" rel="stylesheet">
		<link href="../../logo.png" rel="icon"/>

		<style type="text/css">
			body{
				color:#fff;
			}
			.panel{
				background-color: rgba(0,0,0,0.8);
			}
			.panel-heading{
				opacity:0.6;
			}
			a .panel-heading:hover{
				opacity:1;
			}
			li .active{
				background-color: rgba(0,0,0,0.4) !important;
			}
		</style>
	</head>
	<body  style="background:url('../../foto/bg5.jpg');background-size:fit;background-repeat: no-repeat; ">
		<nav class="navbar navbar-inverse navbar-fixed-top transparan">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    	<span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a class="navbar-brand" href="#">CRUD Data</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active transparan"><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
						<li><a href="lihat.php"><i class="fa fa-book"> </i> Lihat Data</a></li>
						<li><a class="tambah" id=1 data-target="#tambah" data-toggle="modal"><i class="fa fa-plus"> </i> Tambah Data</a></li>
						<li><a href="logout.php" onclick="return confirm('Yakin nih mau keluar?')"><i class="fa fa-sign-out-alt"> </i> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<br/>
		<div class="container">
			<h1 class="page-header fa-white fadeIn animated delay-2s ">Selamat Datang</h1>
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-merah fadeInLeft animated">	
						<a class="tambah" id=1 data-target="#tambah" data-toggle="modal">
							<div class="panel-heading">
								<span class="pull-left">
									<span class="fa fa-user-plus fa-5x"></span>
								</span>
								<span class="pull-right">
									Tambah data
								</span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-hijau fadeInUp animated delay-1s">
						<a href="lihat.php">
							<div class="panel-heading">
								<span class="pull-left">
									<span class="fa fa-users fa-5x"></span>
								</span>
								<span class="pull-right">
									Lihat Data
								</span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="tambah" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-md transparan" role="document">
				<div class="modal-content transparan">
					<div class="modal-header transparan">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" id="judul">Tambah</h4>
					</div>
					<div class="modal-body transparan">
						<div id="form-tambah"></div>
					</div>
					<div class="modal-footer transparan">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<script src="../../dist/jquery/jquery.js"></script>
		<script src="../../dist/bootstrap/js/bootstrap.js"></script>
		<script>
			$('.tambah').click(function(){
				var id = $(this).attr("id");

				$.ajax({
					url: 'tambah.php',
					method : 'post',
					data: {id:id},
					success: function(data){
						$('#form-tambah').html(data);
						$('#tambah').modal("show");
					}
				});
			});
		</script>
	</body>
</html>
