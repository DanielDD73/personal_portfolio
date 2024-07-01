<?php
session_start();
require_once "db.php"; 
$id = base64_decode($_GET['id']);
$dbcon->query("DELETE FROM skill WHERE id=$id");
$_SESSION['skill_delete'] = "Delete Successfully!";
header('location: skill.php');

?>