<?php

include('protect.php');
include('info.php');

if(!empty($_GET['search']))
{
    $data = $_GET['search'];
    $sql  = "SELECT * FROM info WHERE id LIKE '%$data%' or materia LIKE '%$data%' ORDER BY id DESC";
}
else
{
    $sql = "SELECT * FROM info ORDER BY id DESC";
}
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
        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
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
    </nav>
    <br>
    Bem vindo de Volta, <?php echo $_SESSION['nome']; ?>.
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">materia</th>
                <th scope="col">nota</th>
                <th scope="col">data da prova</th>
                <th scope="col">mensalidade</th>
                <th scope="col">nota dos exercicios</th>
                <th scope="col">frequência</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['materia']."</td>";
                        echo "<td>".$user_data['nota']."</td>";
                        echo "<td>".$user_data['dataprova']."</td>";
                        echo "<td>".$user_data['mensalidade']."</td>";
                        echo "<td>".$user_data['notaexercicios']."</td>";
                        echo "<td>".$user_data['frequencia']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'painel.php?search='+search.value;
    }
    </script>
</html>