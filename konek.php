<?php
    $host   = $_ENV["OPENSHIFT_MONGODB_DB_HOST"];
    $user   = $_ENV["OPENSHIFT_MONGODB_DB_USERNAME"];
    $passwd = $_ENV["OPENSHIFT_MONGODB_DB_PASSWORD"];
    $port   = $_ENV["OPENSHIFT_MONGODB_DB_PORT"];
    $conn = "mongodb://" . $user . ":" . $passwd . "@" . $host . ":" . $port;
    $mongo = new Mongo($conn);
    $db = $mongo->ahmad82;
	$collection = $db->mahasiswa;
?>
