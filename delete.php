<?php 
$id = $_GET['id'];
$con = new PDO('mysql:host=sql6.freesqldatabase.com;dbname=sql6465204', 'sql6465204', 'cwwpchEAcJ');
$statement = $con->prepare('delete from booklists where id=:id');
$statement->execute([
  ':id' => $id
]);

header('location: index.php');
