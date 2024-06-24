<?php

$path = './db/livros.csv';

$dataAlunos = file($path, FILE_SKIP_EMPTY_LINES);

return $dataAlunos;