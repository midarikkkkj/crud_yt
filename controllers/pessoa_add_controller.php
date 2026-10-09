<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/CRUD_YT/models/pessoa.php';

$nome = $_POST['nome'];

if(!empty($_FILES['foto']['tmp_name'])){
    $FOTO = file_get_contents($_FILES['foto']['tmp_name']);
}

$pessoa = new Pessoa();

$pessoa->setNome($nome);

if(isset($foto)){
    $pessoa->setFoto($foto);
} else {
    $pessoa->setFoto(file_get_contents("/CRUD_YT/imgs/gatodog.jpg"));
}

$pessoa->criar();

header('Location: /CRUD_YT/index.php');
exit();