<?php
include '../../app/session/verificacao.php';
?>
<html lang="pt-br ">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Admin</title>
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
            <a class="navbar-brand me-auto fs-2 fw-bold" id="titulo-cabecalho-adm" href="#">Área de Administração Hub Fábricas</a>
            <a class="navbar-brand md-auto fs-6" id="nome-cabecalho-adm" href="#"><?php echo $_SESSION['nome']?></a>
          <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header ">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5><?php echo $_SESSION['nome']?>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                    <li><a class="dropdown-item" href="./editarAdm.php">Editar Administradores </a></li>
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
                    <li><a class="dropdown-item" href="./cadastroCarrossel.php">Cadastrar Carrossel</a></li>
                    <li><a class="dropdown-item" href="./editarCarrossel.php">Editar Carrossel </a></li>
                 </ul>
                </li>


                <li class="nav-item dropdown-adm">
                  <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Relatórios
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="./relatorioAlunoADM.php">Edital Aluno</a></li>
                    <li><a class="dropdown-item" href="./relatorioeditaldaempresa.php">Edital Empresa</a></li>
                    <li><a class="dropdown-item" href="./relatoriobancotalento.php">Banco de Talentos</a></li>
                    <li><a class="dropdown-item" href="./relatorioVagasEmprego.php">Vagas</a></li>

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
            <div class="cadastro-adm-container-2" style="width: 100%;">
              <div class="cadastro-adm-container-title">Administradores</div>

              <!-- REPETIÇÃO DE ADMIN -->

              <!-- Administrador 1 -->
              <div class="cadastro-adm-borda-com-conteudo">
                <div class="cadastro-adm-nome-aleatorio">Serginho</div>

                <!-- Toggle switch -->
                <div class="cadastro-adm-switch-container">
                  <label class="cadastro-adm-switch">
                    <input type="checkbox" class="cadastro-adm-checkbox">
                    <span class="cadastro-adm-slider"></span>
                    <span class="cadastro-adm-knob" onclick="openPopup()"></span>
                  </label>
                </div>
              </div>

              <div class="cadastro-adm-borda-com-conteudo">
                <div class="cadastro-adm-nome-aleatorio">Julinho</div>

                <!-- Toggle switch -->
                <div class="cadastro-adm-switch-container">
                  <label class="cadastro-adm-switch">
                    <input type="checkbox" class="cadastro-adm-checkbox">
                    <span class="cadastro-adm-slider"></span>
                    <span class="cadastro-adm-knob" onclick="openPopup()"></span>
                  </label>
                </div>
              </div>

              <!-- Administrador 3 -->
              <div class="cadastro-adm-borda-com-conteudo">
                <div class="cadastro-adm-nome-aleatorio">Mariazinha</div>

                <!-- Toggle switch -->
                <div class="cadastro-adm-switch-container">
                  <label class="cadastro-adm-switch">
                    <input type="checkbox" class="cadastro-adm-checkbox">
                    <span class="cadastro-adm-slider"></span>
                    <span class="cadastro-adm-knob" onclick="openPopup()"></span>
                  </label>
                </div>
              </div>

              <!-- Administrador 4 -->
              <div class="cadastro-adm-borda-com-conteudo">
                <div class="cadastro-adm-nome-aleatorio">Ederson</div>

                <!-- Toggle switch -->
                <div class="cadastro-adm-switch-container">
                  <label class="cadastro-adm-switch">
                    <input type="checkbox" class="cadastro-adm-checkbox">
                    <span class="cadastro-adm-slider"></span>
                    <span class="cadastro-adm-knob" onclick="openPopup()"></span>
                  </label>
                </div>
              </div>

              <!-- Administrador 5 -->
              <div class="cadastro-adm-borda-com-conteudo">
                <div class="cadastro-adm-nome-aleatorio">Mauricio</div>

                <!-- Toggle switch -->
                <div class="cadastro-adm-switch-container">
                  <label class="cadastro-adm-switch">
                    <input type="checkbox" class="cadastro-adm-checkbox">
                    <span class="cadastro-adm-slider"></span>
                    <span class="cadastro-adm-knob" onclick="openPopup()"></span>
                  </label>
                </div>
              </div>

              <!-- Administrador 6 -->
              <div class="cadastro-adm-borda-com-conteudo">
                <div class="cadastro-adm-nome-aleatorio">Thiago</div>

                <!-- Toggle switch -->
                <div class="cadastro-adm-switch-container">
                  <label class="cadastro-adm-switch">
                    <input type="checkbox" class="cadastro-adm-checkbox">
                    <span class="cadastro-adm-slider"></span>
                    <span class="cadastro-adm-knob" onclick="openPopup()"></span>
                  </label>
                </div>
              </div>

              <!-- Administrador 7 -->
              <div class="cadastro-adm-borda-com-conteudo">
                <div class="cadastro-adm-nome-aleatorio">Carlos</div>

                <!-- Toggle switch -->
                <div class="cadastro-adm-switch-container">
                  <label class="cadastro-adm-switch">
                    <input type="checkbox" class="cadastro-adm-checkbox">
                    <span class="cadastro-adm-slider"></span>
                    <span class="cadastro-adm-knob" onclick="openPopup()"></span>
                  </label>
                </div>
              </div>

              <!-- Administrador 8 -->
              <div class="cadastro-adm-borda-com-conteudo">
                <div class="cadastro-adm-nome-aleatorio">Pedro</div>

                <!-- Toggle switch -->
                <div class="cadastro-adm-switch-container">
                  <label class="cadastro-adm-switch">
                    <input type="checkbox" class="cadastro-adm-checkbox">
                    <span class="cadastro-adm-slider"></span>
                    <span class="cadastro-adm-knob" onclick="openPopup()"></span>
                  </label>
                </div>
              </div>

              <!-- Administrador 9 -->
              <div class="cadastro-adm-borda-com-conteudo">
                <div class="cadastro-adm-nome-aleatorio">Julia</div>

                <!-- Toggle switch -->
                <div class="cadastro-adm-switch-container">
                  <label class="cadastro-adm-switch">
                    <input type="checkbox" class="cadastro-adm-checkbox">
                    <span class="cadastro-adm-slider"></span>
                    <span class="cadastro-adm-knob" onclick="openPopup()"></span>
                  </label>
                </div>
              </div>
              <!-- Administrador 2 -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>

  

  <script src="../js/cadastro-adm.js"></script>
</body>

</html>
