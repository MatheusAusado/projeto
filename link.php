<?php
    try{ //tente fazer isso = a conexão com o banco
        //CONSTANTES = VARÁVEIS IMUTÁVEIS

        DEFINE("SERVIDOR","localhost");
        DEFINE("BANCO","rededevacinacao");
        DEFINE("USUARIO","root");
        DEFINE("SENHA","M@theus86450215");

        $conect = new PDO("mysql:host=".SERVIDOR.";dbname=".BANCO,USUARIO,SENHA); //PDO é o método de conexão do PHP com o Banco
        $conect -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //atributo para mostrar os erros com precisão 
    }catch(PDOException $erro){ //se ele não conseguir
        echo 'HOUVE UM ERRO NO CÓDIGO: ' . $erro -> getMessage();
        //concatenar = juntar valor de texto com valor de variável 
    }
?>