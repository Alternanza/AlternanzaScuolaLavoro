
<?php
require ('Connessione.php');
if(isset($_POST['register']))
{
	
$NomeAzienda =$_POST['name'];
$Contatto =$_POST['contact'];
$Mail =$_POST['mail'];
if($NomeAzienda!=null and $Contatto!=null and $Mail!=null)
{
echo"<span style=\"color:red;\">FORM  COMPLETATO CORRETTAMENTE.</span><br>";
$query="INSERT INTO registrazioneazienda (RgrANomeAzienda,RgrAContatto,RgrAMAil) VALUES('$NomeAzienda','$Contatto','$Mail')";
$result=mysqli_query($connesso,$query);
}

else
{
	echo"<center><b>Non hai compilato tutti i campi</b>";
?>
      <input type="button" value="Indietro" onclick="history.back(1)"></center>     
     <?php
     die;
 }  
 }      
?>
