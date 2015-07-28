<?php
	include "../konksi.php";
	
	$sql = "SELECt * FROM item LIMIT 5";
	$qry = mysql_query($sql);
	$num = mysql_num_rows($qry);
	$no	 = 1;
	if($num>0)
	{
		while($row = mysql_fetch_assoc($qry))
		{
			$id 	= $row['ID_BRG'];
			$kode 	= $row['KODE_BRG'];
			$nama 	= $row['NAMA_BRG'];
			$harga 	= $row['HARGA_BRG'];
			$rupiah = number_format($harga,2,',','.');
			echo "
				<tr style='border-bottom:1px solid #dedede;font-size:13px;height:30px;'>
					<td style='min-width:40px;text-align:center'>$no</td>
					<td style='min-width:110px'>$kode</td>
					<td style='min-width:220px'>$nama</td>
					<td style='min-width:110px;text-align:center'> $rupiah</td>
					<td style='min-width:70px;text-align:center'><button class='butt butt-primary' onclick='ambil_brg(\"$kode\",\"$nama\",\"$harga\")' id='ambil'>Pilih</button></td>
				</tr>
			";
			$no++;
		}
	}

?>