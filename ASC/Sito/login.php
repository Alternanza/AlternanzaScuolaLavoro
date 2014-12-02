<?php
session_start();
require 'Connessione.php';

if(isset($_POST['login'])){
$trovato=1;
$Email=mysqli_real_escape_string($connesso,$_POST['Email']);
$password=mysqli_real_escape_string($connesso,$_POST['Password']);
$query="SELECT * FROM studenti WHERE StdMail='$Email' AND StdPassword='$password'";
$result=mysqli_query($connesso,$query);
$row=mysqli_fetch_assoc($result);
$cod=$row['StdMail'];
if($cod==NULL)
{

$query="SELECT * FROM registrazioneazienda WHERE RgrAMail='$Email' AND RgrAPassword='$password'";
$result=mysqli_query($connesso,$query);
$row=mysqli_fetch_assoc($result);
$cod=$row['RgrAEMail'];
if($cod==null)
{
$trovato=0;
echo '<script language=javascript>document.location.href="index.php"</script>';
}
else
{
$_SESSION[$Email]='AznNome';
$_SESSION["autorizzato"]=1;
//$_SESSION['StdID']=$StdID;
echo '<script language=javascript>document.location.href="Interfacciastudente.html"</script>';

}
}
else
{
$_SESSION[$Email]='StdNome';
$_SESSION["autorizzato"]=1;
//$_SESSION['StdID']=$StdID;
echo '<script language=javascript>document.location.href="Interfacciastudente.html"</script>';
} 
}
?>