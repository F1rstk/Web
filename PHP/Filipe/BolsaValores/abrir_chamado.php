<?php
require_once "validador_acesso.php";
?>
 
<html>
 
<head>
  <meta charset="utf-8" />
  <title>Leão Investimentos|Transações</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
 
  <style>
.navbar
  {
    background-color:#1d2437;
  }
    .card-abrir-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
      width: 500px;
      color: #d8ae5e;
    }

  </style>
</head>
 
<body>
  <nav class="navbar">
    <a class="navbar-brand" href="home.php">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
     Leão Investimentos
    </a>
  </nav>
 
  <div class="container">
    <div class="row">
 
      <div class="card-abrir-chamado">
        <div class="card">
          <div class="card-header">
            Abertura de chamado
            <?php if (isset($_GET['cadastro']) && $_GET['cadastro'] === 'efetuado') { ?>
              <div style="color: green;">
                <script>
                  alert('Transação cadastrada com sucesso!')
                </script>
              </div>
            <?php } ?>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
 
 
                <form action="registra_chamado.php" method="POST">
                  <div class="form-group">
                    <label>Transações</label>
                    <select name="titulo" type="text" class="form-control">
                      <option>Compra</option>
                      <option>Venda</option>
                    </select>
                  </div>
 
                  <div class="form-group">
                    <label>Ativos Financeiros</label>
                    <select name="categoria" class="form-control">
                      <option>ações</option>
                      <option>títulos de renda fixa</option>
                      <option>commodities</option>
                      <option>fundos imobiliários</option>
                      <option>outros</option>
                    </select>
                  </div>
 
                  <div class="form-group">
                    <label>Valor</label>
                    <textarea name="descricao" class="form-control" rows="3"></textarea>
                  </div>
 
                  <div class="row mt-5">
                    <div class="col-6">
                      <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                    </div>
 
                    <div class="col-6">
                      <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                    </div>
                  </div>
                </form>
 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
 
</html>