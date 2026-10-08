<?php
require_once 'pessoa.php';

$id = $_POST['id'];

$pessoa = new Pessoa($id);

$pessoa->deletar();

header('Location: index.php');
exit();