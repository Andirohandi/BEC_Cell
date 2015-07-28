<?php
	include "../konksi.php";
	
	$sql = "SELECt * FROM item";
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
					<td style='min-width:30px;text-align:center'>$no</td>
					<td style='min-width:150px'>$kode</td>
					<td style='min-width:300px'>$nama</td>
					<td style='min-width:150px;text-align:center'> $rupiah</td>
					<td style='min-width:150px;text-align:center'><button class='butt butt-primary' onclick='edit_brg(\"$kode\",\"$nama\",\"$harga\")'>Ubah</button> | <button class='butt butt-danger' onclick='delete_brg(\"$kode\")'>Hapus</button></td>
				</tr>
			";
			$no++;
		}
	}

?>