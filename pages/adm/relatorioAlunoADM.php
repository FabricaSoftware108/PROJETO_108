<?php
include '../../app/session/verificacao.php';
include '../../app/db/connection.php';

?>
<!-- CABEÇALHO E MENU SANDUICHE DO ADM -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/styles.css">

  <!--Links para funcionar o BootStap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <title>Relatórios Aluno ADM</title>
  <link rel="icon" href="../../Imagens/favicon.png" type="image/x-icon">
</head>

<body class="body-relatorioAluno_adm">

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
            <div class="offcanvas-header ">
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
  
  <main class="main-relatorioAluno_adm">
    <div class="container-fluid">
      <!-- <div class="container"> -->

      <div class="imagem-do-relatorio-aluno-adm">
        <img src="../../Imagens/imagem-relatorio-aluno-adm.svg" class="img-fluid">
      </div>
      <div class="col-12">
        <div class="relatorioAlunoAdm">
          <div class="relatorio-aluno-adm-centered">
            <div class="relatorio-aluno-adm-container">
              <div class="col-12">
                <div class="relatorio-edital-adm-container-title">
                  <h1>Relatório Aluno</h1>
                </div>
                <!-- <div class="container mt-3"> -->
                <input type="text" size="34" id="relatorioAlunoAdmInput"
                  class="form-control relatorio-aluno-adm-input" placeholder="Digite o nome do edital que procura.">
                <!-- </div> -->
              </div>
              <div class="container overflow-x-auto">
                <!-- <div class="row"> -->
                <!-- <div class="col-md-12"> -->
                <div class="quadro-cinza-adm-relatorio">
                  <div class="quadro-branco-adm-relatorio">
                    <div class="relatorio-adm-borda-com-conteudo">
                      <form action="../../app/session/actionEdital.php" method="post">
                          <?php
                              $query = 'SELECT * FROM editais ORDER BY dataFim DESC';
                              $result = mysqli_query($connection, $query);

                              while($row = mysqli_fetch_array($result)){
                                  $today = date("Y-m-d");
                                  if($today >= $row["dataFim"] || $row["quantidadeAlunos"] == $row["alunosCadastrados"]){
                                      $dateColor = "bg-danger";
                                  }
                                  else{
                                      $dateColor = "bg-success";
                                  }
                                  ?>
                                  <div class="mx-2 my-2">
                                    <button class="btn w-100 btn-light editalRelat" id=" <?php echo "{$row["codigo"]}"?> <?php echo $row["nome"] ?>" type="submit" name="editalCode" value="<?php echo $row["codigo"] ?>">
                                      <label class="d-flex align-items-center">
                                        <div class="<?php echo $dateColor ?> me-4 rounded" style="width: 20px; height:20px;"></div>
                                        Processo Seletivo <?php echo $row["codigo"] ?> - <?php echo $row["nome"] ?>
                                      </label>
                                    </button>
                                  </div>
                          <?php } ?>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="../../js/editalFilter.js"></script>
</body>

</html>