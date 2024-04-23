<?php
session_start();
// include '../../app/session/verificacao.php';
include '../../app/db/connection.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatorio Banco de Talentos</title>
  <link rel="stylesheet" href="../../css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <?php
    
    $query="select *  from vagasEmprego";
    $result=mysqli_query($connection,$query);

    ?>
</head>

<body class="body-relatorio-vagas-emprego">
  
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
  </header><main class="relatorio_vagas_emprego">
    <div class="container_fluid">
      <div class="row justify-content-center align-items-center text-center">
        <div class="col-md-10 col-lg-6">
          <div class="relatorio-vagas_emprego-container">
            <div class="relatorio-vagas-emprego-background-container">
              <div class="relatorio-vagas-emprego-header">
                <div class="relatorio-vagas-emprego-title">Vagas de Emprego</div>
              </div>
              <div class="relatorio-vagas_emprego-content">
                <div class="relatorio-vagas_emprego-background">
                  <table class="table" id="table_relatorio_vagas_emprego">
                    <thead>
                      <tr>
                        <th class="label-nome_vagas_emprego">Nome</th>
                        <th class="label-email_vagas_emprego">E-mail</th>
                        <th class="label-cnpj_vagas_emprego">CNPJ</th>
                        <th class="label-telefone_vagas_emprego">Telefone</th>
                        <th class="label-linkedin_vagas_emprego">Cidade</th>
                        <th class="label-linkedin_vagas_emprego">Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($retorno = mysqli_fetch_array($result)){?>
                        <tr onclick="window.location.href = 'relatoriodetalhavagasemprego.php'">
                          <td class="h9"><?php echo $retorno["nomeEmpresa"];?></td>
                          <td class="h9"><?php echo $retorno["emailEmpresa"];?></td>
                          <td class="h9"><?php echo $retorno["cnpj"];?></td>
                          <td class="h9"><?php echo $retorno["telefone"];?></td>
                          <td class="h9"><?php echo $retorno["cidade"];?></td>
                          <td class="h9"><?php echo $retorno["estado"];?></td>
                        </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
                <button class="btn btn-primary relatorio-vagas_emprego-button">Imprimir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>

</html>