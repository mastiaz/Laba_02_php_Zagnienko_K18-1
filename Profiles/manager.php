<?php
session_start();
require "../classes.php";
require "../users.php";
require "../translate_lang.php";
if($_GET["exit"])
{
	session_destroy(); 
	header("Location: ..\index.php");
}
if ($_SESSION['role']=='client')
{
    header ("Location: ../error403.php");
}
if (isset($_GET['lang'])){
	$_SESSION['lang'] = $_GET['lang'];
}
if ($_POST['role'] == 'client'){
header("Location: client.php");
}
if ($_SESSION['lang'] == 'ru') {
	$manager = new manager($_SESSION['name'], $_SESSION['surname'], $_SESSION['role'], $lang[0]['ru'], $lang[1]['ru']);
}
if ($_SESSION['lang'] == 'en') {
	$manager = new manager($_SESSION['name'], $_SESSION['surname'], $_SESSION['role'], $lang[0]['en'], $lang[1]['en']);
}
if ($_SESSION['lang'] == 'ua') {
	$manager = new manager($_SESSION['name'], $_SESSION['surname'], $_SESSION['role'], $lang[0]['ua'], $lang[1]['ua']);   
}
if ($_SESSION['lang'] == 'it') {
	$manager = new manager($_SESSION['name'], $_SESSION['surname'], $_SESSION['role'], $lang[0]['it'], $lang[1]['it']);
}
$manager ->welcome();
require "../select_lang.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Client</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<form method="GET">
        <input type="submit" class= "exit" name="exit"  value="Exit">
    </form>

    <form name = "select_role" action="client.php" method = "post">
        <button class="button">Client</button>
    </form>
    <form name = "select_role" action = "admin.php" method = "post">
        <button class="button">Admin</button>
    </form>	
</body>
</html>