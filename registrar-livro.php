<?php



$autor = $_POST['autor'] ?? '';
$titulo = $_POST['titulo'] ?? '';
$editora = $_POST['editora'] ?? '';
$ano = $_POST['ano'] ?? '';

$content = "{$autor},{$titulo},{$editora},{$ano}\n";

$confirmacao = file_put_contents(
    './db/livros.csv',
    $content,
    FILE_APPEND
);

if ($confirmacao) {
    header('Location: listagem-livros.php');
} else {
    header('Location: index.php');
}