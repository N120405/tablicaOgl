<?php
session_start();
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Tablica ogłoszeń</title>
<link rel="stylesheet" href="/ogloszenia/bootstrap/css/bootstrap.css">
</head>
<body>
    <h1> Tablica ogłoszeń</h1>
    <h2> Tablica ogłoszeń</h2>
    <p> Tablica ogłoszeń</p>
        <?php
        
 require_once('./Przegladanie.php');
 echo date("r");
 $_SESSION["tresc"]="123";
 $prz = new Przegladanie('ogloszenia','j23','ogloszenia','localhost');
 echo ($prz->link());
 $l = $prz->lista();
 echo('<ul class="list-group">');
 foreach($l as $item){
// echo "$item <br/>";
 echo('<li class="list-group-item">'.$item['tresc'].'</br>'.$item['data'].'</li>');
}
echo('</ul>'
            
      );

?>

</body></html>

