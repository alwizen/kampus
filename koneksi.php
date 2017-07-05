<?php 
$link = mysql_connect("localhost","root","");
mysql_select_db("test");
$result = mysql_query("SELECT * FROM mahasiswa");
$row = mysql_fetch_assoc($result);

$mysqli_ = new mysqli("localhost","root","","test");
$result = mysqli->query("SELECT * FROM mahasiswa");
$row = $result->retch_assoc();

$pdo = new PDO ('mysql:host=localhost;dbname=test','root','');
$statement = $pdo->query("SELECT * FROM mahasiswa");
$row = $statement->fetch(PDO::FETCH_ASSOC);
 ?>