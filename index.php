<?php require './mount-components.php';
?>

<?=getTemplate('header', [
    'titulo_pagina' => 'Cadastro',
]);
?>

<section class="conteiner">
    <h1 class="text-light text-center mt-3 mb-3">Cadastro</h1>

    <div class="box-table rounded" id="cad">
    <form action="./registrar-livro.php" method="POST">
        <label class="text-light" for="">Autor</label>
        <input class="form-control mb-2" type="text" placeholder="Nome do Autor:" name="autor">

        <label class="text-light" for="">Titulo</label>
        <input class="form-control mb-2" type="text" placeholder="Titulo da Obra" name="titulo">

        <label class="text-light" for="">Editora</label>
        <input class="form-control mb-2" type="text" placeholder="Editora" name="editora">

        <label class="text-light" for="">Ano da Publicação</label>
        <input class="form-control mb-2" type="date" placeholder="Ano da publicação" name="ano">

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
    </div>
</section>

<?= getTemplate('footer'); ?>