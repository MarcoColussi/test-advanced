<?php
        function myFun_createDB() {
            $host="localhost"; $username="root"; $password="marco1997";
            $conn = mysqli_connect($host,$username,$password);
            $query="CREATE DATABASE backups_db";
            mysqli_query($conn,$query);
            mysqli_select_db($conn,"backups_db");
            $query="CREATE TABLE Backup(NomeAzienda CHAR(30), NomeMacchina CHAR(30), VersioneBackUp CHAR(30))"; 
            mysqli_query($conn,$query);
        }


        //variabili contenenti dati form
        $AZIENDA =$_POST["nomeAz"];
        $MACCHINA =$_POST["nomeMacc"];
        $VERSIONE = $_POST["backupV"];

        if(!empty($_POST["nomeAz"])){ 
            echo "<h1>Il NOME AZIENDA inserito e': " . $AZIENDA . "</h1>"; }
        if(!empty($_POST["nomeMacc"])){ 
            echo "<h1>'Il NOME MACCHINA inserito e': " . $MACCHINA . "</h1>"; }
            if(!empty($_POST["backupV"])){ 
                echo "<h1>La VERSIONE BACKUP inserita e': " . $VERSIONE . "</h1>"; }
        
        
        //connessione a MYSQL
        $conn=mysqli_connect("localhost", "root","marco1997");
        if(!$conn) die("Connessione non riuscita");
    
        if(!mysqli_select_db($conn,"backups_db")) 
        {
            echo "Selezione del database non riuscita, provvedo a crearlo <br/>";
            
            myFun_createDB();
        }
        else {
            echo "Database <b>gia' presente</b>.<br>";
        }
        mysqli_select_db($conn,"backups_db"); 
    
        
        $query="INSERT INTO Backup(NomeAzienda ,NomeMacchina ,VersioneBackUp) VALUES ('$AZIENDA','$MACCHINA','$VERSIONE')"; 
        mysqli_query($conn,$query);
    
        
        echo "Nel database ora sono presenti: <br>";
        $query = "SELECT * FROM Backup";
        $risultato = mysqli_query($conn,$query);
        if (!$risultato){ 
            die("Query fallita");
        }
        else {
            echo "Dati Inseriti Correttamente";}
    
?>