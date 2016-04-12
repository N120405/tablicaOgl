<!doctype html>
<head>
<meta charset="utf-8" />
<title>Tablica ogłoszeń</title>
</head>
<body>
    <h1> Tablica ogłoszeń</h1>
    <h2> rejestracja</h2>
    <a href="index.php"> powrót do przeglądania ogłoszeń</a>
    <a href="indexLog.php"> Zaloguj się </a>
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
<form action="indexRejestr.php?akcjaR=dodaj_u" method="post">
    <label for="login">Login</label> <input type="text" name="login" />
    <label for="haslo">Hasło</label> <input type="text" name="haslo" />
 <input type="submit" value="Dodaj użytkownika" />
</form>
</body></html>

