<?php
	include "../konksi.php";
	$kode	= $_POST['kode'];
	$nama	= $_POST['nama'];
	$harga	= $_POST['harga'];
	
	$sql = "UPDATE item SET NAMA_BRG='".$nama."', HARGA_BRG='".$harga."' WHERE KODE_BRG='$kode'";
	$qry = mysql_query($sql);
	
	$pesan = "";
	
	if($qry)
	{
		$pesan =  "Data Berhasil diubah";
	}else
	{
			$pesan = "Data gagal diubah ";
			$pesan .= mysql_error();
	}
	
	$response = array('pesan'=>$pesan, 'data'=>$_POST);
	echo json_encode($response);
	exit;
?>