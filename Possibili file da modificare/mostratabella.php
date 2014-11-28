	
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