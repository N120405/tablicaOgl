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
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        
   <div class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse" id="mynavbar-content">
<ul class="nav navbar-nav">
<li ><a href="IndexZatwOgloszen.php"> Zatwierdzanie i edycja ogłoszeń </a></li>
<li><a href="Wyloguj.php"> Wyloguj </a></li>
<li><a href="index.php"> Powrót do przeglądania ogłoszeń </a></li>
</ul>
</div>
</div>
</div>      
        
    <h3> Uwaga wraz z usunięciem użytkownika zostaną usunięte wszystkie jego ogłoszenia ! </h3>
   
   
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
 echo('<li class="list-group-item">'.$item['login'].'</br><a href="indexUsunUzytkownika.php?akcjaU=usun&id_u='.$item['id_u'].'"> Usun </a></li>');
}
echo('</ul>'
            
      );

?>

</body></html>
