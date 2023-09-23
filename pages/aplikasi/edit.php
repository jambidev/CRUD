<?php

require '../koneksi.php';

if(isset($_POST['id'])){
	$id = $_POST['id'];

	$data = mysqli_fetch_array(mysqli_query($koneksi,"select * from data_siswa where id_siswa='$id'"));
	?>
	<div class="container">
	<form id="" action="proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<table align="">
			<tr>
				<td width="200">Nis</td>
				<td width="50">:</td>
				<td width="300">
					<div class="form-group float-label">
						<input required autofocus value="<?php echo $data['nis'] ?>" class="penuh" type="text" name="nis" placeholder="Nis">
					</div>
				</td>
			</tr>
			<tr>
				<td width="200">Nama</td>
				<td width="50">:</td>
				<td width="300">
					<div class="form-group float-label">
						<input required class="penuh" value="<?php echo $data['nama'] ?>" type="text" name="nama" placeholder="Nama">
					</div>
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td width="300">
						<input required value="<?php echo $data['kelas'] ?>" class="penuh" type="text" name="kelas" placeholder="Kelas">
					</div>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td colspan="">
						<input type="radio" name="jk" value="Laki-laki" <?php if($data['jk']=='Laki-laki'){ echo ' checked'; } ?>>Laki-laki &nbsp;
						<input type="radio" name="jk" value="Perempuan" <?php if($data['jk']=='Perempuan'){ echo ' checked'; } ?>>Perempuan
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td width="300">
						<input required value="<?php echo $data['alamat'] ?>" class="penuh" type="text" id="inputalamat" name="alamat" placeholder="Alamat">
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3"><br/><input type="submit" class="btn btn-warning btn-sm btn-block" type="button" value="Edit" name="edit"></td>
			</tr>
		</table>
	</form>
	<span class="hasil"></span>
</div>
<?php
}else{
	header('location:lihat.php');
}
?>