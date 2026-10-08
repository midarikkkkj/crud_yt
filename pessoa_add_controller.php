<?php 
require_once 'pessoa.php';

$nome = $_POST['nome'];

$pessoa = new Pessoa();

$pessoa->setNome($nome);

$pessoa->criar();

header('Location: index.php');
exit();