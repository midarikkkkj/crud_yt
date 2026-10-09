<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/CRUD_YT/models/pessoa.php';

$lista = Pessoa::listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de nome</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
    <section class="m-3">
        <table class="table table-dark table-hover">
            <tr>
                <th>FOTO</th>
                <th>NOME</th>
                <th colspan="2">
                    <a href="/CRUD_YT/views/pessoa_add_view.php" class="btn btn-success"><span class="material-symbols-outlined">add</span>Adicionar</a>
                </th>
            </tr>
            <?php foreach ($lista as $pessoa): ?>
                <tr>
                    <td><img src="data:image;base64,<?= base64_encode($pessoa['foto']) ?>" alt=""></td>
                    <td><?= $pessoa['nome'] ?></td>
                    <td>
                        <a href="/CRUD_YT/views/pessoa_edit_view.php?id=<?= $pessoa['id_pessoa'] ?>" class="btn btn-warning">
                            <span class="material-symbols-outlined">
                                edit
                            </span>Editar
                        </a>
                    </td>
                    <td>
                        <form action="/CRUD_YT/controllers/pessoa_del_controller.php" method="post" onsubmit="return confirm('Voce tem certeza que quer deletar isso?')">
                            <input type="hidden" name="id" value="<?= $pessoa['id_pessoa'] ?>">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </section>
</body>

</html>