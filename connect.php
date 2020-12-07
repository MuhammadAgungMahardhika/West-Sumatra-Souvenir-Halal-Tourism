<?php
	$host = "ec2-34-202-65-210.compute-1.amazonaws.com";
$dbname="d8e81d9b1vssg0";
$user="xgyvwwmmfywbcj";
$port="5432";
$pass="e2b76172529e80a65bb47ab7849774d499ef521cc9d09431ab69669604b56885";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
