<?php
//session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Tablica ogłoszeń</title>
</head>
<body>
    <h1> Tablica ogłoszeń</h1>
    <h2> zalogowany</h2>
    <a href="index.php"> powrót do przeglądania ogłoszeń</a>
     <a href="indexZmienH.php"> zmiana hasła</a>
     <a href="UsunLog.php">usuń</a>
   <?php    
 
 require_once('./Logowanie.php');
 
       
  
 $log = new Logowanie('ogloszenia','j23','ogloszenia','localhost');
 
 
 

 if (isset($_GET['akcja']))
     {
	$log->sprawdz_u($_POST['login'],$_POST['haslo']);
   
     }
     
echo ($log->link());
     
?>
