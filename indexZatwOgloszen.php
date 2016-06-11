<?php
session_start();
$h1="<h1> Zatwierdzanie Ogłoszeń ".$_SESSION["login"]."</h1>";
echo $h1 ; 
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8" />
<title> Zatwierdzanie ogłoszeń </title>
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
<li ><a href="IndexUsunUzytkownika.php"> Usuwanie użytkownika </a></li>
<li><a href="Wyloguj.php"> Wyloguj </a></li>
<li><a href="ZmienHaslo.php"> Zmiana hasła </a></li>
</ul>
</div>
</div>
</div>
     
 
     
 <?php
        $aaaa="";
 require_once('./ZatwOgloszen.php');
 $zatwOglosz = new ZatwOgloszen('ogloszenia','j23','ogloszenia','localhost');
 

 if (isset($_GET['akcjaE'])){
	switch($_GET['akcjaE']){
	 case 'dodaj':
		$zatwOglosz->dodaj($_SESSION["id_u"],$_POST['tresc'],$_POST['waznoscD']);
		break;
	 case 'usun':
		$zatwOglosz->usun($_GET['id_o']);
             
		break;
	 case 'zmien':{
        $aaaa= $zatwOglosz->znajdz($_GET['id_o']); 
       //  $_SESSION["tresc"]=$aa;
         $tresc=$aaaa;
       //$_SESSION["tresc"] =$aaaa[tresc]  ;
       }break;
   case 'zmienS':
		$zatwOglosz->zmienStan($_GET['id_o']);
		break;
   
	}
 }
 
  if (isset($_GET['akcjaZ'])){
	switch($_GET['akcjaZ']){
	
	 case 'zmienOgloszenie':
        $zatwOglosz->zmienOgloszenie($_SESSION["id_o"],$_POST['tresc'],$_POST['waznoscD']);
		break;
	}
 }
 
if ($aaaa<>null){
 $aaa=" <form action=\"indexZatwOgloszen.php?akcjaZ=zmienOgloszenie\" method=\"post\" >
<label for= \"tresc\"  >Nowa treść ogłoszenia</label></br><textarea cols=\"100\" rows=\"10\" name=\"tresc\">$tresc</textarea>
 </br><label for=\"waznosc\">Nowa ważność</label><input type=\"text\" name=\"waznoscD\" />
 <input type=\"submit\" class=\"btn btn-primary\" value=\"zatwierdź zmiany\" /> 
</form> " ;}
else{$aaa="";}
echo $aaa;
//print_r($_SESSION["id_u"]);

$lw = $zatwOglosz->listaOgloszen();
 
 //echo('<ul>');
echo('<ul class="list-group">');
 foreach($lw as $element){
  if ($element['widocznosc']=='T'){
	$widocznosc1 = 'x';
  } else {
	$widocznosc1 = ' ';
  }
 //echo('<li class="list-group-item">'.$element['tresc'].'<a href="indexZatwOgloszen.php?akcjaE=zmienS&id_o='.$element['id_o'].'">['.$widocznosc1.']</a> <a href="index.php?akcja=usun&id_o='.$element['id_o'].'">usun</a></li>');
 echo('<li class="list-group-item">'.$element['tresc'].'</br>'.$element['data'].'</br>'.$element['waznosc'].'<a href="indexZatwOgloszen.php?akcjaE=zmienS&id_o='.$element['id_o'].'"> ['.$widocznosc1.'] </a><a href="indexZatwOgloszen.php?akcjaE=zmien&id_o='.$element['id_o'].'"> Zmien </a><a href="indexZatwOgloszen.php?akcjaE=usun&id_o='.$element['id_o'].'"> Usun </a></li>');
 
  }
 echo('</ul>');

?>

 
     
     
     
     
     
</body></html>

