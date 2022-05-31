<?php
include "../database/bd_agenda.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">Sis Agenda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Início <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../screens/listagemagenda.php">Minha Agenda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../screens/listagemcontato.php">Meus Contatos</a>
      </li>
    </ul>
  </div>
</nav>
 </br>
    <form action="./agendaList.php" method="post">
        <input type="search" name="titulo" placeholder="Pesquisar Título">
        <input type="submit" class="btn btn-outline-success" value="Pesquisar">
    </form>
    <a type="button" class="btn btn-primary" href="./agendaForm.php"> <i class="fa-solid fa-plus plus"></i> Cadastrar</a></br>
    <?php
    $objBD = new BD();
    $objBD->conn();

    if (!empty($_POST['titulo'])) {
        $result = $objBD->pesquisar($_POST);
    } else {
        $result = $objBD->select();
    }

    if (!empty($_GET['id'])) {
        $objBD->remover($_GET['id']);
        header("location: agendaList.php");
    }

    echo "<table class='table table-hover'>
    <thead>
      <tr>
        <th scope='col'>#</th>
        <th scope='col'>Título</th>
        <th scope='col'>Data Inicio</th>
        <th scope='col'>Hora Inicio 1</th>
        <th scope='col'>Data Fim</th>
        <th scope='col'>Hora Fim</th>
        <th scope='col'>Local</th>
        <th scope='col'>Convidado</th>
        <th scope='col'>Ação</th>
        <th scope='col'>Ação</th>
      </tr>
    </thead>
                </tr>
            ";
    foreach ($result as $item) {
        echo "
        <tr>
            <td>" . $item['id'] . "</td>
            <td>" . $item['titulo'] . "</td>
            <td>" . $item['data_inicio'] . "</td>
            <td>" . $item['data_fim'] . "</td>
            <td>" . $item['hora_inicio'] . "</td>
            <td>" . $item['hora_fim'] . "</td>
            <td>" . $item['lugar'] . "</td>
            <td>" . $item['descricao'] . "</td>
            <td>" . $item['convidado_id'] . "</td>
            <td><a href='./agendaForm.php?id=" . $item['id'] . "'>Editar</a></td>
            <td><a href='./agendaList.php?id=" . $item['id'] . "'
                   onclick=\"return confirm('Deseja realmente remover o registro?') \" >Deletar</a></td>
        </tr>";
    }
    echo "</table>";
    ?>

 <a class="btn btn-primary" class="fa-solid fa-circle-arrow-left" href="../index.php">Voltar</a> <br>

 <script src="script.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://kit.fontawesome.com/243aaa6612.js" crossorigin="anonymous"></script>

</body>

</html>