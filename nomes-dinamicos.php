<?php

$variavel = 'nome dinamico';
$nome = 'variavel';

// dinamico = echo $$nome;
// normal = echo$nome;

echo 'Dinâmico: ';
echo $$nome;

echo '<br>';

echo 'Comum: ' ;
echo $nome;