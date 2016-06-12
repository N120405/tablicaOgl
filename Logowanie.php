<?php
session_start();
 require_once('./Admin.php');
class Logowanie {
    
   
    var $handle3;
//private $a = 10;
	function __construct($dbuser,$dbpass,$dbname,$dbhost){
		$this->handle3 = mysql_connect($dbhost,$dbuser,$dbpass) or die('zle dane do bazy');
		$tmp = mysql_select_db($dbname,$this->handle3) or die('zla baza danych');
               
	}

	function sprawdz_u($login,$haslo){
           if ($login != "" and $haslo!=""){
          $sql = "select * from uzytkownik where login = '$login'  and haslo= '$haslo'";
          
           $query= mysql_query($sql);
         $row=mysql_fetch_assoc($query);
         //echo ($row[id_u]);
if (($login == "Admin") &&($row['haslo'] == $haslo)){
   
   $adm = new Admin('ogloszenia','j23','ogloszenia','localhost');
  echo ($adm->linkA());
};

       if ( ($row['haslo'] == $haslo)){ $k="Witaj ".$login; 
      $_SESSION["id_u"]=$row['id_u'];
      $_SESSION["login"]=$row['login'];
               ;} else {$k= "Błąd logowania !";}
          echo('<h3>');
          echo ($k);
          echo('</h3>');
$id_u=$row['id_u'];
return $id_u;
    }
 else {$k= "Błąd logowania !";
     echo('<h3>');
          echo ($k);
          echo('</h3>');   }
        
 }
    
function link(){   
    if (isset($_SESSION["id_u"])) {
            if ($_SESSION["id_u"] <> null) {
                
                return '<div class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<div class="collapse navbar-collapse" id="mynavbar-content">
<ul class="nav navbar-nav">
<li ><a href="indexOgloszeniaWlasne.php"> Edycja ogłoszeń </a></li>
<li ><a href="index.php"> Powrót do przeglądania ogłoszeń </a></li>
<li><a href="Wyloguj.php"> Wyloguj </a></li>
<li><a href="indexZmienHaslo.php"> Zmiana hasła </a></li>

</ul></div>
</div>
</div>';
          
    }}
            else {
                
       return '<div class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<div class="collapse navbar-collapse" id="mynavbar-content"><a href="index.php"> Powrót do przeglądania ogłoszeń </a></br> 
<h3> Logowanie </h3></br> </br>
</div>
</div>
</div>;      
<form action="indexLog.php?akcjaL=sprawdz_u" method="post">
        <div class= "form-group">
 <label for="login"> Login </label>
 <input type="text" name="login" />
 </div>
  <div class= "form-group">
 <label for="haslo"> Hasło </label>
 <input type="password" name="haslo" />
 </div>
 <input type="submit" class="btn btn-primary" value=" Zaloguj " />
</form>  ';
                       
        }
        }	
	}
    
        
    ?>    

