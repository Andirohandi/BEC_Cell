<?php
	include "../konksi.php";
	$no_penj= $_POST['no_pn'];
	
	$del = "DELETE FROM head_penjualan WHERE NO_PENJ='$no_penj'";
	$qry = mysql_query($del);
	
	
	$pesan = "";
	
	if($qry)
	{
		$sql = "DELETE FROM detail_penjualan WHERE NO_PENJ='$no_penj'";
		mysql_query($sql);
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