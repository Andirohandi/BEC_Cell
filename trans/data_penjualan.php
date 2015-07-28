<div id="isi">
	<h2>DATA PENJUALAN<hr/></h2>
	<br/>
	<a href="?tambah_penjualan"><button class="butt butt-success">Tambah</button></a>
	<br/>
	
	<div id="konf_del">
		<form id="form_del_head" method="POST" action="">
		<P style="padding-left:20px;"> Konfirmasi</P><hr style="border:1px solid #dedede;margin-top:-10px;padding-left:20px;"/>
		
		<P style="padding-left:20px;">Apakah anda yakin ingin maenghapus <input type="text" id="no_pn" name="no_pn" style="width:75px;font-family:calibri;font-size:13;border:none;" readonly></p>
		<center><input type="submit" value="Ya" class="butt butt-success" style="width:60px;margin-right:10px;"></form><input type="button" value="Tidak" class="butt butt-default" style="width:60px;" id="kembali"></center>
	</div>
	
	<div id="konf_edit">
		<P style="padding-left:20px;"> Ubah Data Penjualan</P><hr style="border:1px solid #dedede;margin-top:-10px;padding-left:20px;"/>
		<form id="form_edit_penj" method="POST" action="">
			<table style="margin-left:20px;">
				<tr style="height:50px;">
					<td>No Penjualan</td><td> : </td><td><input type="text" name="no_penj" id="no_penj" class="input input-read" readonly /></td>
				</tr>
				<tr style="height:50px;">
					<td>Tanggal</td><td> : </td><td><input type="text" name="tgl_penj" id="tgl_penj" class="input input-read"/></td>
				</tr>
				<tr style="height:50px;">
					<td>Nama Pembeli</td><td> : </td><td><input type="text" name="nama" id="nama" class="input"/></td>
				</tr>
				<tr style="height:50px;">
					<td>No HP</td><td> : </td><td><input type="text" name="no_hp" id="no_hp" class="input"/></td>
				</tr>
			</table>
			<br/>
		<center><input type="submit" value="Ubah" class="butt butt-success" style="width:70px;margin-right:10px;"></form><input type="button" value="Kembali" class="butt butt-default" style="width:70px;" id="kembali"></center>
	</div>
	
	<div id="gambar_overlay_knf"></div>
	
	<br/>
	<table style="border-collapse:collapse" id="table_data">
		<tr style='height:40px;background-color:#f2f4ff;'>
			<th style='min-width:40px;text-align:center'>NO</th>
			<th style='min-width:150px;text-align:center'>NO PENJUALAN</th>
			<th style='min-width:100px;text-align:center'>TANGGAL</th>
			<th style='min-width:150px;text-align:center'>NAMA PEMBELI</th>
			<th style='min-width:150px;text-align:center'>NO HP PEMBELI</th>
			<th style='min-width:150px;text-align:center'>AKSI</td>
		</tr>
		<tbody id="tampil_penjualan">
			
		</tbody>
	</table>
	<br/><br/>
	<div id="message-success"></div>	
</div>



<script type="text/javascript" src="./komp/jquery.js"></script>
<script>
$(document).ready(function()
{
	$().ready(function()
	{
		$.ajax({
			url		: "trans/sel_penjualan.php",
			type  	: "POST",
			dataType: "html",
			data	: $(this).serialize(),
			success : function(html)
			{
				$('#tampil_penjualan').html(html);
			}
		});
	});
	
	$('#form_edit_penj').submit(function(sub){
		sub.preventDefault();
		
		$.ajax({
			url : "trans/edit_penjualan.php",
			type : "POST",
			dataType : "html",
			data : $(this).serialize(),
			beforeSend : function(){
				
			},
			success : function(html){
				$('#tampil_penjualan').load('trans/sel_penjualan.php');
				$('#konf_edit').fadeOut('slow');
				$('#gambar_overlay_knf').fadeOut("slow");
				$('#message-success').text('Data Berhasil Diubah').fadeIn('slow');
				$('#message-success').delay(3000).fadeOut('slow');
			}
		});
	});
	
	$('#form_del_head').submit(function(sub){
		sub.preventDefault();
		
		$.ajax({
			url : "trans/delete_head.php",
			type : "POST",
			dataType : "html",
			data : $(this).serialize(),
			beforeSend : function(){
				
			},
			success : function(html){
				$('#tampil_penjualan').load('trans/sel_penjualan.php');
				$('#konf_del').fadeOut('slow');
				$('#gambar_overlay_knf').fadeOut("slow");
				$('#message-success').text('Data Berhasil Dihapus').fadeIn('slow');
				$('#message-success').delay(3000).fadeOut('slow');
			}
		});
	});
	
	$('#gambar_overlay_knf, #kembali').click(function()
	{
		$('#konf_del').fadeOut('slow');
		$('#konf_edit').fadeOut('slow');
		$('#gambar_overlay_knf').fadeOut("slow");
	});
});

function delete_brg(x)
{
	$('#konf_del').slideDown('slow');
	$('#gambar_overlay_knf').fadeTo("normal", 0.4);
	
	$('#no_pn').val(x);
}

function edit_pnj(w,x,y,z)
{
	$('#konf_edit').slideDown('slow');
	$('#gambar_overlay_knf').fadeTo("normal", 0.4);
	
	$('#no_penj').val(w);
	$('#tgl_penj').val(x);
	$('#nama').val(y);
	$('#no_hp').val(z);
}

function lihat_detail(i)
{
	$('#show').load('trans/detail_penjualan.php?id='+i);
}
</script>