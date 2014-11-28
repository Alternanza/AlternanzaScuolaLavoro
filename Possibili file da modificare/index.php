<html>

<head>
   <?php
   require 'Connessione.php';
   ?>


<SCRIPT LANGUAGE="JavaScript">

function apri() {
strg=window.open('Tipodiregistrazione.html', 'nuova', 'toolbars=0, scrollbars=0, location=0, statusbars=0, menubars=0, resizable=0, width=400, height=400, left = 583, top = 284');
}
</script>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Home</title>
<meta name="generator" content="WYSIWYG Web Builder 10 Trial Version - http://www.wysiwygwebbuilder.com">
<link href="index.css" rel="stylesheet" type="text/css">
<link href="index.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:whitesmoke">

   
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
<div id="wb_Login1" style="position:absolute;left:900px;top:60px;width:183px;height:130px;text-align:right;z-index:2;">
<form name="RegisterForm" method="post" action="login.php" id="loginform">
<input type="hidden" name="form_name" value="loginform">
<table id="Login1">
<tr>
   <td class="Login1_header" colspan="2" style="height:20px;">Log In</td>
</tr>
<tr>
   <td style="height:20px;width:69px">Email:</td>
   <td style="text-align:left"><input type="text" name="r_UTNUsername" ></td>
</tr>
<tr>
   <td style="height:20px">Password:</td>
   <td style="text-align:left"><input type="password"  name="r_UTNPASSWORD"  ></td>
</tr>
<tr>
   <td>&nbsp;</td><td style="text-align:left;height:20px"><input id="rememberme" type="checkbox" name="rememberme">Remember me</td>
</tr>
<tr>
   <td>&nbsp;</td><td style="text-align:left;vertical-align:bottom"><input class="Login1_button" type="submit" name="login" value="Log In" id="login"></td>
</tr>
<td>&nbsp;</td><td style="text-align:left;vertical-align:bottom"><a > <input  type=button name="r_registrati" value="Registrati" onClick="javascript:apri()"></a></td>
</table>
</div>
</form>
</table>
</form>
</div>
<div id="NavigationBar1" style="position:absolute;left:0px;top:269px;width:140px;height:116px;z-index:3;">
<ul class="navbar">
<li><a href=""><img alt="" src="images/img0007_over.gif" class="hover"><span><img alt="" src="images/img0007.gif"></span></a></li>
<li><a href=""><img alt="" src="images/img0008_over.gif" class="hover"><span><img alt="" src="images/img0008.gif"></span></a></li>
<li><a href=""><img alt="" src="images/img0009_over.gif" class="hover"><span><img alt="" src="images/img0009.gif"></span></a></li>
<li><a href=""><img alt="" src="images/img0010_over.gif" class="hover"><span><img alt="" src="images/img0010.gif"></span></a></li>
<li><a href=""><img alt="" src="images/img0011_over.gif" class="hover"><span><img alt="" src="images/img0011.gif"></span></a></li>
</ul>
</div>
<textarea name="TextArea1" id="TextArea1" style="position:absolute;left:297px;top:190px;width:206px;height:19px;z-index:4;" rows="0" cols="31">Cerca Qui</textarea>
<input type="submit" id="Button1" name="Cerca" value="Cerca" style="position:absolute;left:189px;top:190px;width:96px;height:21px;z-index:5;">
<div id="wb_Text1" style="position:absolute;left:200px;top:22px;width:546px;height:108px;text-align:center;z-index:6;" class="Heading 1 <h1>">
<span style="color:#FF0000;font-family:'Courier New';font-size:32px;"><strong>ITST J.F KENNEDY</strong></span><span style="color:#000000;font-family:'Courier New';font-size:32px;"><strong><br><br>Alternanza Scuola-Lavoro</strong></span></div>
 
</div>
<div id="wb_Text1" style="position:absolute;left:200px;top:150px;width:546px;height:108px;text-align:center;z-index:6;" class="Heading 1 <h1>">
    <MARQUEE>Benvenuto nel sito , registrati per poter accedere agli stage!</MARQUEE>
 </div>
</body>
</html>

