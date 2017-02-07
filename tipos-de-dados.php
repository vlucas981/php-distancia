<?php

// numeros inteiros - int
$variavel = 13;

// numeros com ponto flutuante - float
$variavel = 13.10;

// strings
$variavel = "Victor Lucas";
$variavel = 'Victor Lucas';

// boleanos - bool
$variavel = true;
$variavel = false;

// arrays
$variavel = array(1, 2, 3, 10.1, 'Victor', true);

// objetos
//$variavel = new Objeto();

// recursos
$variavel = mysql_connect('localhost', 'root');

// nulo
$variavel = null;

//Imprime na tela o tipo de dado da variavel
echo gettype($variavel);

//Serve para testar se a variavel é o tipo
is_array($variavel);