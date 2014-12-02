
<html>
<head>
  <?php
   require 'Connessione.php';
   ?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Page</title>

<link href="VisualizzazioneRichiesta.css" rel="stylesheet" type="text/css">
<link href="VisualizzazioneRichiestaAzienda.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="NavigationBar1" style="position:absolute;left:0px;top:269px;width:140px;height:116px;z-index:3;">
<ul class="navbar">
<li><a href=""><img alt="" src="images/img0001_over.gif" class="hover"><span><img alt="" src="images/img0001.gif"></span></a></li>
<li><a href=""><img alt="" src="images/img0002_over.gif" class="hover"><span><img alt="" src="images/img0002.gif"></span></a></li>
<li><a href=""><img alt="" src="images/img0003_over.gif" class="hover"><span><img alt="" src="images/img0003.gif"></span></a></li>
</ul>
</div>
<?php 
require 'Connessione.php';
$select="SELECT * FROM richiesteaziende ";
$result=mysqli_query( $connesso,$select) or die(mysql_error());
echo '
<table style="position:absolute;left:200px;top:228px;width:619px;height:359px;z-index:1;" cellpadding="0" cellspacing="1" id="Table1" border="5">
   <tr>
      <th>Azienda</th>
      <th>Luogo</th>
      <th>Periodo Lavorativo</th>
      <th>Competenze</th>
      <th>Descrizione</th>
      <th>Posti disponibli</th>
   </tr>';
$num=mysqli_num_rows($result);
if(0==$num)
{
echo "No record";
exit;

}
else
{
while ($row = mysqli_fetch_assoc($result)) {
   $Azienda   = htmlentities($row['AznNome']);
   $Luogo     = htmlentities($row['AznLuogo']);
    $Descrizione     = htmlentities($row['AznDescrizioneLavoro']);
    $Periodo    = htmlentities($row['AznPeriodo']);
    $Posti    = htmlentities($row['AznPostiDisponibili']);
    $Competenze   = htmlentities($row['AznCompetenze']);
   echo "<tr>
         <td>$Azienda</td>
         <td>$Luogo</td>
         <td>$Periodo</td>
         <td>$Competenze</td>
         <td>$Descrizione</td>
         <td>$Posti</td>
         
      </tr>";
}
}
echo '</table>';
mysqli_close($connesso);
?>
<input type="submit" id="Button4" name="" value="Logout" style="position:absolute;left:693px;top:94px;width:74px;height:23px;z-index:2;">
<input type="submit" id="Button5" name="" value="Cambia Password" style="position:absolute;left:776px;top:94px;width:110px;height:23px;z-index:3;">
<div id="wb_Text3" style="position:absolute;left:191px;top:182px;width:422px;height:16px;z-index:4;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Mittente:</span></div>
<div id="wb_Text4" style="position:absolute;left:191px;top:213px;width:281px;height:32px;z-index:5;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span></div>
<div id="wb_Text2" style="position:absolute;left:693px;top:42px;width:245px;height:44px;z-index:6;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:19px;"><strong>Benvenuto Amministratore</strong></span></div>
<div id="wb_Text1" style="position:absolute;left:140px;top:23px;width:570px;height:108px;text-align:center;z-index:7;" class="Heading 1 <h1>">
<span style="color:#FF0000;font-family:'Courier New';font-size:32px;"><strong>ITST J.F KENNEDY<br></strong></span><span style="color:#000000;font-family:'Courier New';font-size:32px;"><strong><br>Alternanza Scuola-Lavoro</strong></span></div>
</body>
</html>