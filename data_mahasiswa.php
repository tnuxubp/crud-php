<html>
<head></head>
<body>
<center><a href="index.php">Tambah Data Siswa</a><br/></center>
<?php
	 include('konek.php');
?>
<table border=1 align="center">
	<tr>
		<th>NO</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Nim</th>
		<th>Aksi</th>
	</tr>
<?php
    $listartikel= $db->mahasiswa->find();
	$no=1;
	foreach($listartikel as $id=>$b){
		
				echo	"<tr>
							<td>".$no++."</td>
							<td>".$b['nama']."</td>
							<td>".$b['alamat']."</td>
							<td>".$b['nim']."</td>
							<td><a href='edit_datasiswa.php?id=".$id."'>[Edit]</a> | "."<a href='delete_datasiswa.php?id=".$id."'>[Delete]</a></td>
						</tr>";
	}
?>
</table>
</body>
</html>