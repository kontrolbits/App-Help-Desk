<?php require_once "validador_acesso.php" ?>
<<<<<<< HEAD
<?php
=======
<?
>>>>>>> 0792a0145605f2a116a64c882d8e0550b0f51fc2

  //array de chamados

  $chamados = array();
  //http://php.net/manual/pt_BR/function.fopen.php
  //abrir arquivo.hd
  $arquivo = fopen('arquivo.hd','r');

  //enquato houverem registros (linhas) a serem recuperados
  while(!feof($arquivo)){ //testa pelo fim do arquivo
    //linhas
    $registro = fgets($arquivo);//recupera a linha
    $chamados[] = $registro;

  }
<<<<<<< HEAD
=======
    echo "<pre>";
    echo $arquivo;
    echo "</pre>";
>>>>>>> 0792a0145605f2a116a64c882d8e0550b0f51fc2

  //fechando o arquivo.hd
  fclose($arquivo);

?>

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-consultar-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top">
      App Help Desk
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="logoff.php" class="nav-link">SAIR</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consulta de chamado
          </div>

          <div class="card-body">

<<<<<<< HEAD
            <?php foreach($chamados as $chamado){ ?>

              <?php
                  $chamado_dados = explode('#', $chamado);

                  if ($_SESSION['perfil_id'] == 2) {
                    if ($_SESSION['id'] != $chamado_dados[0]) {
                      continue;
                    }
                  }

                  if(count($chamado_dados) < 3){
                    continue;
                  }
              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
                  <p class="card-text"><?= $chamado_dados[3] ?></p>
                </div>
=======
            <? foreach($chamados as $chamado){ ?>

            <?
                $chamado_dados = explode('#', $chamado);

                if(count($chamado_dados) < 3){
                  continue;
                }
              ?>
            <div class="card mb-3 bg-light">
              <div class="card-body">
                <h5 class="card-title">Titulo</h5>
                <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                <p class="card-text">Descrição do chamado...</p>
>>>>>>> 0792a0145605f2a116a64c882d8e0550b0f51fc2
              </div>

<<<<<<< HEAD
            <?php } ?>
=======
            <? } ?>
>>>>>>> 0792a0145605f2a116a64c882d8e0550b0f51fc2
            <div class="row mt-5">
              <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
