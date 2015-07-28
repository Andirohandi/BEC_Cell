<?php 
	include "../konksi.php";
	$kode = $_POST['kode2'];
	$no_penj = $_POST['no_amb'];
	$harga = $_POST['harga2'];
	$jumlah = $_POST['jumlah2'];
	$sub = $_POST['subtotal2'];
	
	$sql = "INSERT INTO  detail_penjualan(NO_PENJ,KODE_BRG,HARGA_BRG,JUMLAH,SUBTOTAL) values('".$no_penj."','".$kode."','".$harga."','".$jumlah."','".$sub."')";
	$qry = mysql_query($sql);
	
	if($qry)
	{
		$pesan = "Data Berhasil Diinput";
	}else
	{
		$pesan = "Data Gagl Diinput";
		$pesan .= mysql_error();
	}
	
	echo json_encode($pesan);

?>