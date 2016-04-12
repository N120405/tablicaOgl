<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuwanie
 *
 * @author c
 */
class Usuwanie {
    var $handle3;
//private $a = 10;
	function __construct($dbuser,$dbpass,$dbname,$dbhost){
		$this->handle3 = mysql_connect($dbhost,$dbuser,$dbpass) or die('zle dane do bazy');
		$tmp = mysql_select_db($dbname,$this->handle3) or die('zla baza danych');
	}
        
      
        
        
	function usun_uzytkownika($id_u){
          //  $sql ="delete  from ogloszenia where id_u = '$id_u'";
            
           mysql_query('delete from ogloszenia where id_u='.intval($id_u));
            
          //  mysql_query($sql);
		 $sql ="delete  from uzytkownik where id_u= '$id_u'";
                 
                mysql_query($sql);
	}
        
        

	
	
	}


?>
