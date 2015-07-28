<?php
	include "../konksi.php";
	
	$sql = "SELECT * FROM head_penjualan";
	$qry = mysql_query($sql);
	$num = mysql_num_rows($qry);
	
	if($num>0)
	{
		$no = 1;
		while($row = mysql_fetch_assoc($qry))
		{
			$id		   = $row['ID_PENJ'];
			$no_penj   = $row['NO_PENJ'];
			$tgl_penj  = $row['TGL_PENJ'];
			$nama_pemb = $row['NAMA_PEMB'];
			$no_hp	   = $row['NO_HP_PEMB'];
			
			echo "
				<tr style='border-bottom:1px solid #dedede;font-size:13px;height:30px;'>
					<td style='min-width:30px;text-align:center'>$no</td>
					<td style='min-width:150px'>$no_penj</td>
					<td style='min-width:100px'>$tgl_penj</td>
					<td style='min-width:150px;text-align:center'>$nama_pemb</td>
					<td style='min-width:150px;text-align:center'>$no_hp</td>
					<td style='min-width:150px;text-align:center'><button class='butt butt-primary' onclick='edit_pnj(\"$no_penj\",\"$tgl_penj\",\"$nama_pemb\",\"$no_hp\")'>Ubah</button> | <button class='butt butt-default' onclick='lihat_detail(\"$no_penj\")'>Detail</button></a> | <button class='butt butt-danger' onclick='delete_brg(\"$no_penj\")'>Hapus</button></td>
				</tr>
			";
			$no++;
		}
	}

?>