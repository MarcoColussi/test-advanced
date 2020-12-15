<?php

$RICERCA =$_POST["ricerca"];

echo "Questa è la parola cercata:".$RICERCA."<br>";

$host="localhost"; $username="root"; $password="marco1997";


$conn=mysqli_connect("localhost", "root","marco1997");
if(!$conn) die("Connessione non riuscita");

if(!mysqli_select_db($conn,"backups_db")) 
{
    echo "Selezione del database non riuscita!<br/>
    <a href='path.html'>Torna alla home</a>";
}
else {
    echo "Database <b> presente</b>.<br>";}

    $query = "SELECT * FROM Backup WHERE NomeAzienda LIKE %'$RICHIESTA'% ";
    $risultato = mysqli_query($conn,$query);
    if (!$risultato){ 
        echo "Conteunto non presente<br/>
        <a href='path.html'>Torna alla home</a>";}

    else{
        while($record = mysqli_fetch_array($risultato)) {
            $i= 0;
        echo" <li> NomeAzienda;", $record["NomeAzienda"]," ","NomeMacchina': ",$record["NomeMacchina"],"","VersioneBackUp : ",$record["VersioneBackUp"] ,"\n";
        }
    }
?>