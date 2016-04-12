<?php
session_start();

class Edycja {//extends Przegladanie{
    function __construct($dbuser,$dbpass,$dbname,$dbhost){
		$this->handle = mysql_connect($dbhost,$dbuser,$dbpass) or die('zle dane do bazy');
		$tmp = mysql_select_db($dbname,$this->handle) or die('zla baza danych');
	}
   
   
  function dodaj($id_u,$tresc,$waznosc){
      $data = date("Y-m-d");
    
$przyszly = time() + 60*60*24* 5;
echo date("r",$przyszly); // Wyświetli datę 'za godzinę'

	 $sql="insert into ogloszenia values(null,'$id_u','$tresc','$data','$waznosc',null);";
         mysql_query($sql);
	//.mysql_real_escape_string($tresc,$this->handle)
                
        }

	function usun($id_o){
		mysql_query('delete from ogloszenia where id_o='.intval($id_o).' limit 1');
	}

	function zmien($id){
		$zmiana = mysql_fetch_assoc(mysql_query('select tresc , waznosc from ogloszenia where id_u='));
		
		mysql_query('update ogloszenia set tresc =\'.$tresc.\' where id='.$id);
	      mysql_query('update ogloszenia set waznosc =\'.$waznosc.\' where id='.$id);
        }
     function listaWlasna($id_u) {
		$ret = array();
                $q = mysql_query("select * from ogloszenia where id_u = '$id_u' order by 'id_o'");
		while ($txt = mysql_fetch_assoc($q)){
			$ret[] = $txt;
		}
		return $ret;
	}
        }

 



?>