<?php

$usuario = 'root';
$senha = '';
$database ='formulario';
$host ='localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);
$conexao = new mysqli($host, $usuario, $senha, $database);

if($mysqli-> error) {
    die("falha ao conectar ao banco de dados: ". $mysqli->error);
}
