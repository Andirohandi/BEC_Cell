<?php
	include "../konksi.php";
	$kode	= $_POST['i'];
	$sql = "SELECt * FROM item WHERE KODE_BRG LIKE '%$kode%' OR NAMA_BRG LIKE '%$kode%' LIMIT 5";
	$qry = mysql_query($sql);
	$num = mysql_num_rows($qry);
	$no	 = 0;
	$result = array();
	if($num>0)
	{
		while($row = mysql_fetch_assoc($qry))
		{
			$result[$no] =array(
				'id' 	=> $row['ID_BRG'],
				'kode' 	=> $row['KODE_BRG'],
				'nama' 	=> $row['NAMA_BRG'],
				'harga' => $row['HARGA_BRG'],
				'rupiah'=> number_format($row['HARGA_BRG'],2,',','.')
			);
			$no++;
		}
	}
	
	echo json_encode($result);

?>