<?php
//session_start();

class Przegladanie {
    var $handle;
      
	function __construct($dbuser,$dbpass,$dbname,$dbhost){
		$this->handle = mysql_connect($dbhost,$dbuser,$dbpass) or die('zle dane do bazy');
		$tmp = mysql_select_db($dbname,$this->handle) or die('zla baza danych');
	}

   
	function lista(){
		$ret = array();
		$q = mysql_query("select * from ogloszenia order by data;");
		while ($txt = mysql_fetch_assoc($q)){
                   // echo"$txt";
			$ret[] = $txt;
		}
		return $ret;
	}
 function link(){   
    if (isset($_SESSION["id_u"])) {
            if ($_SESSION["id_u"] <> null) {
                return '<a href="indexOgloszeniaWlasne.php"> Edycja ogłoszeń</a></br> <h3>zalogowany  ' . $_SESSION["login"] . '</h3>';
            }        
        }
        else return '<h3><a href="indexRejestr.php"> rejestracja</a></br> <a href="indexLog.php"> logowanie</a></h3>';
        }
}
 

?>