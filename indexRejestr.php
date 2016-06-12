<!doctype html>
<head>
<meta charset="utf-8" />
<title>Rejestracja</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
        <?php
 require_once('./Rejestracja.php');
 $rej = new Rejestracja('ogloszenia','j23','ogloszenia','localhost');
 
 if (isset($_GET['akcjaR']))
     {    $a=  $rej->spr_u($_POST['login']);
     if (isset ($a ))
     {echo "<h3>Taki login już w bazie istnieje</h3>";}
	else
     
        { $rej->dodaj_u($_POST['login'],$_POST['haslo']);
        echo "<h3>Użytkownik ".$_POST['login']." został zarejestrowany</h3>";
        }
    
     
        }
 

?>
    
            <div class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">

<div class="collapse navbar-collapse" id="mynavbar-content">
<ul class="nav navbar-nav">
  
 <li><a href="indexLog.php">Zaloguj się </a></li>
 <li><a href="index.php"> powrót do przeglądania ogłoszeń</a></li>
 </ul>
 </br><h2> Rejestracja</h2>

</div>
</div>
</div>;
    
    
    
<form action="indexRejestr.php?akcjaR=dodaj_u" method="post">
    <fildset>
     <div class= "form-group">
    <label for="login"> Login </label><input type="text" name="login" value="Nazwisko i Imię"/>
    </div>
    <div class= "form-group">
    <label for="haslo"> Hasło </label> <input type="text" name="haslo" />
 </div>
         <div class= "form-group">
    <input type="submit" class="btn btn-primary" value="Dodaj użytkownika" />
    </div>
    </fildset>
</form>
</body></html>

