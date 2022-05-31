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
        header("Location: ./agendaList.php");
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
        <a class="nav-link" href="../index.php">Início<span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../pagina/agendaList.php">Minha Agenda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../pagina/contatoList.php">Meus Contatos</a>
      </li>
    </ul>
  </div>
</nav>
 <br>
   <h1 class="display-5">Formulário Agenda</h1>
  <br>
   <div class="agendaform">
<form action="agendaForm.php" method="post">
  <div>
     <label for="formGroupExampleInput">Título</label>
     <input type="text" name="titulo" class="form-control" value="<?php echo !empty($result->titulo) ? $result->titulo : "" ?>" /><br>
  </div>
   <div class="row">
    <div class="col">
     <label for="formGroupExampleInput">Data de Início</label>
     <input type="text" name="data_inicio" class="form-control" value="<?php echo !empty($result->data_inicio) ? $result->data_inicio : "" ?>" /><br>
    </div>
    <div class="col">
      <label for="formGroupExampleInput">Hora Inicio</label>
      <input type="text" name="hora_inicio" class="form-control" value="<?php echo !empty($result->hora_inicio) ? $result->hora_inicio : "" ?>" /><br>
    </div>
  </div>
   <div class="row">
    <div class="col">
      <label for="formGroupExampleInput">Data Fim </label>
      <input type="text" name="data_fim" class="form-control" value="<?php echo !empty($result->data_fim) ? $result->data_fim : "" ?>" /><br>
    </div>
    <div class="col">
      <label for="formGroupExampleInput">Hora Fim</label>
      <input type="text" name="hora_fim" class="form-control" value="<?php echo !empty($result->hora_fim) ? $result->hora_fim : "" ?>" /><br>
    </div>
  </div>
  <div>
     <label for="formGroupExampleInput">Local</label>
     <input type="text" name="lugar" class="custom-select mr-sm-2" id="inlineFormCustomSelect" value="<?php echo !empty($result->lugar) ? $result->lugar : "" ?>" /><br>
  </div>
  <div>
    <div>
      <label for="formGroupExampleInput">Contato Convidado</label>
      <input type="number" name="convidado_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect" value="<?php echo !empty($result->convidado_id) ? $result->convidado_id : "" ?>" /><br>
    </div>
    </div>
 <form class="was-validated">
  <div>
     <label for="validationTextarea">Descrição</label>
     <input type="text" name="descricao" class="form-control" id="validationTextarea" value="<?php echo !empty($result->descricao) ? $result->descricao : "" ?>" /><br>
  </div>
  <button type= "submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>Salvar</button>
  
  <a class="btn btn-primary" class="fa-solid fa-circle-arrow-left" href="./agendaList.php">Voltar</a> <br>
 

</form>
   </div>
  <script src="script.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://kit.fontawesome.com/243aaa6612.js" crossorigin="anonymous"></script>

</body>

</html>