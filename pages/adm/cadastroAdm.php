<?php
include '../../app/session/verificacao.php';
?>
<html lang="pt-br ">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Admin ADM</title>
  <link rel="icon" href="../../Imagens/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../css/styles.css">
  <script src="../../js/cadastro-adm.js"></script>

</head>

<body class="Cadastro-Admin">
  <!--Menu de Navegação-->
  <header> 
    <nav class="navbar navbar-dark bg-primary fixed-top nav-adm">
        <div class="container-fluid">
        <div class="md-auto">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <a class="navbar-brand me-auto fs-2 fw-bold" id="titulo-cabecalho-adm" href="./admHome.php">Área de Administração Hub Fábricas</a>
        <a class="navbar-brand md-auto fs-6" id="nome-cabecalho-adm" href="#"><?php echo $_SESSION['nome']?></a>
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5><?php echo $_SESSION['nome']?>
            <div class="offcanvas-x-button">
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" id="button-close-x"></button>
              </div>
          </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav flex-column pe-3">
                <li class="nav-item">
                  <a class="nav-link active fs-5" aria-current="page" href="./admHome.php">Home</a>
                </li>
                <li class="nav-item dropdown-adm">
                  <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Administradores
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="./cadastroAdm.php">Adicionar Administradores</a></li>
                    <li><a class="dropdown-item" href="./editarAdm.php">Lista de Administradores</a></li>
                 </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" aria-current="page" href="./cadastroAdmEdital.php">Editais</a>
                </li>

                <li class="nav-item dropdown-adm">
                  <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Fábricas
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="./adicionarCarrosselAdm.php">Cadastrar Carrossel</a></li>
                    <li><a class="dropdown-item" href="./editarCarrosselAdm.php">Editar Carrossel  </a></li>
                 </ul>
                </li>


                <li class="nav-item dropdown-adm">
                  <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Relatórios
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="./relatorioAlunoADM.php">Edital Aluno</a></li>
                    <li><a class="dropdown-item" href="./relatorioeditaldaempresa.php">Demanda</a></li>
                    <li><a class="dropdown-item" href="./relatoriobancotalento.php">Talentos das Fábricas</a></li>
                    <li><a class="dropdown-item" href="./relatorioVagasEmprego.php">Vagas de Emprego</a></li>

                </ul>
                </li>


                <li class="nav-item fs-5">
                  <a class="nav-link" href="./usuarioAdm.php">Usuário</a>
                </li>
                <li class="nav-item mt-auto mb-2">
                  <a class="nav-link fs-5" href="../../app/session/logout.php">Sair</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>        
  </header>

<main class="cadastro-adm">
  <div class="container-fluid" style="padding-top: 50px;">
    <div class="container">
      <div class="cadastro-adm-centered">
        <div class="row justify-content-center align-items-center text-center">
          <div class="col-md-6 col-sm-12 justify-content-center align-items-center mb-5">
            <div class="cadastro-adm-container-1" style="width: 100%;">
            <form method="post" action="../../app/session/conexaoCadastroAdm.php">
              <div class="cadastro-adm-container-title">Adicionar ADM</div>
              <div class="cadastro-adm-distanciamento">
                <div class="cadastro-adm-input-container">
                  <label for="cadastro-adm-nome" class="cadastro-adm-label">Nome</label>
                  <input type="text" id="cadastro-adm-nome" name="nome" class="form-control cadastro-adm-input">
                </div>
                <div class="cadastro-adm-input-container">
                  <label for="cadastro-adm-email" class="cadastro-adm-label">E-Mail</label>
                  <input type="email" id="cadastro-adm-email" name="email" class="form-control cadastro-adm-input">
                </div>
                <div class="cadastro-adm-input-container">
                  <label for="cadastro-adm-telefone" class="cadastro-adm-label">Telefone</label>
                  <input type="tel" id="cadastro-adm-telefone" name="telefone" maxlength="15" class="form-control cadastro-adm-input">
                </div>
                <div class="cadastro-adm-input-container">
                  <label for="cadastro-adm-senha" class="cadastro-adm-label">Senha Pré-Definida</label>
                  <input type="text" id="cadastro-adm-senha" name="senha" class="form-control cadastro-adm-input" readonly>
                </div>
                <button type="submit" class="btn btn-primary cadastro-adm-button">Ativar</button>
              </div>
              <!-- IMAGEM -->
              <img src="../../Imagens/cadastro-adm-imagem-1.png" class="cadastro-adm-img-1"> 
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

  

  <script src="../js/cadastro-adm.js"></script>
  <script src="../../js/mascara-telefone-add-adm.js"></script>
</body>

</html>
