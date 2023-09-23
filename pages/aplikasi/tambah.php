<?php
if(isset($_POST['id'])){
?>
<div class="container">
	<form id="form-tambahphp" action="proses.php" method="post">
		<table align="">
			<tr>
				<td width="200">Nis</td>
				<td width="50">:</td>
				<td width="300">
					<div class="form-group float-label">
						<input required autofocus class="penuh" type="text" name="nis" placeholder="Nis">
					</div>
				</td>
			</tr>
			<tr>
				<td width="200">Nama</td>
				<td width="50">:</td>
				<td width="300">
					<div class="form-group float-label">
						<label for="inputnama">Nama</label>
						<input required class="penuh" type="text" name="nama" placeholder="Nama">
					</div>
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td width="300">
					<div class="form-group float-label">
						<input required class="penuh" type="text" name="kelas" placeholder="Kelas">
					</div>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td colspan="">
						<input type="radio" name="jk" value="Laki-laki" checked>Laki-laki &nbsp;
						<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td width="300">
					<div class="form-group float-label">
						<input required class="penuh" type="text" id="inputalamat" name="alamat" placeholder="Alamat">
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3"><br/><input type="submit" class="tambah btn btn-info btn-sm btn-block" type="button" value="Tambah" name="tambah"></td>
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