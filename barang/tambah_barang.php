<?php
	include "./konksi.php";
	include "./fungsi.php";
?>
<div id="isi">
	<h2>Tambah Master Barang<hr/></h2>
	<div id="table_input">
		<form method="POST" action="" id="form_master">
			<table>
				<tr>
					<td>Kode Barang</td><td> : </td><td><input type="text" name="kode" id="kode" class="input input-read" readonly value="<?php kodeBarang(); ?>"/></td>
				</tr>
				<tr>
					<td>Nama Barang</td><td> : </td><td><input type="text" name="nama" id="nama" class="required input"/></td>
				</tr>
				<tr>
					<td>Harga</td><td> : </td><td><input type="text" name="harga" id="harga" class="input"/></td>
				</tr>
				<tr>
					<td><input type="submit" class="butt butt-primary" id="simpan" value="Simpan"  /></td><td></td></form><td><a href="?sel_master" style="text-decoration:none;"><input type="button" class="butt butt-default" value='Kembali' /></td>
				</tr>
			</table>
		
		<div id="tunggu"></div>		
		<div id="message-success"></div>		
	</div>
</div>

<script type="text/javascript" src="./komp/jquery.js"></script>
<script type="text/javascript" src="./komp/jquery.form.js"></script>
<script type="text/javascript" src="./komp/jquery.validate.min.js"></script>

<script>
$(document).ready(function()
{
	$('#form_master').submit(function(sub){
		sub.preventDefault();
		//var cek = $('#nama').val();
		$.ajax({
			url : "barang/insert_master.php",
			type : "POST",
			dataType : "html",
			data : $(this).serialize(),
			beforeSend : function(){
				$('#tunggu').text('Mohon Tunggu Sebentar').fadeIn('slow');
			},
			success : function(html){
				$('#form_master')[0].reset(),
				$('#tunggu').fadeOut('slow');
				$('#message-success').text('Data Berhasil Diinput').fadeIn('slow');
				$('#message-success').delay(3000).fadeOut('slow');
				setInterval(function(){window.location.reload()},1000);
			}
		});
	});
});
		

		


 </script>