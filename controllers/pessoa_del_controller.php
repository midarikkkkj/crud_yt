<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_yt/models/pessoa.php';

$id = $_POST['id'];

$pessoa = new Pessoa($id);

$pessoa->deletar();

header('Location: /CRUD_YT/index.php');
exit();