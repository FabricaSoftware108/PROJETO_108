<?php
include '../../app/session/verificacao.php';

include '../../app/db/connection.php';

$query = 'SELECT * FROM admin';

$result = mysqli_query($connection, $query);
?>
<html lang="pt-br ">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../css/styles.css">
  <script src="../../js/cadastro-adm.js"></script>
  <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css">


</head>

<body class="Editar-adm">
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
        <a class="navbar-brand md-auto fs-6" id="nome-cabecalho-adm" href="#"><?php echo $_SESSION['nome'] ?></a>
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header ">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5><?php echo $_SESSION['nome'] ?>
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
                  <li><a class="dropdown-item" href="./adicionarCarrosselAdm.php">Cadastrar Carrossel</a></li>
                  <li><a class="dropdown-item" href="./editarCarrosselAdm.php">Editar Carrossel </a></li>
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


  <main class="wrapper-editar-adm editar-adm">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6 col-11 justify-content-center align-items-center container-editar-adm">
          <div class="col-12 editar-adm-container-title text-center">
            <h1>Administradores</h1>
          </div>
          <div class="container-fluid" style="overflow-y: auto; max-height: 800px;">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
              <div class="row p-0">
                <div class="col-12 container-name-adm text-center" style="overflow-x: hidden;">

                  <div class="row">
                    <div class="col-md-12 col-12">

                      <div class="ls-box outline-box" style="text-align: start;">
                        <h2 class="ls-title-5 ls-display-inline-block"><?php echo $row['nome'] ?></h2><br>  
                        <h2 class="ls-title-5 ls-display-inline-block"><?php echo $row['email'] ?></h2>

                        <div data-ls-module="switchButton" class="ls-switch-btn ls-float-right switchbutton">
                          <input type="checkbox" id="switch-adm">
                          <label class="ls-switch-label" for="teste" name="switch-adm" ><span></span></label>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            <?php } ?>
          </div>
          <!-- Parte das funçôes no javascript com o switch -->
          <!-- // Um botão switch específico 
          $('#id-do-botao-switch').on('switchButton:activated', function() {
          // do something
          }) -->
          <!-- // Um botão switch específico 
          $('#id-do-botao-switch').on('switchButton:deactivated', function() {
          // do something
          })
        https://opensource.locaweb.com.br/locawebstyle/documentacao/componentes/botao-switch/ -->
        </div>
      </div>
    </div>
  </main>
  <footer>
    <script src="//assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js"></script>
  </footer>


  <script src="../js/cadastro-adm.js"></script>
</body>

</html>