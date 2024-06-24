<?php require './mount-components.php';
?>

<?=getTemplate('header', [
    'titulo_pagina' => 'Bibloteca',
]);
?>

<h1 class="text-light text-center mt-5 mb-5">Seus Livros</h1>

<section class="container">
    <div class="box-table rounded"> <a href="index.php" class="btn btn-primary mb-3">Novo Livro</a>

    <table class="table table-success">
        <thead>
            <tr>
                <th>Autor</th>
                <th>Titulo</th>
                <th>Editora</th>
                <th>Ano da Publicação</th>
            </tr>
        </thead>

        <tbody>
            
            <?php
            
            $livro = require('get-datas.php');

            foreach($livro as $livros) {
                $livros = explode(',', $livros);

                echo <<<LINHA
                
                <tr>
                    <td>{$livros[0]}</td>
                    <td>{$livros[1]}</td>
                    <td>{$livros[2]}</td>
                    <td>{$livros[3]}</td>
                </tr>
                
                LINHA;
            }

            ?>

        </tbody>
    </table>
    </div>


</section>

<?= getTemplate('footer'); ?>

                                                                                                                            










