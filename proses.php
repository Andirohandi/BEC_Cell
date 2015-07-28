<?php
if(isset($_GET['tambah_barang'])){ include "barang/tambah_barang.php";}else
if(isset($_GET['sel_master'])){ include "barang/data_master.php";}else
if(isset($_GET['sel_penjualan'])){ include "trans/data_penjualan.php";}else
if(isset($_GET['tambah_penjualan'])){ include "trans/tambah_penjualan.php";}else
if(isset($_GET['detail_penjualan'])){ include "trans/detail_penjualan.php";}else
if(isset($_GET['beranda'])){ include "beranda.php";}
else { include "beranda.php";}



?>