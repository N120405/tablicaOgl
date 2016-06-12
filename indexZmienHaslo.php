<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zmiana hasła</title>
        <link rel="stylesheet" href="css/bootstrap.css">
     
    </head>
    <body>
        
        <?php
        require_once('./zmienHaslo.php');
       $zmH = new ZmienHaslo('ogloszenia','j23','ogloszenia','localhost'); 
         if (isset($_GET['akcjaZ']))
     {    $a=  $zmH->sprawdz_haslo($_POST['hasloStare']);
     if (isset ($a ))
     {$zmH->zmienHaslo($_POST['hasloNowe']);
         echo "<h3> hasło zostało zmienione </h3>";
         $_SESSION["id_u"]=null;
         $_SESSION["login"]=null;
     }
	else
     
        { 
        echo "<h3>błędne hasło</h3>";
        }
    
     
        }
    ?>      
        <div class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">

<div class="collapse navbar-collapse" id="mynavbar-content">
<ul class="nav navbar-nav">
  
 <li><a href="indexLog.php"> Zaloguj się </a></li>

</ul>
</div>
</div>
</div>;
         
       
      
        <form action="indexZmienHaslo.php?akcjaZ=zmianaHasla" method="post">
    <label for="hasloStare"> Hasło stare </label> <input type="text" name="hasloStare" />
    <label for="hasloNowe"> Hasło nowe </label> <input type="text" name="hasloNowe" />
 <input type="submit" class="btn btn-primary" value="Zmień hasło" />
</form>
         <script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
    </body>
</html>
