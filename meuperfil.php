<?php

include('protect.php');
include('config.php');

$sql = "SELECT * FROM usuarios ORDER BY id DESC";

$result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Portal Acadêmico</title>
    <style>
        body{
                font-family:Arial, Helvetica, sans-serif;
                background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
                color: white;
                text-align: center;
                font-size:20px;
        }
        .table-bg{
            background: rgba(0,0,0,0.3);
            border-radius: 15px 15px 0 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid"> 
            <a class="navbar-brand" href="#">Portal Acadêmico</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
        <a href="logout.php" class="btn btn-danger me-5">Sair</a>
        </div>
        <div class="d-flex">
        <a href="meuperfil.php" class="btn btn-dark me-5">Perfil</a>
        </div>
        <div class="d-flex">
        <a href="painel.php" class="btn btn-dark me-5">materias</a>
        </div>
    </nav>
    <br>
    Bem vindo de Volta, <?php echo $_SESSION['nome']; ?>.
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">email</th>
                <th scope="col">senha</th>
                <th scope="col">cidade</th>
                <th scope="col">pais</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">genero</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['Senha']."</td>";
                        echo "<td>".$user_data['cidade']."</td>";
                        echo "<td>".$user_data['pais']."</td>";
                        echo "<td>".$user_data['data_nascimento']."</td>";
                        echo "<td>".$user_data['genero']."</td>";
                        echo "<td>
                            <a class='btn btn-sm btn btn-primary' href='edit.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                            </svg>
                            </a>
                            <a class='btn btn-sm btn btn-danger' href='delete.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                            </svg>
                            </>
                        </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        </div>
</body>
</html>