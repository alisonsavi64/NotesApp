<?php
    $servername = "db";
    $username = "user";
    $password = "password";

    try{
        $nomeUsuario = $_POST['name'];
        $senhaUsuario = $_POST['password'];
        $sql = "CREATE TABLE Usuarios";
        if($conn->query($sql) === TRUE){
        echo "Funfou";
    
        }
        else{
            echo "Nao funfo";
        }    
    }