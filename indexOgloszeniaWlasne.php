<?php
session_start();
$h1="<h1> Ogłoszenia użytkownika ".$_SESSION["login"]."</h1>";
echo $h1 ; 
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8" />
<title>Ogłoszenia użytkownika</title>
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
<li ><a href="index.php"> Powrót do przeglądania ogłoszeń </a></li>
<li><a href="Wyloguj.php"> Wyloguj </a></li>
<li><a href="ZmienHaslo.php"> Zmiana hasła </a></li>
</ul>
</div>
</div>
</div>
     
     <form action="indexOgloszeniaWlasne.php?akcjaE=dodaj" method="post">
 <label for="tresc">Treść nowego ogłoszenia</label><p><textarea cols="102" rows="10" name="tresc"></textarea></p> 
 <label for="waznoscD">Liczba dni ważności ogłoszenia (maksymalnie 90 dni)</label>
 <input type="text"  name="waznoscD" />
 <input type="submit" class="btn btn-primary" value="Dodaj ogłoszenie" />
</form>    
     
 <?php
        $aaaa="";
 require_once('./OgloszeniaWlasne.php');
 $ed = new OgloszeniaWlasne('ogloszenia','j23','ogloszenia','localhost');
 

 if (isset($_GET['akcjaE'])){
	switch($_GET['akcjaE']){
	 case 'dodaj':
		$ed->dodaj($_SESSION["id_u"],$_POST['tresc'],$_POST['waznoscD']);
		break;
	 case 'usun':
		$ed->usun($_GET['id_o']);
             
		break;
	 case 'zmien':{
        $aaaa= $ed->znajdz($_GET['id_o']); 
       //  $_SESSION["tresc"]=$aa;
         $tresc=$aaaa;
       //$_SESSION["tresc"] =$aaaa[tresc]  ;
       }break;
	}
 }
 
  if (isset($_GET['akcjaZ'])){
	switch($_GET['akcjaZ']){
	
	 case 'zmienOgloszenie':
        $ed->zmienOgloszenie($_SESSION["id_o"],$_POST['tresc'],$_POST['waznoscD']);
		break;
	}
 }
 
if ($aaaa<>null){
 $aaa=" <form action=\"indexOgloszeniaWlasne.php?akcjaZ=zmienOgloszenie\" method=\"post\" >
<label for= \"tresc\"  >Nowa treść ogłoszenia</label></br><textarea cols=\"100\" rows=\"10\" name=\"tresc\">$tresc</textarea>
 </br><label for=\"waznosc\">Nowa ważność</label><input type=\"text\" name=\"waznoscD\" />
 <input type=\"submit\" class=\"btn btn-primary\" value=\"zatwierdź zmiany\" /> 
</form> " ;}
else{$aaa="";}
echo $aaa;
//print_r($_SESSION["id_u"]);

$lw = $ed->listaWlasna($_SESSION["id_u"]);
 
 echo('<ul class="list-group">');
 foreach($lw as $item){
 echo('<li class="list-group-item">'.$item['tresc'].'</br>'.$item['data'].'</br>'.$item['waznosc'].'<a href="indexOgloszeniaWlasne.php?akcjaE=zmien&id_o='.$item['id_o'].'"> Zmien </a><a href="indexOgloszeniaWlasne.php?akcjaE=usun&id_o='.$item['id_o'].'"> Usun </a></li>');
}
echo('</ul>'
            
      );


?>

 
     
     
     
     
     
</body></html>

