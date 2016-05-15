<?php
//session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Tablica ogłoszeń</title>
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <h1> Tablica ogłoszeń</h1>
   
   
    
   <?php    
 
 require_once('./Logowanie.php');
 
       
  
 $log = new Logowanie('ogloszenia','j23','ogloszenia','localhost');
 
 
 

 if (isset($_GET['akcjaL']))
     {
	$log->sprawdz_u($_POST['login'],$_POST['haslo']);
   
     }
     
echo ($log->link());
     
?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>

