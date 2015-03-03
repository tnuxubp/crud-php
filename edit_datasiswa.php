<html>
<head></head>
<body>
<?php
    include('konek.php');
    $id= new MongoId($_GET['id']);
    $detil=$collection->findOne(array('_id'=>$id));
     
?>
    <h1>Edit Artikel</h1>
    <form action="proses_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>"/>
		<label>Nama</label> : <input type="text" value="<?php echo $detil['nama']?>" name="nama"/><br/>
        <label>alamat</label> : <input type="text" value="<?php echo $detil['alamat']?>" name="alamat"/><br/>
        <label>nim</label> : <input type="text" value="<?php echo $detil['nim']?>" name="nim"/><br/>
        <input type='submit' value='simpan'/>
    </form>
	
</body>
</html>
