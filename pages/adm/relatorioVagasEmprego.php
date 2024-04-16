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

<body class="body-relatorio-banco-talento">
  
<header> 
    <nav class="navbar navbar-dark bg-primary fixed-top nav-adm">
        <div class="container-fluid">
            <div class="md-auto">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            </div>
            <a class="navbar-brand me-auto fs-2 fw-bold" id="titulo-cabecalho-adm" href="#">Área de Administração Hub Fábricas</a>
            <a class="navbar-brand md-auto fs-6" id="nome-cabecalho-adm" href="#">Prof Ederson</a>
          <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header ">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5>Prof Ederson
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
  </header><main class="relatorio_banco_talentos">
    <div class="container_fluid">
      <div class="row justify-content-center align-items-center text-center">
        <div class="col-md-10 col-lg-6">
          <div class="relatorio-banco-talento-container">
            <div class="relatorio-banco-talento-background-container">
              <div class="relatorio-banco-talento-header">
                <div class="relatorio-banco-talento-title">Relatório Vagas de Emprego</div>
              </div>
              <div class="relatorio-banco-talento-content">
                <div class="relatorio-banco_talento-background">
                  <table class="table" id="table_relatorio_banco_talentos">
                    <thead>
                      <tr>
                        <th class="label-nome_banco_talento">Nome</th>
                        <th class="label-email_banco_talento">E-mail</th>
                        <th class="label-cpf_banco_talento">CNPJ</th>
                        <th class="label-telefone_banco_talento">Telefone</th>
                        <th class="label-linkedin_banco_talento">Cidade</th>
                        <th class="label-linkedin_banco_talento">Estado</th>
                        <th class="label-linkedin_banco_talento">Descrição</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($retorno = mysqli_fetch_array($result)){?>
                        <tr onclick="window.location.href = 'relatoriodetalhavagasemprego.php'">
                          <td><?php echo $retorno["nomeEmpresa"];?></td>
                          <td><?php echo $retorno["emailEmpresa"];?></td>
                          <td><?php echo $retorno["cnpj"];?></td>
                          <td><?php echo $retorno["telefone"];?></td>
                          <td><?php echo $retorno["cidade"];?></td>
                          <td><?php echo $retorno["estado"];?></td>
                          <td><?php echo $retorno["descricao"];?></td>
                        </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
                <button class="btn btn-primary relatorio-banco_talento-button">Imprimir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>

</html>