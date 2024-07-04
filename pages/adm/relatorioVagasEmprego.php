<?php
include '../../app/session/verificacao.php';
include '../../app/db/connection.php';


$query="SELECT * FROM vagasEmprego";
$result=mysqli_query($connection,$query);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatorio Vagas de Emprego</title>
  <link rel="icon" href="../../Imagens/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../../css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
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
                    <li><a class="dropdown-item" href="./editarCarrosselAdm.php">Lista de Administradores</a></li>
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
  </header><main class="relatorio_vagas_emprego">
    <div class="container_fluid">
      <div class="row justify-content-center align-items-center text-center scroll">
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
                        <th class="label-nome_vagas_emprego">ID</th>
                        <th class="label-nome_vagas_emprego">Nome</th>
                        <th class="label-email_vagas_emprego">E-mail</th>
                        <th class="label-cnpj_vagas_emprego">CNPJ</th>
                        <th class="label-telefone_vagas_emprego">Fone</th>
                        <th class="label-linkedin_vagas_emprego">Cidade</th>
                        <th class="label-linkedin_vagas_emprego">Estado</th>
                        <th class="label-linkedin_vagas_emprego">...</th>
                      </tr>
                    </thead>
                    <tbody>
                      <form action="../../app/session/actionVagasEmpregoDeatalhado.php" method="post">
                      <?php while ($retorno = mysqli_fetch_array($result)){?>
                        <tr>
                          <td class="h9"><a name="vagasEmpregoCodigo"><?php echo $retorno["id"];?></a></td>
                          <td class="h9"><a name="vagasEmpregoCodigo"><?php echo $retorno["nomeEmpresa"];?></a></td>
                          <td class="h9"><a name="vagasEmpregoCodigo"><?php echo $retorno["emailEmpresa"];?></a></td>
                          <td class="h9"><a name="vagasEmpregoCodigo"><?php echo $retorno["cnpj"];?></a></td>
                          <td class="h9"><a name="vagasEmpregoCodigo"><?php echo $retorno["telefone"];?></a></td>
                          <td class="h9"><a name="vagasEmpregoCodigo"><?php echo $retorno["cidade"];?></a></td>
                          <td class="h9"><a name="vagasEmpregoCodigo"><?php echo $retorno["estado"];?></a></td>
                          <td class="h9"><button type="submit" class="btn btn-primary relatorio-vagas_emprego-button_irParaDetalhado" name="vagasEmpregoCodigo"
                          value="<?php echo $retorno["id"]?>">
                            <!--Seta dentro do botão-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                            <!--Seta dentro do botão-->
                          </button>
                        </tr>
                      <?php }?>
                      </form>
                    </tbody>
                  </table>
                </div>
                <button id="btnd" class="btn btn-primary relatorio-vagas_emprego-button">Imprimir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script>
    document.getElementById("btnd").addEventListener("click", function() {
      var printContents = document.getElementById("table_relatorio_vagas_emprego").outerHTML;
      var originalContents = document.body.innerHTML;
      var printWindow = window.open('', '', 'height=800,width=800');
      printWindow.document.write('<html><head><title>Relatório Edital do Aluno</title>');
      printWindow.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">');
      printWindow.document.write('</head><body>');
      printWindow.document.write(printContents);
      printWindow.document.write('</body></html>');
      printWindow.document.close();
      printWindow.focus();
      printWindow.print();
      printWindow.close();
    });
  </script>
</body>

</html>