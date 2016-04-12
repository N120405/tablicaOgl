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
        <title></title>
    </head>
    <body>
        <?php
        
       require_once('./Edit.php'); 
       $edit = new Edit ('ogloszenia','j23','ogloszenia','localhost');
        $tr= $_SESSION["tr"];
    //    $_SESSION["id_u"]=$row['id_u'];
    //  $_SESSION["login"]=$row['login'];
        
        echo $tr;
        $aaa=" <form action=\"indexOgloszeniaWlasne.php?akcjaZ=zmien\" method=\"post\" >
<label for= \"tresc\"  >Treść ogłoszenia</label></br><textarea cols=\"100\" rows=\"10\" name=\"tresc\">'$tr'</textarea>
 </br><label for=\"waznosc\">ważność</label><input type=\"text\" name=\"waznosc\" />
 <input type=\"submit\" value=\"zatwierdź zmiany\" /> 
</form> " ;
  echo $aaa;
  
  
  if (isset($_GET['akcjaZ'])){
	switch($_GET['akcjaZ']){
	
	 case 'zmien':
       
        $edit->zmiana($_GET['id_o']); 
         
		break;
	}
 }

  
  
  
  
  
        ?>
    </body>
</html>
