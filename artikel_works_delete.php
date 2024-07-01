<?php
session_start();
require_once 'db.php'; 

$id = base64_decode($_GET['id']);
$dbcon->query("DELETE FROM my_best_artikel WHERE id=$id");
$_SESSION['artikel_works_delete'] = 'Delete Successfully!';
header('location: artikel_works.php');


?>