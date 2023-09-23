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
		
		<title>Aplikasi CRUD data(Lihat)</title>
		
		<link href="../../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="../../dist/bootstrap/css/bootstrap-float-label.css" rel="stylesheet"/>
		<link href="../../dist/font/css/all.css" rel="stylesheet"/>
		<link href="../../dist/custom/css/edit.css" rel="stylesheet">
		<link href="../../dist/custom/css/input.css" rel="stylesheet">
		<link href="../../dist/custom/css/btn-transparan.css" rel="stylesheet"/>
		<link href="../../dist/css/animate.css" rel="stylesheet">
		<link href="../../logo.png" rel="icon"/>

		<style type="text/css">
		body{
			color:#fff;
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
						<li><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
						<li class="active transparan"><a href="lihat.php"><i class="fa fa-book"> </i> Lihat Data</a></li>
						<li><a class="tambah" id=1 data-target="#tambah" data-toggle="modal"><i class="fa fa-plus"> </i> Tambah Data</a></li>
						<li><a href="logout.php" onclick="return confirm('Yakin nih mau keluar?')"><i class="fa fa-sign-out-alt"> </i> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<br/>
		<div class="container">
			<h1 class="page-header fa-white">Lihat Data</h1>
			<div class="row">
				<div class="col-md-12" align="center">
					<h2 class="fa-white fadeIn animated ">Tabel Daftar Siswa</h2>
					<div class="table-responsive bounceIn animated">
						<table class="table table-striped table-bordered table-hover transparan">
							<thead style="background-color:rgba(52, 152, 219,0.2);">
								<tr>
									<td width="20">No.</td>
									<td width="">Nis</td>
									<td width="">Nama</td>
									<td>Jenis Kelamin</td>
									<td width="">Kelas</td>
									<td width="300">alamat</td>
									<td width="220">Opsi</td>
								</tr>
							</thead>
							<tbody class="transparan">
								<?php
								$data = mysqli_query($koneksi,"select * from data_siswa");
								if(mysqli_num_rows($data)>0){

									$no = 1;
									while($fetch = mysqli_fetch_array($data)){
										?> <tr class="transparan">
												<td><?php echo $no ?></td>
												<td><?php echo $fetch['nis'] ?></td>
												<td><?php echo $fetch["nama"] ?></td>
												<td><?php echo $fetch['jk'] ?></td>
												<td><?php echo$fetch["kelas"] ?></td>
												<td><?php echo $fetch['alamat'] ?></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a style="width:100px" id="<?php echo $fetch['id_siswa'] ?>" data-toggle="modal" data-target="#edit" class="edit btn btn-warning">Edit</a>
														<a style="width:100px" id="<?php echo $fetch['id_siswa'] ?>" data-toggle="modal" data-target="#hapus" class="hapus btn btn-danger">Hapus</a>
													</div>
												</td>
											  </tr>
									<?php
										$no++;
									}
								}else{
				 						echo "<div class='alert-warning'>Belum Ada Data</div>";
								}
								?>
							</tbody>
						</table>
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
		<div id="edit" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-md transparan" role="document">
				<div class="modal-content transparan">
					<div class="modal-header transparan">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" id="judul">Edit</h4>
					</div>
					<div class="modal-body transparan">
						<div id="form-edit"></div>
					</div>
					<div class="modal-footer transparan">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<<div id="hapus" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-md transparan" role="document">
				<div class="modal-content transparan">
					<div class="modal-header transparan">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" id="judul">Hapus</h4>
					</div>
					<div class="modal-body transparan">
						<div id="form-hapus"></div>
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
		$(document).ready(function(){
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
			$('.edit').click(function(){
				var id = $(this).attr("id");

				$.ajax({
					url: 'edit.php',
					method : 'post',
					data: {id:id},
					success: function(data){
						$('#form-edit').html(data);
						$('#edit').modal("show");
					}
				});
			});
			$('.hapus').click(function(){
				var id = $(this).attr("id");

				$.ajax({
					url: 'hapus.php',
					method : 'post',
					data: {id:id},
					success: function(data){
						$('#form-hapus').html(data);
						$('#hapus').modal("show");
					}
				});
			});
		});
		</script>
	</body>
</html>