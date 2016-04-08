<?php
session_start();
class Logowanie {
    
   
    var $handle3;
//private $a = 10;
	function __construct($dbuser,$dbpass,$dbname,$dbhost){
		$this->handle3 = mysql_connect($dbhost,$dbuser,$dbpass) or die('zle dane do bazy');
		$tmp = mysql_select_db($dbname,$this->handle3) or die('zla baza danych');
	}

	function sprawdz_u($login,$haslo){
           
          $sql = "select * from uzytkownik where login = '$login'  and haslo= '$haslo'";
          
           $query= mysql_query($sql);
         $row=mysql_fetch_assoc($query);
         //echo ($row[id_u]);

       if ($row['haslo'] == $haslo){ $k="Witaj ".$login; 
      $_SESSION["id_u"]=$row['id_u'];
      $_SESSION["login"]=$row['login'];
               ;} else {$k= "blad logowania";}
          echo('<h3>');
          echo ($k);
          echo('</h3>');
$id_u=$row['id_u'];
return $id_u;
    }
	
function link(){   
    if (isset($_SESSION["id_u"])) {
            if ($_SESSION["id_u"] <> null) {
                return '<a href="indexEdycja.php"> Edycja ogłoszeń</a></br> <h3>zalogowany  ' . $_SESSION["login"] . '</h3>';
            }
        }
        // print_r ($_SESSION);
        }
 
	
	
	}

?>
