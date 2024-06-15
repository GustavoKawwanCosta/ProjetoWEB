<?php

    include_once('config.php');

    if(isset($_POST['update']))

    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['Senha'];
        $confirmarsenha = $_POST['confirmarsenha'];
        $cidade = $_POST['cidade'];
        $pais = $_POST['pais'];
        $data_nascimento = $_POST['data_nascimento'];
        $genero = $_POST['genero'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', Senha='$senha', confirmarsenha='$confirmarsenha', cidade='$cidade', pais='$pais', data_nascimento='$data_nascimento', genero='$genero' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('Location: meuperfil.php')

?>