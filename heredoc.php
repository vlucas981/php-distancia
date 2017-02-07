<?php

$nome = 'Victor';

    $iparos = <<<A
        Esse é um exemplo de uso do heredoc<br />
        É possível expandir variáveis: $nome
A;

echo $iparos;