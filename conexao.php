<?php 
require_once "config.php";

class Conexao {
    public static function conectar(){
        $conn = new PDO(DRIVE .  ":host=" . LOCAL_DO_BANCO . ";dbname=" . NOME_DO_BANCO . ";charset=" . CHARSET , USUARIO , SENHA);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}