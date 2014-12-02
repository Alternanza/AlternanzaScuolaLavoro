<html>
<head>
    <title> Connessione al server Alternanza scuola lavoro </title>
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php

$User ="root";
$Password="";
$Database="alternanzascuolalavoro";
$connesso=  mysqli_connect('localhost',$User,$Password);
if(!$connesso)
die("Impossibile connettersi ad Mysql");
//print "Connessione al Server Riuscita <br> <br>";
mysqli_select_db($connesso,$Database) or die("impossibile effetturae l'interrogazione".mysql_error());
?>




</body>
</html>