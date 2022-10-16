<?php
        $servername = "sql303.epizy.com";
        $username = "epiz_32799979";
        $password = "at2vIODpPbW";
        $myDb = "epiz_32799979_ibem";
        $conn = new mysqli($servername, $username, $password,$myDb) or die("Connect failed: %s\n". $conn -> error);

        if (mysqli_connect_errno()) {
            exit('Грешка със свързването към БД!');
        }