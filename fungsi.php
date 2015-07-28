<?php
include "./konksi.php";

function kodeBarang()
{
	$sql = "SELECT * FROM item ORDER BY ID_BRG DESC LIMIT 1";
	$qry = mysql_query($sql);
	$num = mysql_num_rows($qry);
	
	if($num>0)
	{
		$row = mysql_fetch_assoc($qry);
		$kode = $row['KODE_BRG'];
		$kd	= explode('-',$kode);
		$kod_1 = ($kd[1]);
		$kd_int = (int) $kod_1 + 1;
		$kod_0 = $kd[0];
		$cont = count($kd_int);
		
		if($cont==1) echo $kod_0."-000".$kd_int;
		else if($cont==2) echo $kod_0."-00".$kd_int;
		else if($cont==3) echo $kod_0."-0".$kd_int;
		else if($cont==4) echo $kod_0."-".$kd_int;
		else echo "Tidak Ditemukan";
	}else "BRG-0001";
}

function noPenjualan()
{
	$sql = "SELECT * FROM head_penjualan ORDER BY ID_PENJ DESC LIMIT 1";
	$qry = mysql_query($sql);
	$num = mysql_num_rows($qry);
	
	if($num>0)
	{
		$row = mysql_fetch_assoc($qry);
		$kode = $row['NO_PENJ'];
		$kd	= explode('-',$kode);
		$kod_1 = ($kd[1]);
		$kd_int = (int) $kod_1 + 1;
		$kod_0 = $kd[0];
		$cont = count($kd_int);
		
		if($cont==1) echo $kod_0."-000".$kd_int;
		else if($cont==2) echo $kod_0."-00".$kd_int;
		else if($cont==3) echo $kod_0."-0".$kd_int;
		else if($cont==4) echo $kod_0."-".$kd_int;
		else echo "Tidak Ditemukan";
	}else echo "PNJ-0001";
		
}

function tanggal()
{
	$dt = date('d-M-y');
	
	echo $dt;
}
?>