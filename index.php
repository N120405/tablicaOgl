<?php
session_start();
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Tablica ogłoszeń</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
   <div class="container"> 
       <div class="row">
<div class="col-md-12 text-center">
<?php  
  require_once('./Przegladanie.php');
   $prz = new Przegladanie('ogloszenia','j23','ogloszenia','localhost');
  echo ($prz->link());
  ?>
   
<div class="page-header">
<h1>Tablica ogłoszeń</h1>
</div>
   
        <?php
        
 require_once('./Przegladanie.php');
 $dzis= date("Y-m-d");
 echo $dzis;

 $_SESSION["tresc"]="123";
 $prz = new Przegladanie('ogloszenia','j23','ogloszenia','localhost');
 $l = $prz->lista();
 echo('<ul class="list-group">');
 foreach($l as $item){
 echo('<li class="list-group-item">'.$item['tresc'].'</br>'.$item['login'].'</br>'."Data ogłoszenia: ".$item['data']."  ważne do: ".$item['waznosc'].' </li>');
}
echo('</ul>'
            
      );

?>
 </div>
</div>
</div>  
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script> 
</body>
  </html>

