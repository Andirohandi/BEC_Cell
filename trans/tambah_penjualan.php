<?php
	include "./konksi.php";
	include "./fungsi.php";
?>
<div id="isi">
	<h2>Tambah Penjualan<hr/></h2>
	<div id="table_input">
		<form method="POST" action="" id="form_head_penj">
			<table>
				<tr>
					<td>No Penjualan</td><td> : </td><td><input type="text" name="no_penj" id="no_penj" class="input input-read" readonly value="<?php noPenjualan(); ?>"/></td>
				</tr>
				<tr>
					<td>Tanggal</td><td> : </td><td><input type="text" name="tgl_penj" id="tgl_penj" class="input input-read"value="<?php tanggal();?>"/></td>
				</tr>
				<tr>
					<td>Nama Pembeli</td><td> : </td><td><input type="text" name="nama_pemb" id="nama_pemb" class="input"/></td>
				</tr>
				<tr>
					<td>No Hp</td><td> : </td><td><input type="text" name="no_hp" id="no_hp" class="input"/></td>
				</tr>
				<tr>
					<td colspan="3"><hr style="border:1px solid #dedede"/></td>
				</tr>
				<tr>
					<td><input type="submit" class="butt butt-primary" id="simpan" value="Simpan"  /></td><td></td></form><td><a href="?sel_penjualan" style="text-decoration:none;"><input type="button" class="butt butt-default" value='Kembali' /></td>
				</tr>
			</table>
		
		<div id="tunggu"></div>		
		<div id="message-success"></div>		
	</div>
</div>

<script type="text/javascript" src="./komp/jquery.js"></script>
<script type="text/javascript" src="./komp/bootstrap-datepicker.js"></script>
<script>
$(document).ready(function()
{
	$('#form_head_penj').submit(function(sub)
	{
		var no_penj = $('#no_penj').val();
		var tgl_penj = $('#tgl_penj').val();
		var nama_pemb = $('#nama_pemb').val();
		var no_hp = $('#no_hp').val();
		
		sub.preventDefault();
		$.ajax({
			url		: "trans/insert_penjualan.php",
			type	: "POST",
			dataType: "html",
			data	: $(this).serialize(),
			
			beforeSend : function(){
				$('#tunggu').text('Mohon Tunggu Sebentar...').fadeIn('slow');
			},
			success : function(html){
				$('#show').load('trans/detail_penjualan.php?id='+no_penj);
			}
		});
	});
	
	$('#tgl_penj').datepicker({
		changeMonth : true,
		changeYear : true,
					
	});
});


</script>
