<?php
session_start();
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8" />
<title>Tablica ogłoszeń</title>
</head>
<body>
    <h1> Tablica ogłoszeń</h1>
    
    <a href="index.php"> powrót do przeglądania ogłoszeń</a></br>
     <a href="Wyloguj.php">wyloguj</a>    
     <form action="indexOgloszeniaWlasne.php?akcjaE=dodaj" method="post">
 <label for="tresc">Treść ogłoszenia</label><p><textarea cols="100" rows="10" name="tresc"></textarea></p> 
 <label for="waznosc">ważność</label>
 <input type="text" name="waznosc" />
 <input type="submit" value="Dodaj ogłoszenie" />
</form>    
     
 <?php
        $aaaa="";
 require_once('./OgloszeniaWlasne.php');
 $ed = new OgloszeniaWlasne('ogloszenia','j23','ogloszenia','localhost');
 

 if (isset($_GET['akcjaE'])){
	switch($_GET['akcjaE']){
	 case 'dodaj':
		$ed->dodaj($_SESSION["id_u"],$_POST['tresc'],$_POST['waznosc']);
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
if ($aaaa<>null){
 $aaa=" <form action=\"indexOgloszeniaWlasne.php?akcjaZ=zmien\" method=\"post\" >
<label for= \"tresc\"  >Treść ogłoszenia</label></br><textarea cols=\"100\" rows=\"10\" name=\"tresc\">'$tresc'</textarea>
 </br><label for=\"waznosc\">ważność</label><input type=\"text\" name=\"waznosc\" />
 <input type=\"submit\" value=\"zatwierdź zmiany\" /> 
</form> " ;}
else{$aaa="";}
echo $aaa;
print_r($_SESSION["id_u"]);

$lw = $ed->listaWlasna($_SESSION["id_u"]);
 
 echo('<ul>');
 foreach($lw as $item){
 echo('<li>'.$item['tresc'].'</br>'.$item['data'].'</br>'.$item['waznosc'].'<a href="indexOgloszeniaWlasne.php?akcjaE=zmien&id_o='.$item['id_o'].'">zmien</a><a href="indexOgloszeniaWlasne.php?akcjaE=usun&id_o='.$item['id_o'].'">usun</a></li>');
}
echo('</ul>'
            
      );


?>

 
     
     
     
     
     
</body></html>

