<?php
    include('konek.php');
    $collection->remove( array( '_id' => new MongoID($_GET['id'])));
    header('location:data_mahasiswa.php');
?>