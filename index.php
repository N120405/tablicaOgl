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
    
        <?php
        
 require_once('./Przegladanie.php');
 
 $prz = new Przegladanie('ogloszenia','j23','ogloszenia','localhost');
 echo ($prz->link());
 $l = $prz->lista();
 echo('<ul>');
 foreach($l as $item){
// echo "$item <br/>";
 echo('<li>'.$item['tresc'].'</br>'.$item['data'].'</li>');
}
echo('</ul>'
            
      );

?>

</body></html>

