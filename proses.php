<?php
    include('konek.php');
	$nama=$_POST["nama"];
	$alamat=$_POST["alamat"];
	$nim=$_POST["nim"];
	$document = array( "nama" => "$nama","alamat" => "$alamat", "nim" => "$nim" );
	$collection->insert($document);
	header('location:data_mahasiswa.php');

?>