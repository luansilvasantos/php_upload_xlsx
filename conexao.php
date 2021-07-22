<?php
    session_start();
    // $root = "http://localhost/vix/projectAS";
    $server = "";
    $usuario = "";
    $senha = "";
    $banco = "";
    global $conexao;

    // function findRoot() { 
    //     return(substr($_SERVER["SCRIPT_FILENAME"], 0, (stripos($_SERVER["SCRIPT_FILENAME"], $_SERVER["SCRIPT_NAME"])+1)));
    // }
    
    try{
        $conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        //echo "Ocorreu um erro de conexao: {$erro->getMessage()}";
        $conexao = null;
    }
?> 