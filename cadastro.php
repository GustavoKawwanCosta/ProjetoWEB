<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $Senha = $_POST['senha'];
        $confirmarsenha = $_POST['confirmar-senha'];
        $cidade = $_POST['cidade'];
        $pais = $_POST['pais'];
        $data_nascimento = $_POST['data_nascimento'];
        $genero = $_POST['genero'];


        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, confirmarsenha, cidade, pais, data_nascimento, genero) VALUES ('$nome','$email','$Senha','$confirmarsenha','$cidade','$pais','$data_nascimento','$genero')");

        header("Location: index.php");
        
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'inter', sans-serif;
    border-radius: 1%;
}
body {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #9b9b9b7f;
}
.container {
    width: 80%;
    height: 80vh;
    display: flex;
    box-shadow: 5px 5px 20px 05px rgba(0, 0, 0, 0.299);
    background: #dddddde7;
}
.form-image {
    width: 45%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgb(255, 255, 255);
    padding: 1rem;
}
.form-image img {
    width: 38.2rem;
    height: 106%;
}
.form {
    width: 55%;
    margin-right: 5%;
    margin-left: 5%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.form-header {
    margin-bottom:2rem;
    display: flex;
    justify-content: space-between;
}
.form-header h1::after {
    content: '';
    display: block;
    width: 5rem;
    height: 0.3rem;
    background-color: #0000c6;
    margin: 0 auto;
    position: absolute;
    border-radius: 10px;
}
.input-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 1rem 0;

}
.input-box{
    display: flex;
    flex-direction: column;
    margin-bottom: 1.1rem;
}
.input-box input {
    margin: 0.6rem 0;
    padding: 0.8rem 1.2rem;
    border: none;
    border-radius: 10px;
    box-shadow: 1px 1px 6px #0000001c;
    background-color: #9b9b9b00;
}
.input-box input:hover {
    background-color: #4791ff49;
}
.input-box input:focus-visible{
    outline: 1px solid #4791ff;
}
.input-box label{
    font-size: 1rem;
    font-weight: 600;
    color: #000000c0;
}
.genero-title h6 {
    font-size: 1rem;
    font-weight: 600;
    color: #000000c0;
    justify-content: center;
    padding: 1rem;
    margin-right: 35px
}
.input-box input::placeholder {
    color: #000000be;
}
.genero-group {
    display: 10%;
    justify-content:space-between;
    margin-top: 1rem;
    padding: 1rem;
}
.genero-input {
    display: flex;
    align-items:start;
}
.genero-input label {
    font-size: 0.81rem;
    font-weight: 600;
    color: #000000c0;
}
.nascimento-input{
    border: none;
    border-radius: 10px;
    box-shadow: 1px 1px 6px #0000001c;
    font-family: 'inter', sans-serif;
    position: relative;
    display: flex;
}
#submit{
    width: 100%;
    margin-bottom: 2rem;
    border: none;
    background-color: #050772;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
    color: white;
    font-size: 18px;
}
#submit:hover {
    background-color: #0d11dd;
}
#submit a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}
@media screen and (max-width:1330px){
    .form-image{
        display: none;
    }
    .container {
        width: 50%;
    }
    .form{
        width: 100%;
    }
}
#submitcad{
    width: 100%;
    margin-bottom: 2rem;
    border: none;
    background-color: #050772;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
    color: white;
    font-size: 18px;
}
#submitcad:hover {
    background-color: #0d11dd;
}
#submit a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}
</style>
<title>Cadastro</title>
</head>
<body>
    
        <div class="container">
        <div class="form-image">
        <img src="imagens/eniac.jpg">
    </div>
    <div class="form">
        <form action="cadastro.php" method="POST">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastro de Usuário</h1>
                </div>
            </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input type="text" id="senha" name="senha" placeholder="Crie uma senha forte" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmar-senha">Confirmar Senha</label>
                        <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder="Confirme sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade" required>
                    </div>
                    <div class="input-box">
                        <label for="pais">País</label>
                        <input type="text" id="pais" name="pais" placeholder="Digite seu país" required>
                    </div>
                        <div class="input-box">
                            <label for="data_nascimento">Data de Nascimento</label>
                            <input type="date" id="data_nascimento" name="data_nascimento" required>
                        </div>
                    <div class="genero-input">
                        <div class="genero-title">
                            <h6>Gênero</h6>
                        </div>
                        <div class="genero-group">
                            <div class="genero-input">
                                <input type="radio" id="genero-masculino" name="genero" value="Masculino">
                                <label for="genero-masculino">Masculino</label>
                            </div>
                            <div class="genero-input">
                                <input type="radio" id="genero-feminino" name="genero" value="Feminino">
                                <label for="genero-feminino">Feminino</label>
                            </div>
                            <div class="genero-input">
                                <input type="radio" id="genero-outro" name="genero" value="Outro">
                                <label for="genero-outro">Outro</label>
                            </div>
                        </div>
                    </div>
                </div>
                    <input type="submit" name="submit" id="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>
