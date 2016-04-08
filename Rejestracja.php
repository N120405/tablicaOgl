<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Prejestracja
 *
 * @author c
 */
class Rejestracja {
  var $handle3;
//private $a = 10;
	function __construct($dbuser,$dbpass,$dbname,$dbhost){
		$this->handle3 = mysql_connect($dbhost,$dbuser,$dbpass) or die('zle dane do bazy');
		$tmp = mysql_select_db($dbname,$this->handle3) or die('zla baza danych');
	}
        
        
        
        function spr_u($login)
        {
                  $sql = "select * from uzytkownik where login = '$login' ";
           $query= mysql_query($sql);
      $row=mysql_fetch_assoc($query);
      $a=$row['id_u'];
        return $a;
        
        }
      
        
  
        
	function dodaj_u($login,$haslo){$sql = "insert into uzytkownik values(null,'$login','$haslo');";
           
            mysql_query($sql);
            }

        
        
        
        
	function usun_u($id_u){
		mysql_query('delete from uzytkownik where id_u='.intval($id_u).' limit 1');
	}

	
	
	}


?>
