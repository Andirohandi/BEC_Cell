<?php 
	include "../konksi.php";
	$no_penj = $_POST['no'];
	$sql = "SELECT * FROM head_penjualan WHERE NO_PENJ='".$no_penj."'";
	$qry = mysql_query($sql);
	$row = mysql_fetch_assoc($qry);
	
	$data = array(
		'tgl_penj' => $row['TGL_PENJ'],
		'nama_pemb' => $row['NAMA_PEMB'],
		'no_hp' => $row['NO_HP_PEMB']
	);
	
	echo json_encode($data);

?>