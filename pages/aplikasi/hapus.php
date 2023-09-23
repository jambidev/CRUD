<?php
require '../koneksi.php';
echo 'hahaha';
if(isset($_POST['id'])){
	$id = $_POST['id'];
?>
<div class="container">
	<form id="" action="proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<h2 align="">Yakin ngehapus yang satu ini?</h2>
		<table align="">
			<tr>
				<th width="265"><input type='submit' name="hapus" value="hapus" class="btn btn-danger btn-sm btn-block"></th>
				<th width="265"><button type="button" class="btn btn-default btn-sm btn-block" data-dismiss="modal">Batal</button></th>
			</tr>
		</table>
	</form>
</div>	
<?php
}else{
	header('location:lihat.php');
}
?>