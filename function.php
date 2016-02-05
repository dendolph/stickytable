<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sticky_table";

$dbc = new PDO("mysql:host=" . $host . ";dbname=" . $db, $user, $pass);
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$data = @$_POST['data'];

$q = "INSERT INTO table_data(`data`) VALUES(:data)";

$query = $dbc->prepare($q);
$query->bindParam(':data', $data);
$results = $query->execute();

?>