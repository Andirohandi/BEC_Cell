<?php 
	include "../konksi.php";
	
	$no_pemb = $_GET['id'];
	$sql = "SELECT t.*, it.* FROM detail_penjualan t INNER JOIN item it ON t.KODE_BRG = it.KODE_BRG WHERE t.No_PENJ='".$no_pemb."'";
	$qry = mysql_query($sql);
	$num = mysql_num_rows($qry);
	
	if($num>0)
	{
		$no = 1;
		while($row = mysql_fetch_assoc($qry))
		{
			$kode = $row['KODE_BRG'];
			$nama = $row['NAMA_BRG'];
			$hrg = $row['HARGA_BRG'];
			$harga = number_format($hrg,0,',','.');
			$no_penj = $row['NO_PENJ'];
			$jumlah = $row['JUMLAH'];
			$sb = $row['SUBTOTAL'];
			$sub = number_format($sb,0,',','.');
			$tot += $sb;
			$total = number_format($tot,0,',','.');
			echo "
			<tr style='border-bottom:1px solid #dedede;font-size:13px;height:30px;'>
				<td style='min-width:30px;text-align:center'>$no</td>
				<td style='min-width:60px;text-align:left'>$kode</td>
				<td style='min-width:180px;text-align:left'>$nama</td>
				<td style='min-width:70px;text-align:right'>$harga</td>
				<td style='min-width:70px;text-align:center'>$jumlah</td>
				<td style='min-width:80px;text-align:right'>$sub</td>
				<td style='min-width:70px;text-align:center'><button class='butt butt-danger' onclick='delete_brg(\"$kode\",\"$no_penj\")'>Hapus</button></td>
			</tr>
			";
			$no++;
		}
		echo "
			<tr style='border-bottom:1px solid #dedede;font-size:13px;height:30px;'>
				<td colspan='5'><b>TOTAL</b></td><td align='right'><b>$total</b></td>
			</tr>
		";
	}


?>