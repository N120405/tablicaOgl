<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ZatwOgloszen
 *
 * @author c
 */
class ZatwOgloszen {//extends Przegladanie{
    function __construct($dbuser,$dbpass,$dbname,$dbhost){
		$this->handle = mysql_connect($dbhost,$dbuser,$dbpass) or die('zle dane do bazy');
		$tmp = mysql_select_db($dbname,$this->handle) or die('zla baza danych');
	}
   
   
  function dodaj($id_u,$tresc,$waznoscD){
      
      $data = date("Y-m-d");
    if($waznoscD>90)$waznoscD=90;
      if($waznoscD<1)$waznoscD=30;
      
$waznoscOgloszenia = time() + 60*60*24* $waznoscD;
$waznosc = date("Y-m-d",$waznoscOgloszenia);
	 $sql="insert into ogloszenia values(null,'$id_u','$tresc','$data','$waznosc',null);";
         mysql_query($sql);
	//.mysql_real_escape_string($tresc,$this->handle)
                
        }
        
      
        
        
        
        
  function zmienOgloszenie($id_o,$tresc,$waznoscD){
      
      $data = date("Y-m-d");
    if($waznoscD>90)$waznoscD=90;
      if($waznoscD<1)$waznoscD=30;
      
$waznoscOgloszenia = time() + 60*60*24* $waznoscD;
$waznosc = date("Y-m-d",$waznoscOgloszenia);
	 $sql="update ogloszenia  set  tresc= '$tresc' , waznosc= '$waznosc' where  id_o= '$id_o' ";   
         mysql_query($sql);
	//.mysql_real_escape_string($tresc,$this->handle)
                
        }
	function usun($id_o){
		mysql_query('delete from ogloszenia where id_o='.intval($id_o).' limit 1');
	}

	function znajdz($id_o){
           //echo $id_o;
            $sql="select * from ogloszenia where id_o = '$id_o'";
            $query= mysql_query($sql);
         $row=mysql_fetch_assoc($query);
         //print_r ($row);
	 $aa= $row['tresc'];
         $_SESSION["id_o"]= $row['id_o'];
               //  echo $aa;
              // $_SESSION['tresc']=$aa;
               return $aa;
      
        }
        
       function zmienStan($id_o){
		$akt = mysql_fetch_assoc(mysql_query('select widocznosc from ogloszenia where id_o ='.intval($id_o).' limit 1'));
		if ($akt['widocznosc']=='T'){
			$nw = 'N';
		} else {
			$nw = 'T';
		}
		mysql_query('update ogloszenia set widocznosc=\''.$nw.'\' where id_o='.intval($id_o).' limit 1');
	} 
        
        
     function listaOgloszen() {
		$ret = array();
                $q = mysql_query("select * from ogloszenia order by widocznosc " );//where widocznosc =null "//where id_u = '$id_u' "
                      //  . "order by id_o DESC;");
		while ($txt = mysql_fetch_assoc($q)){
			$ret[] = $txt;
		}
		return $ret;
	}
        }

 



?>