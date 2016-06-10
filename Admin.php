<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author c
 */
class Admin {
   function __construct($dbuser,$dbpass,$dbname,$dbhost){
		$this->handle = mysql_connect($dbhost,$dbuser,$dbpass) or die('zle dane do bazy');
		$tmp = mysql_select_db($dbname,$this->handle) or die('zla baza danych');
	}
   
 
   
      function linkA(){   
    
 return '<div class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">

<div class="collapse navbar-collapse" id="mynavbar-content">
<ul class="nav navbar-nav">
<li ><a href="indexOgloszeniaWlasne.php">Edycja ogłoszeń</a></li>
<li ><a href="indexZatwOgloszen.php">Zatwierdzanie ogłoszeń</a></li>
<li ><a href="indexOgloszeniaWlasne.php">usuwanie użytkowników</a></li>
<li><a href="Wyloguj.php">Admin Wyloguj</a></li>
</ul>
</div>
</div>
</div> ';               
           
}
}