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
    <h2> logowanie</h2>
    <a href="index.php"> powrót do przeglądania ogłoszeń</a>
    
   <?php    
 
 require_once('./Logowanie.php');
 
       
  
 $log = new Logowanie('ogloszenia','j23','ogloszenia','localhost');
 
 
 

 if (isset($_GET['akcja']))
     {
	$log->sprawdz_u($_POST['login'],$_POST['haslo']);
   
     }
     
echo ($log->link());
     
?>
<form action="indexZalogowany.php?akcja=sprawdz_u" method="post">
 <label for="login">login</label>
 <input type="text" name="login" />
 <label for="haslo">hasło</label>
 <input type="password" name="haslo" />
 <input type="submit" value="Zaloguj" />
</form>
</body>
</html>

