<?php
$servername = "localhost"; // name of server
$name_db = "project"; //name of table

$conn = new mysqli($servername, "root", "", $name_db);
$conn->set_charset( 'utf8' );
 ?>