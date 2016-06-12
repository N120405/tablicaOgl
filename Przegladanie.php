<?php
//session_start();

class Przegladanie {
    var $handle;
    
	function __construct($dbuser,$dbpass,$dbname,$dbhost){
		$this->handle = mysql_connect($dbhost,$dbuser,$dbpass) or die('zle dane do bazy');
		$tmp = mysql_select_db($dbname,$this->handle) or die('zla baza danych');
	}

  
	function lista(){
            $dzis= date("Y-m-d");
		$ret = array();
		$q = mysql_query("select o.id_o, o.tresc , o.data , o.waznosc , o.widocznosc , u.login from ogloszenia o,  uzytkownik u where o.id_u = u.id_u and o.widocznosc = 'T' and o.waznosc >= $dzis order by data desc;");
		while ($txt = mysql_fetch_assoc($q)){
                   // echo"$txt";
			$ret[] = $txt;
		}
		return $ret;
	}
 function link(){   
    if (isset($_SESSION["id_u"])) {
            if ($_SESSION["id_u"] <> null) {
              
 return '<div class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse" id="mynavbar-content">
<ul class="nav navbar-nav">
<li ><a href="indexOgloszeniaWlasne.php"> Edycja ogłoszeń </a></li>
<li><a href="Wyloguj.php"> Wyloguj </a></li>
</ul>
</div>
</div>
</div> <h4> Zalogowany <span class="label label-default">'.$_SESSION["login"] . '</span></h4>';               
                
            }        
        }
        else return '<div class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse" id="mynavbar-content">
<ul class="nav navbar-nav">
<li ><a href="indexLog.php"> Logowanie </a></li>
<li><a href="indexRejestr.php"> Rejestracja </a></li>
</ul>
</div>
</div>
</div>';
        }
}
 

?>