<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "festa";

    // Criar conexão 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // checar conexão
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // echo "Conexão realizada com sucesso";
?>