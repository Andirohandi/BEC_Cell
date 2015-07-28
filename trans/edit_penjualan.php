<?php
	include "../konksi.php";
	$no_penj	= $_POST['no_penj'];
	$nama	= $_POST['nama'];
	$no_hp	= $_POST['no_hp'];
	
	$sql = "UPDATE head_penjualan SET NAMA_PEMB='".$nama."', NO_HP_PEMB='".$no_hp."' WHERE NO_PENJ='$no_penj'";
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