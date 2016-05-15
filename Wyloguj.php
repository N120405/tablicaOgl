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
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
        <div class="alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert">&times;</button>
Wylogowanie przebiegło poprawnie. <a href="index.php" class="alert-link"> Powrót do przeglądania ogłoszeń</a>
</div>
       
       
        <?php
         $_SESSION["id_u"]=null;
      $_SESSION["login"]=null;
        ?>
      <script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>   
    </body>
</html>
