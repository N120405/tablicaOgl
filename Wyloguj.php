<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="index.php"> powrót do przeglądania ogłoszeń</a>
        <?php
         $_SESSION["id_u"]=null;
      $_SESSION["login"]=null;
        ?>
    </body>
</html>
