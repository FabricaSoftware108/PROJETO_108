<?php

include '../../app/session/verificacao.php';

include '../../app/db/connection.php';

$query = 'SELECT * FROM admin';

$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Editar ADM</title>
  <link rel="icon" href="../../Imagens/favicon.png" type="image/x-icon">
  <link rel="icon" href="./Imagens/favicon.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Link Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  <!-- CSS -->
  <link href="../../css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!--Menu de Navegação-->


  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
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
        <a class="navbar-brand me-auto fs-2 fw-bold" id="titulo-cabecalho-adm" href="./admHome.php">Área de Administração Hub Fábricas</a>
        <a class="navbar-brand md-auto fs-6" id="nome-cabecalho-adm" href="#"><?php echo $_SESSION['nome'] ?></a>
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header ">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5><?php echo $_SESSION['nome'] ?>
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
                  <li><a class="dropdown-item" href="./relatorioeditaldaempresa.php">Demanda</a></li>
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
        <div class="col-md-6 col-12 justify-content-center container-editar-adm">
          <div class="col-12 editar-adm-container-title text-center">
            <h1>Administradores</h1>
            </div>
            <div class="container-fluid" style="overflow-y: auto; max-height: 800px;">
            <form action="../../app/session/actionDesativarADM.php" method="post">
            <?php while ($row = mysqli_fetch_array($result)) {
              if($row["estado"]){
                $outline = "text-success";
                $icon = "bi-toggle-on";
              }else{
                $outline = "text-danger";
                $icon = "bi-toggle-off";
              }
              ?>
            
              <div class="row p-0">
                <div class="col-12 container-name-adm text-center" style="overflow-x: hidden;">


                  <div class="row">
                    <div class="col-md-12 col-12">

                      <div class="ls-box outline-box d-lg-flex d-sm-block justify-content-between align-items-center container-info-editar-adm" style="text-align: start;">
                        <div class="w-75">

                          <h2 class="ls-title-5 ls-display-inline-block label-nome-editar-adm"><?php echo $row['nome'] ?></h2>
                          <h2 class="ls-title-5 ls-display-inline-block label-email-editar-adm"><?php echo $row['email'] ?></h2>
                        </div>
                        <button type="submit" class="btn d-flex justify-content-center align-items-center" name="switchState" value="<?php echo $row['email'] ?>">
                          <i class="bi <?php echo $icon ?> <?php echo $outline ?>" style="font-size: 40px;"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <?php } ?>
            </form>
          </div>
      </div>
    </div>
  </main>
  
  <script src="../../js/chageAdmState.js"></script>
  
</body>

</html>