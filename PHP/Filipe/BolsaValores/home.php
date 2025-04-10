<?php
require_once "validador_acesso.php";
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Leão Investimentos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Estilos personalizados -->
    <style>
      body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
      }

      .navbar-brand img {
        margin-right: 10px;
      }

      .card-home {
        padding: 30px 0;
        width: 100%;
        margin: 0 auto;
      }

      .news-section {
        margin-top: 50px;
      }

      .news-card img {
        height: 180px;
        object-fit: cover;
      }

      .card-deck .card {
        min-width: 250px;
      }

      footer {
        background-color: #343a40;
        color: #fff;
        padding: 20px 0;
        text-align: center;
        margin-top: 60px;
      }

      h3 {
        font-weight: bold;
        color: #343a40;
      }

      .card-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
      }

      .navbar {
        background-color: #1d2437;
      }

      .banner {
        margin-top: 20px;
      }

      .carousel-inner img {
        height: 400px;
        object-fit: cover;
      }

      .carousel-caption {
        background: rgba(0, 0, 0, 0.5);
        padding: 15px;
        border-radius: 10px;
      }
      
      .container{
        margin-bottom: -50px;
      }
    </style>
  </head>

  <body>

    <nav class="navbar">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Leão Investimentos
      </a>
      <ul class="navbar-nav flex-row ml-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <!-- Banner -->
    <div class="container banner">
      <img src="banner-bolsa.png" alt="Banner Bolsa de Valores" class="img-fluid rounded">
    </div>

    <!-- Menu -->
    <div class="container">
      <div class="row">
        <div class="card-home">
          <div class="card mt-5">
            <div class="card-header">Menu</div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img src="app-bolsa-de-valores.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="documento.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Carrossel -->
    <div class="container mt-4">
      <div id="carrosselBolsa" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="carrossel1.png" class="d-block w-100" alt="Investimento 1">
            <div class="carousel-caption d-none d-md-block">
              <h5>Invista no seu futuro</h5>
              <p>Construir patrimônio começa com um passo consciente hoje.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="carrossel2.png" class="d-block w-100" alt="Investimento 2">
            <div class="carousel-caption d-none d-md-block">
              <h5>Bolsa não é cassino</h5>
              <p>Com informação e estratégia, você investe com segurança.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="carrossel3.png" class="d-block w-100" alt="Investimento 3">
            <div class="carousel-caption d-none d-md-block">
              <h5>Seja protagonista</h5>
              <p>Faça o dinheiro trabalhar por você com ações e fundos.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carrosselBolsa" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carrosselBolsa" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </div>

    

      <!-- Seção de Notícias sobre Investimentos -->
      <div class="row news-section">
        <div class="col">
          <h3>Notícias sobre Investimentos na Bolsa</h3>
          <div class="card-deck mt-3">
            <div class="card news-card">
              <img src="ibovespa.jpg" class="card-img-top" alt="Ibovespa">
              <div class="card-body">
                <h5 class="card-title">Ibovespa fecha em alta</h5>
                <p class="card-text">O principal índice da bolsa brasileira fechou o dia em alta impulsionado por ações de bancos e commodities.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Atualizado há 2 horas</small>
              </div>
            </div>
            <div class="card news-card">
              <img src="Dolar.avif" class="card-img-top" alt="Dólar">
              <div class="card-body">
                <h5 class="card-title">Dólar recua frente ao real</h5>
                <p class="card-text">A moeda americana caiu 0,8% nesta quinta-feira com foco na política monetária dos EUA.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Atualizado há 3 horas</small>
              </div>
            </div>
            <div class="card news-card">
              <img src="Petrobras.jpg" class="card-img-top" alt="Petrobras">
              <div class="card-body">
                <h5 class="card-title">Ações da Petrobras disparam</h5>
                <p class="card-text">Com novo plano estratégico, os papéis da estatal subiram mais de 4% na B3.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Atualizado há 1 hora</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <p class="mb-0">&copy; 2025 Leão Investimentos - Todos os direitos reservados.</p>
      </div>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
