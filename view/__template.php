<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Template</title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <link rel="stylesheet" href="css/__template.css">

</head>

<body>
  <div class="container-fluid p-0">
    <div class="bg-css"><img src="https://targetinformatica.com.br/wp-content/uploads/2018/02/header-bg.png" alt=""
        class="w-100 " style="height:60px;"></div>

    <div class="sticky-top d-flex justify-content-between px-2 align-items-center bg-css">
      <nav class="navbar navbar-expand-lg  text-primary">
        <div class="container-fluid">
          <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active text-primary fs-5" aria-current="page" href="<?php echo ROOT; ?>">Home</a>
              <a class="nav-link text-primary fs-5" href="<?php echo ROOT; ?>/contato">Contato</a>
            </div>
          </div>
        </div>
      </nav>
      <a class="navbar-brand text-primary" href="#" id="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" onclick="light()" fill="currentColor"
          class="bi bi-sun text-light" viewBox="0 0 16 16">
          <path
            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
        </svg>
      </a>
    </div>

    <div class="bg-conteudo text-light" id="body">
      <?= $this->section('content') ?>
    </div>

    <footer class="text-light pt-4 w-100 bg-css">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Links Rápidos</h3>
            <ul>
              <li><a href="#">Página Inicial</a></li>
              <li><a href="#">Sobre</a></li>
              <li><a href="#">Produtos</a></li>
              <li><a href="#">Contato</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3>Redes Sociais</h3>
            <ul>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">LinkedIn</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3>Contato</h3>
            <p>Endereço: 123 Rua Principal<br>
              Cidade, Estado, CEP<br>
              Telefone: (123) 456-7890<br>
              Email: exemplo@email.com</p>
          </div>
        </div>

        <p>&copy; 2024 Nome da Empresa. Todos os direitos reservados.</p>
      </div>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/__template.js"></script>
</body>

</html>