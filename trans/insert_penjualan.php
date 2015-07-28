<?php
	include "../konksi.php";
	$no_penj	= $_POST['no_penj'];
	$tgl_penj	= mysql_real_escape_string($_POST['tgl_penj']);
	
		$tggl = explode("-",$tgl_penj);
		$t_th = $tggl[2];
		$tahun = (int)$t_th + 2000;
		$t_bln = $tggl[1];
		$t_tgl = $tggl[0];
		
		switch($t_bln)
		{
			case "Jan" : $t_bln = "01"; break;
			case "Feb" : $t_bln = "02"; break;
			case "Mar" : $t_bln = "03"; break;
			case "Apr" : $t_bln = "04"; break;
			case "May" : $t_bln = "05"; break;
			case "Jun" : $t_bln = "06"; break;
			case "Jul" : $t_bln = "07"; break;
			case "Aug" : $t_bln = "08"; break;
			case "Sept" : $t_bln = "09"; break;
			case "Oct" : $t_bln = "10"; break;
			case "Nov" : $t_bln = "11"; break;
			case "Des" : $t_bln = "12"; break;
			default	: $t_bln  = "error";	break;
		}
	
		$tanggal = $tahun."-".$t_bln."-".$t_tgl;

	$nama_pemb	= mysql_real_escape_string($_POST['nama_pemb']);
	$no_hp	= mysql_real_escape_string($_POST['no_hp']);
	$id		= "";
	
	$sql = "INSERT INTO head_penjualan(ID_PENJ,NO_PENJ,TGl_PENJ,NAMA_PEMB,NO_HP_PEMB) values('".$id."','".$no_penj."','".$tanggal."','".$nama_pemb."','".$no_hp."')";
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