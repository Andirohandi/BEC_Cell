<?php
	include "../konksi.php";
	$kode	= $_POST['kode'];
	$nama	= mysql_real_escape_string($_POST['nama']);
	$harga	= mysql_real_escape_string($_POST['harga']);
	$id		= "";
	
	$sql = "INSERT INTO item(ID_BRG,KODE_BRG,NAMA_BRG,HARGA_BRG) values('".$id."','".$kode."','".$nama."','".$harga."')";
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
	
	$response = array('pesan'=>$pesan, 'data'=>$_POST);
	echo json_encode($response);
	exit;
?>