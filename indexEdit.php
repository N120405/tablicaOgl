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
       <link rel="stylesheet" href="/ogloszenia/bootstrap/css/bootstrap.css">
    </head>
    <body>
        <?php
        
       require_once('./Edit.php'); 
       $edit = new Edit ('ogloszenia','j23','ogloszenia','localhost');
        $tresc= $_SESSION["tresc"];
    //  $_SESSION["login"]=$row['login'];
     echo $_SESSION["tresc"];
        //$tr="aaaaaaaaaaaaaaaaaaaaaaaaaa";
        $aaa=" <form action=\"indexEdit.php?akcjaZ=zmien\" method=\"post\" >
<label for= \"tresc\"  >Treść ogłoszenia</label></br><textarea cols=\"100\" rows=\"10\" name=\"tresc\">'$tresc'</textarea>
 </br><label for=\"waznosc\">ważność</label><input type=\"text\" name=\"waznosc\" />
 <input type=\"submit\" value=\"zatwierdź zmiany\" /> 
</form> " ;
  echo $aaa;
  
  
  if (isset($_GET['akcjaZ'])){
	switch($_GET['akcjaZ']){
	
	 case 'zmien':
       
       // $edit->zmiana($_GET['id_o']); 
         
		break;
	}
 }

  
  
  
  
  
        ?>
    </body>
     <form action="indexEdit.php?akcjaE=zmirn" method="post">
 <label for="tresc">Treść ogłoszenia</label><p><textarea cols="100" rows="10" name="tresc"></textarea></p> 
 <label for="waznosc">ważność</label>
 <input type="text" name="waznosc" />
 <input type="submit" value="Zatwierdź zmiany" />
</form>    
    
</html>
