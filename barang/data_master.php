<div id="isi">
	<h2>Master Barang<hr/></h2>
	<br/>
	<a href="?tambah_barang"><button class="butt butt-success">Tambah</button></a>
	<br/>
	
	<div id="konf_del">
		<form id="form_del_mstr" method="POST" action="">
		<P style="padding-left:20px;"> Konfirmasi</P><hr style="border:1px solid #dedede;margin-top:-10px;padding-left:20px;"/>
		<P style="padding-left:20px;">Apakah anda yakin ingin maenghapus <input type="text" id="del_kode" name="del_kode" style="width:75px;font-family:calibri;font-size:13;border:none;" readonly></p>
		<center><input type="submit" value="Ya" class="butt butt-success" style="width:60px;margin-right:10px;"></form><input type="button" value="Tidak" class="butt butt-default" style="width:60px;" id="kembali"></center>
	</div>
	
	<div id="konf_edit">
		<P style="padding-left:20px;"> Ubah Master Barang</P><hr style="border:1px solid #dedede;margin-top:-10px;padding-left:20px;"/>
		<form id="form_edit_mstr" method="POST" action="">
			<table style="margin-left:20px;">
				<tr style="height:50px;">
					<td>Kode Barang</td><td> : </td><td><input type="text" name="kode" id="kode" class="input input-read" readonly /></td>
				</tr>
				<tr style="height:50px;">
					<td>Nama Barang</td><td> : </td><td><input type="text" name="nama" id="nama" class="required input"/></td>
				</tr>
				<tr style="height:50px;">
					<td>Harga</td><td> : </td><td><input type="text" name="harga" id="harga" class="input"/></td>
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
			<th style='min-width:150px;text-align:center'>KODE BRG</th>
			<th style='min-width:300px;text-align:center'>NAMA BRG</th>
			<th style='min-width:150px;text-align:center'>HARGA BRG</th>
			<th style='min-width:100px;text-align:center'>AKSI</td>
		</tr>
		<tbody id="tampil_master">
			
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
			url		: "barang/sel_master.php",
			type	: 'POST',
			dataType: 'html',
			data : $(this).serialize(),
			success : function(html)
			{
				$('#tampil_master').html(html);
			}
		});
	});
	
	$('#form_del_mstr').submit(function(sub){
		sub.preventDefault();
		var del_kode = $('#del_kode').val();
		$.ajax({
			url : "barang/delete_master.php",
			type : "POST",
			dataType : "html",
			data : $(this).serialize(),
			beforeSend : function(){
				
			},
			success : function(html){
				$('#tampil_master').load('barang/sel_master.php');
				$('#konf_del').fadeOut('slow');
				$('#gambar_overlay_knf').fadeOut("slow");
				$('#message-success').text('Data Berhasil Dihapus').fadeIn('slow');
				$('#message-success').delay(3000).fadeOut('slow');
			}
		});
	});
	
	$('#form_edit_mstr').submit(function(sub){
		sub.preventDefault();
		
		$.ajax({
			url : "barang/edit_master.php",
			type : "POST",
			dataType : "html",
			data : $(this).serialize(),
			beforeSend : function(){
				
			},
			success : function(html){
				$('#tampil_master').load('barang/sel_master.php');
				$('#konf_edit').fadeOut('slow');
				$('#gambar_overlay_knf').fadeOut("slow");
				$('#message-success').text('Data Berhasil Diubah').fadeIn('slow');
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

function delete_brg(i,j,k)
{
	$('#konf_del').slideDown('slow');
	$('#gambar_overlay_knf').fadeTo("normal", 0.4);
	$('#del_kode').val(i);
	
}

function edit_brg(i,j,k)
{
	$('#konf_edit').slideDown('slow');
	$('#gambar_overlay_knf').fadeTo("normal", 0.4);
	$('#kode').val(i);
	$('#nama').val(j);
	$('#harga').val(k);
}


</script>