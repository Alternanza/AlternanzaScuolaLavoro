<?php

require ('Connessione.php');
if(isset($_POST['register'])){
$Nomeazienda =$_POST['Nomeazienda'];
$Descrizione =$_POST['Descrizione'];
$Periodo =$_POST['Periodo'];
$Luogo=$_POST['Luogo'];
$Contatto=$_POST['Contatto'];
$Postidisponibili=$_POST['PostiDisponibili'];
if($Nomeazienda!=null and $Descrizione!=null and $Periodo!=null and $Luogo!=null and $Contatto!=null and $Postidisponibili!=null)
{
    echo"<center><b>Richiesta Inviata</b >";
   $Query= "INSERT INTO richiesteaziende (AznNome,AznDescrizioneLAvoro,AznPeriodo,AznPostiDisponibili,AznContatto,AznLuogo) VALUES ('$Nomeazienda','$Descrizione','$Periodo','$Postidisponibili','$Contatto','$Luogo')";
   $result=mysqli_query($connesso,$Query);

}
else
{
	echo'<center><b>Non hai compilato tutti i campi</b>';

?>
      <input type="button" value="Indietro" onclick="history.back(1)"></center>     
     <?php
     die;
}

}


?>

