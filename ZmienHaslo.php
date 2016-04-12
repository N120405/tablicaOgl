<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of zmienHaslo
 *
 * @author c
 */
class ZmienHaslo {
    
    function __construct($dbuser,$dbpass,$dbname,$dbhost){
		$this->handle3 = mysql_connect($dbhost,$dbuser,$dbpass) or die('zle dane do bazy');
		$tmp = mysql_select_db($dbname,$this->handle3) or die('zla baza danych');
	}
        
       
        
        function sprawdz_haslo($haslo)
        {$id_u=$_SESSION["id_u"];
                  $sql = "select * from uzytkownik where id_u = '$id_u'";
           $query= mysql_query($sql);
      $row=mysql_fetch_assoc($query);
       if ($row['haslo'] == $haslo){ 
      $a=$row['id_u'];
        return $a;
        
        }}
      
        
  
        
	function zmienHaslo($haslo){
            $id_u=$_SESSION["id_u"];
		$query="update uzytkownik set haslo = '$haslo' where id_u = '$id_u'";
                mysql_query($query);
            }
}
