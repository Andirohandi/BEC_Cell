<?php
	$no_pnj = $_GET['id'];	
?>
<link  href="komp/style.css" rel="stylesheet" type="text/css"/>
<div id="isi">
	<h2>Input Detail Penjualan<hr/></h2>
	
	<div id="accordion">
		<table style='margin-left:10px;'>
			<tr style="height:40px;">
				<td>No Penjualan &nbsp;</td><td> : </td><td><?php echo $no_pnj;?></td>
			</tr>
		</table>
	</div>
	<div id="accordion-body">
		<table style='margin-left:10px;'>
			<tr style="height:40px;">
				<td>Tanggal </td><td> : </td><td><input type="text" id="tgl" name="tgl" readonly style="border:none;background-color:#f2f4ff"></td>
			</tr>
			<tr style="height:40px;">
				<td>Nama Pembeli </td><td> : </td><td><input type="text" id="nama" name="nama" readonly style="border:none;background-color:#f2f4ff"></td>
			</tr>
			<tr style="height:40px;">
				<td>No HP </td><td> : </td><td><input type="text" id="no" name="no" readonly style="border:none;background-color:#f2f4ff"></td>
			</tr>
		</table>
	</div>
	<br/>
	
	<div id="cari_mstr">
		<P style="padding-left:20px;"> Cari Barang</P><hr style="border:1px solid #dedede;margin-top:-10px;padding-left:20px;"/>
		
		<form id="form_cari_master" method="POST" action="">
			<input type="text" name="kode_brg" id="kode_brg" class="input" style="margin-left:20;width:560px;" placeholder="Masukkan Kode / Nama barang	" onkeyup="cari_ms(this.value)">
		</form>
			<table style="border-collapse:collapse;margin:auto;margin-top:10px;" id="table_data">
				<tr style='height:40px;background-color:#f2f4ff;'>
					<th style='min-width:40px;text-align:center'>NO</th>
					<th style='min-width:110px;text-align:center'>KODE BRG</th>
					<th style='min-width:220px;text-align:center'>NAMA BRG</th>
					<th style='min-width:110px;text-align:center'>HARGA BRG</th>
					<th style='min-width:70px;text-align:center'>AKSI</td>
				</tr>
				<tbody id="tampil_master">
					
				</tbody>
			</table>
			<br/>
		<center><input type="button" value="Kembali" class="butt butt-default" style="width:70px;" id="kembali"></center>
		<br/>
	</div>
	
	<div id="konf_del">
		<form id="form_del_det" method="POST" action="">
		<P style="padding-left:20px;"> Konfirmasi</P><hr style="border:1px solid #dedede;margin-top:-10px;padding-left:20px;"/>
		<input type="text" name="no_pn" id="no_pn" />
		<P style="padding-left:20px;">Apakah anda yakin ingin maenghapus <input type="text" id="del_kode" name="del_kode" style="width:75px;font-family:calibri;font-size:13;border:none;" readonly></p>
		<center><input type="submit" value="Ya" class="butt butt-success" style="width:60px;margin-right:10px;"></form><input type="button" value="Tidak" class="butt butt-default" style="width:60px;" id="kembali"></center>
	</div>
	
	<div id="gambar_overlay_knf"></div>
	
	<br/>
	
	<div id="left-container">
		<table style="border-collapse:collapse;margin:auto;margin-top:0;" id="table_data">
			<tr style='height:40px;background-color:#f2f4ff;'>
				<th style='min-width:30px;text-align:center'>NO</th>
				<th style='min-width:60px;text-align:center'>KODE BRG</th>
				<th style='min-width:180px;text-align:center'>NAMA BRG</th>
				<th style='min-width:70px;text-align:center'>HARGA</th>
				<th style='min-width:70px;text-align:center'>JUMLAH</th>
				<th style='min-width:80px;text-align:center'>SUBTOTAL</th>
				<th style='min-width:70px;text-align:center'>AKSI</th>
			</tr>
			<tbody id="tampil_detail">
				
			</tbody>
		</table>
		<br/><br/>
		
	</div>
	
	<div id="right-container"> 
		<form name="input_detail" id="input_detail" action="" method="POST">
			<input type="hidden" id="no_amb" name="no_amb" value="<?php echo $no_pnj?>">
			<div id="head">
				<h4>Input Detail</h4>
			</div>
			<table style="margin-left:10px;">
				<tr style="height:10px;"></tr>
				<tr>
					<td>Kode Barang :</td>
				</tr>
				<tr>
					<td><input type="text" name="kode2" id="kode2" class="input input-read" style="width:150px;" readonly /></td>
					<td><input type="button" class="butt butt-default" id="cari" value="Cari" style="height:28px;"/></td>
				</tr>
				<tr style="height:10px;"></tr>
				<tr>
					<td>Nama Barang :</td>
				</tr>
				<tr>
					<td colspan='2'><input type="text" name="nama2" id="nama2" class="input input-read" readonly /></td>
				</tr>
				<tr style="height:10px;"></tr>
				<tr>
					<td colspan='2'>Harga :</td>
				</tr>
				<tr>
					<td colspan='2'><input type="text" name="harga2" id="harga2" class="input input-read" readonly /></td>
				</tr>
				<tr style="height:10px;"></tr>
				<tr>
					<td colspan='2'>Jumlah :</td>
				</tr>
				<tr>
					<td colspan='2'><input type="text" name="jumlah2" id="jumlah2" class="input" onkeyup='sub(this.value)'/></td>
				</tr>
				<tr style="height:10px;"></tr>
				<tr>
					<td colspan='2'>Subtotal :</td>
				</tr>
				<tr>
					<td colspan='2'><input type="text" name="subtotal2" id="subtotal2" class="input input-read" readonly /></td>
				</tr>
				<tr style="height:20px;"></tr>
				<tr>
					<td colspan='2' align="right"><input type="submit" name="tambah" id="tambah" value="Tambah" class="butt butt-primary" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>

<script type="text/javascript" src="komp/jquery.js"></script>
<script type="text/javascript" src="komp/jquery.form.js"></script>
<script>
$(document).ready(function()
{
	$().ready(function()
	{
		var no_pemb = $('#no_amb').val();
			$.ajax({
				url		: 'trans/sel_detail_tmp.php?id='+no_pemb,
				type	: 'POST',
				dataType: 'html',
				data : $(this).serialize(),
				success : function(html)
				{
					$('#tampil_detail').html(html);
				}
			});
		
	});
	
	$().ready(function()
	{
		$.ajax({
			url		: "barang/cari_master.php",
			type	: 'POST',
			dataType: 'html',
			data : $(this).serialize(),
			success : function(html)
			{
				$('#tampil_master').html(html);
			}
		});
	});
	
	$('#input_detail').submit(function(sub){
		sub.preventDefault();
		
		var no_pemb = $('#no_amb').val();
		$.ajax({
			url : "trans/insert_detail.php",
			type : "POST",
			dataType : "html",
			data : $(this).serialize(),
			beforeSend : function(){
				
			},
			success : function(html){
				$('#kode2').val('');
				$('#nama2').val('');
				$('#harga2').val('');
				$('#subtotal2').val('');
				$('#jumlah2').val('');
				$('#tampil_detail').load('trans/sel_detail_tmp.php?id='+no_pemb);
			}
		});
	});
	
	$('#form_del_det').submit(function(sub){
		sub.preventDefault();
		var no_pemb = $('#no_amb').val();
		$.ajax({
			url : "trans/delete_dtail.php",
			type : "POST",
			dataType : "html",
			data : $(this).serialize(),
			beforeSend : function(){
				
			},
			success : function(html){
				$('#tampil_detail').load('trans/sel_detail_tmp.php?id='+no_pemb);
				$('#konf_del').fadeOut('slow');
				$('#gambar_overlay_knf').fadeOut("slow");
				$('#message-success').text('Data Berhasil Dihapus').fadeIn('slow');
				$('#message-success').delay(3000).fadeOut('slow');
			}
		});
	});
	
	$('#accordion').click(function()
	{
		var no = $('#no_amb').val();
		$('#accordion-body').slideToggle('slow');
		$.post("trans/ambil_head.php",{no:no},function(dataJSON)
		{
			var data = jQuery.parseJSON(dataJSON);
			$('#tgl').val(data.tgl_penj);
			$('#nama').val(data.nama_pemb);
			$('#no').val(data.no_hp);
		});
	});
	
	$('#cari').click(function()
	{
		$('#cari_mstr').slideDown('slow');
		$('#gambar_overlay_knf').fadeTo("normal", 0.4);
	
	});
		
	$('#gambar_overlay_knf, #kembali').click(function()
	{
		$('#cari_mstr').fadeOut('slow');
		$('#konf_del').fadeOut('slow');
		$('#gambar_overlay_knf').fadeOut("slow");
	});
});

function ambil_brg(i,j,k)
{
	$('#kode2').val(i);
	$('#nama2').val(j);
	$('#harga2').val(k);
	$('#cari_mstr').fadeOut('slow');
	$('#gambar_overlay_knf').fadeOut("slow");
}

function sub(i)
{
	var harga = $('#harga2').val();
	var subtot = harga * i;
	$('#subtotal2').val(subtot);
}

function cari_ms(i)
{
	
	$.post("barang/cari_master_lookup.php",{i:i},function(dataJSON)
	{
		var data = jQuery.parseJSON(dataJSON);
		var cont = '';
		var count = 1;
		
		for(var i=0; i<data.length; i++)
		{
			cont +="<tr style='border-bottom:1px solid #dedede;font-size:13px;height:30px;'>";
			cont +="<td style='min-width:40px;text-align:center'>"+count+"</td>";
			cont +="<td style='min-width:110px'>"+data[i].kode+"</td>";
			cont +="<td style='min-width:220px'>"+data[i].nama+"</td>";
			cont +="<td style='min-width:110px;text-align:center'>"+data[i].rupiah+"</td>";
			cont +="<td style='min-width:70px;text-align:center'><button class='butt butt-primary' onclick='ambil_brg(\""+data[i].kode+"\",\""+data[i].nama+"\",\""+data[i].harga+"\")' id='ambil'>Pilih</button></td>";
			cont +="</tr>";
			count++;
		}
		$('#tampil_master').empty().append(cont);
	});
	
}

function delete_brg(x,y)
{
	$('#konf_del').slideDown('slow');
	$('#gambar_overlay_knf').fadeTo("normal", 0.4);
	$('#del_kode').val(x);
	$('#no_pn').val(y);
}
</script>
