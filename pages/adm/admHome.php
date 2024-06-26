<?php
include '../../app/session/verificacao.php';
include '../../app/db/connection.php';

$queryVagas = "SELECT * FROM vagasEmprego;";
$queryDemandas = "SELECT * FROM demandas;";
$queryBT = "SELECT * FROM bancosTalentos;";
$queryGraphic = "SELECT LEFT(dataFim, 4) AS lastNums, quantidadeAlunos FROM editais ORDER BY dataFim";



$dadosVagas = mysqli_query($connection, $queryVagas);
$dadosDemandas = mysqli_query($connection, $queryDemandas);
$dadosBT = mysqli_query($connection, $queryBT);
$graphicData = mysqli_query($connection, $queryGraphic);

$retornoVagas = mysqli_num_rows($dadosVagas);
$retornoDemandas = mysqli_num_rows($dadosDemandas);
$retornoBT = mysqli_num_rows($dadosBT);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Home ADM</title>
  <link rel="icon" href="../../Imagens/favicon.png" type="image/x-icon">
  <link rel="icon" href="./Imagens/favicon.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Link Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link href="../../css/styles.css" rel="stylesheet">
  <!--Menu de Navegação-->


  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>

<body class="body-adm-home">

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

  <!--Conteúdo da página-->
  <main class="main-adm-home">
    <div class="container" id="container-1-adm-home">
      <!--Quadrados com as informações-->
      <div class="row justify-content-center" id="row-2-adm-home">
        <div class="col-sm-12 col-lg-3 w-sm-100 shadow-lg" id="label-quadrados-1-adm-home">
          <p class="text-center">
          <p class="numero-adm-home"><?php echo $retornoDemandas ?></p><br>Projetos Submetidos</p>
        </div>
        <div class="col-sm-12 col-lg-3 offset-lg-1 w-sm-100 shadow-lg" id="label-quadrados-2-adm-home">
          <p class="text-center">
          <p class="numero-adm-home"><?php echo $retornoVagas ?></p><br>Inscrição - Vagas de Emprego</p>
        </div>
        <div class="col-sm-12 col-lg-3 offset-lg-1 w-sm-100 shadow-lg" id="label-quadrados-3-adm-home">
          <p class="text-center">
          <p class="numero-adm-home"><?php echo $retornoBT ?></p><br>Talentos das Fábricas</p>
        </div>
      </div>
    </div>

    <!--Imagem dos gráficos-->
    <div class="container w-100" id="container2AdmHomeImagem">
      <div class="row justify-content-center d-flex align-items-center">
        <div class="col-sm-12 col-lg-7">
          <img src="../../Imagens/adm-home-fundo.png" class="img-fundo-adm-home" alt="Background Imagem">
          <canvas id="myChart"></canvas>
          
        </div>
      </div>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    var dic = {}
    <?php while ($row = mysqli_fetch_array($graphicData)){ ?>
      if(!Object.keys(dic).includes("<?php echo $row["lastNums"] ?>")){
        dic[<?php echo $row["lastNums"] ?>] = <?php echo $row["quantidadeAlunos"] ?>     
      }
      else{
        dic[<?php echo $row["lastNums"] ?>] = dic[<?php echo $row["lastNums"] ?>] + <?php echo $row["quantidadeAlunos"] ?>;
      }
    <?php }?>

    
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        
        labels: Object.keys(dic),
        datasets: [{
          label: 'Alunos cadastrados por ano',
          data: Object.values(dic),
          borderWidth: 1,
          borderColor: '#0000FF',
          backgroundColor: 'rgb(47,112,255)',
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            title:{
              display: true,
              text: 'Número de alunos cadastrados',
              position: 'right'
            }
          },
          x: {
            beginAtZero: true,
            title:{
              display: true,
              text: 'Anos dos editais'
            }
          }
        }
      }
    })
  </script>
</body>

</html>