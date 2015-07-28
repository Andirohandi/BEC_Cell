<?php
	include "../konksi.php";
	$kode	= $_POST['del_kode'];
	
	$sql = "DELETE FROM item WHERE KODE_BRG='$kode'";
	$qry = mysql_query($sql);
	
	$pesan = "";
	
	if($qry)
	{
		$pesan =  "Data Berhasil disimpan";
	}else
	{
			$pesan = "Data gagal disimpan ";
			$pesan .= mysql_error();
	}
	
	$response = array('pesan'=>$kode, 'data'=>$_POST);
	echo json_encode($response);
	exit;
?>