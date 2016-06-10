<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ogloszenia użytkownika</title>
    </head>
    <body>
        
    <h2> Uwaga wraz z usunięciem użytkownika zostaną usunięte wszystkie jego ogłoszenia</h2>
    <a href="index.php"> powrót do przeglądania ogłoszeń</a>
    <a href="indexLog.php"> Zaloguj się </a>
        <?php
       require_once('./Usuwanie.php');
 $usun = new Usuwanie ('ogloszenia','j23','ogloszenia','localhost');
 
 if (isset($_GET['akcjaU']))
     {   $id_u= $_SESSION["id_u"];
         $usun->usun_uzytkownika($id_u);
        echo "<h3>Użytkownik został usunięty</h3>";
           $_SESSION["id_u"]=null;
      $_SESSION["login"]=null;
        
        }
 

?>
<form action="IndexUsunUzytkownika.php?akcjaU=usun_uzytkownika" method="post">
 <input type="submit" value="Usuń użytkownika" />
</form>
</body></html>
