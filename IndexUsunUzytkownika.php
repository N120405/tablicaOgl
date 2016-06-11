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
        <title> Usuwanie użytkownika </title>
    </head>
    <body>
        
    <h2> Uwaga wraz z usunięciem użytkownika zostaną usunięte wszystkie jego ogłoszenia</h2>
    <a href="index.php"> Powrót do przeglądania ogłoszeń </a>
   
        <?php
       require_once('./Usuwanie.php');
 $usuwanie = new Usuwanie ('ogloszenia','j23','ogloszenia','localhost');
 
 if (isset($_GET['akcjaU']))
     {   switch($_GET['akcjaU']){
     case 'usun':
         $usuwanie->usun_uzytkownika($_GET['id_u']);
        echo "<h3> Użytkownik został usunięty </h3>";
           $_SESSION["id_u"]=null;
      $_SESSION["login"]=null;
        
     }}
 $lu = $usuwanie ->listaUzytkownikow();
 
 echo('<ul class="list-group">');
 foreach($lu as $item){
 echo('<li class="list-group-item">'.$item['login'].'<a href="indexUsunUzytkownika.php?akcjaU=usun&id_u='.$item['id_u'].'"> Usun </a></li>');
}
echo('</ul>'
            
      );

?>

</body></html>
