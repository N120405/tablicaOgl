
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
     <form action="indexEdycja.php?akcja=dodaj" method="post">
 <label for="tresc">Treść ogłoszenia</label><p><textarea cols="100" rows="10" name="tresc"></textarea></p> 
 <label for="waznosc">ważność</label>
 <input type="text" name="waznosc" />
 <input type="submit" value="Dodaj ogłoszenie" />
 
  
 
</form>    
     
        <?php
        
 require_once('./Edycja.php');
 $ed = new Edycja('ogloszenia','j23','ogloszenia','localhost');
 

 
 
 if (isset($_GET['akcja'])){
	switch($_GET['akcja']){
	 case 'dodaj':
		$ed->dodaj($_SESSION["id_u"],$_POST['tresc'],$_POST['waznosc']);
		break;
	 case 'usun':
		$ed->usun($_GET['id_o']);
		break;
	 case 'zmien':
         $ed->zmien($_GET['id_o']); 
		break;
	}
 }


print_r($_SESSION["id_u"]);

$lw = $ed->listaWlasna($_SESSION["id_u"]);
 
 echo('<ul>');
 foreach($lw as $item){
 echo('<li>'.$item['tresc'].'</br>'.$item['data'].'</br>'.$item['waznosc'].'<a href="indexEdycja.php?akcja=zmien&id_o='.$item['id_o'].'">zmien</a><a href="indexEdycja.php?akcja=usun&id_o='.$item['id_o'].'">usun</a></li>');
}
echo('</ul>'
            
      );


?>

 
     
     
     
     
     
</body></html>

