<?php
	include "../konksi.php";
	$kode	= $_POST['del_kode'];
	$no_penj= $_POST['no_pn'];
	
	$sql = "DELETE FROM detail_penjualan WHERE NO_PENJ='$no_penj' AND KODE_BRG='$kode'";
	$qry = mysql_query($sql);
	
	$pesan = "";
	
	if($qry)
	{
		$pesan =  "Data Berhasil Dihapus";
	}else
	{
			$pesan = "Data gagal Dihapus ";
			$pesan .= mysql_error();
	}
	
	$response = array('pesan'=>$kode, 'data'=>$_POST);
	echo json_encode($response);
	exit;
?>