<?php include_once "head.php"; ?>

	<div id="container_content">
<?php include_once "sidebar.php"; ?>
		
		<div id="mainbar">
			<div class="artikel">
				
<?php 
$id = $_GET['id'];
$sql = mysql_query("select * from artikel where id_artikel = '$id'") or die(mysql_error());
echo "<pre>";
print_r($data = mysql_fetch_array($sql));
echo "</pre>";
$tgl=$data['art_tgl']; 

?>
				<div class="artikel-item-klik">
						<div class="artikel-gambar"><img src="<?php echo $data['art_gambar'];?>"/></div><hr>
						<h1 class="artikel-judul-klik"><?php echo $data['art_judul']; ?><h1>
						<div class="artikel-tgl-klik"><?php echo date("d F Y", strtotime($tgl));?></div>
						<p class="artikel-isi-klik">
							<?php echo $data['art_isi'];?>
						</p>
				</div>

			</div> <!-- artikel -->
		</div> <!-- mainbar -->
	</div> <!-- content -->
	<div class="clearfix"></div>

<?php include_once "foot.php"; ?>