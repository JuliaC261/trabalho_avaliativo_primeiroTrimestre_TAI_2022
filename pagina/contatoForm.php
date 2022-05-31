<?php
include "../database/bd_contato.php";
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
    <?php
    $objBD = new BD();
    $objBD->conn();

    if (!empty($_GET['id'])) {
        $result = $objBD->buscar($_GET['id']);
        //select * from usuario where id = ?
    }
    if (!empty($_POST)) {

        if (empty($_POST['id'])) {
            $objBD->inserir($_POST);
        } else {
            $objBD->update($_POST);
        }
        header("Location: ./contatoList.php");
    }
    ?>
<nav class="navbar navbar-dark bg-dark">
   <a class="navbar-brand" href="#"></a>
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

    <form action="./contatoForm.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($result->id) ? $result->id : "" ?>" /><br>

        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo !empty($result->nome) ? $result->nome : "" ?>" /><br>

        <label>Sobrenome</label>
        <input type="text" name="sobrenome" value="<?php echo !empty($result->sobrenome) ? $result->sobrenome : "" ?>" /><br>

        <label>CPF</label>
        <input type="text" name="cpf" value="<?php echo !empty($result->cpf) ? $result->cpf : "" ?>" /><br>

        <label>Telefone 1</label>
        <input type="text" name="telefone1" value="<?php echo !empty($result->telefone1) ? $result->telefone1 : "" ?>" /><br>

        <label>Tipo de Telefone 1</label>
        <input type="text" name="tipo_telefone1" value="<?php echo !empty($result->telefone1) ? $result->telefone1 : "" ?>" /><br>

        <label>Telefone 2</label>
        <input type="text" name="telefone2" value="<?php echo !empty($result->telefone2) ? $result->telefone2 : "" ?>" /><br>

        <label>Tipo de Telefone 2</label>
        <input type="text" name="tipo_telefone2" value="<?php echo !empty($result->tipo_telefone2) ? $result->tipo_telefone2 : "" ?>" /><br>

        <label>E-mail 1</label>
        <input type="text" name="email" value="<?php echo !empty($result->email) ? $result->email : "" ?>" /><br>

        <button type= "submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>Salvar</button>
    </form>
    <a class="btn btn-primary" class="fa-solid fa-circle-arrow-left" href="./agendaList.php">Voltar</a> <br>

  <script src="script.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://kit.fontawesome.com/243aaa6612.js" crossorigin="anonymous"></script>

</body>

</html>