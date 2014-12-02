<?php
require ('Connessione.php');

if(isset($_POST['register'])){
$Nome =$_POST['name'];
$Cognome =$_POST['surname'];
$Password =$_POST['password'];
$Classe=$_POST['class'];
if($Nome!=null and $Cognome!=null and $Password!=null and $Classe!=null)
{

$QueryVerifica="SELECT * FROM studenti WHERE StdNome ='$Nome' AND StdCognome='$Cognome' AND StdClasse='$Classe'";
$Verifica=mysqli_query($connesso,$QueryVerifica);
$row=mysqli_fetch_assoc($Verifica);
$i=0;
if($row==0)
{
	echo"<span style=\"color:red;\">I TUOI DATI NON SONO PRESENTI NEL DATABASE , CONTATTA LA SCUOLA PER MAGGIORI INFORMAZIONI.</span><br>";
}    
else
{    $ID=$row['StdID'];
   //  $Mail=$row['StdMail'];

   //  echo "$Mail";
  //   echo "$ID";
	echo"<span style=\"color:red;\">FORM  COMPLETATO CORRETTAMENTE,CONFERMA LA REGISTRAZIONE TRAMI L'EMAIL CHE TI ABBIAMO INVIATO.</span><br>";
    $query= "UPDATE studenti SET StdPassword = '$Password' WHERE StdID ='$ID'";
	$result=mysqli_query($connesso,$query);
	
}

	//Stampo l'email per controllare che Nome e Cognome e Classe siano associati correttamente
	//$Mail=$row['StdMail'];
    //echo "$Mail";

    //Query che inserisce i dati della form nel Database
//$query="INSERT INTO registrazioneutenti (RgrUNome,RgrUCognome,RgrUPassword,RgrUClasse) VALUES('$Nome','$Cognome','$Password','$Classe')";
//$result=mysqli_query($connesso,$query)

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
