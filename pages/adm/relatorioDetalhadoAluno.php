<?php
include '../../app/session/verificacao.php';
include '../../app/db/connection.php';

$query = "SELECT * FROM alunosPsg WHERE cpf = '{$_SESSION["alunoCode"]}'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatorio Edital do Aluno</title>
  <link rel="icon" href="../../Imagens/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../../css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    
  </head>
  
  <body class="body-relatorio-edital-do-aluno">
    
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
  <main class="relatorio_edital_aluno">
    <div class="container_fluid">
      <div class="row justify-content-center align-items-center text-center">
        <div class="col-md-10">
          <div class="relatorio_edital_do_aluno-container">
            <div class="relatorio_edital_do_aluno-background-container">
              <div class="relatorio_edital_do_aluno-header">
                <div class="relatorio_edital_do_aluno-title">Relatório Detalhado - Aluno</div>
              </div>
              <div class="relatorio_edital_do_aluno-content">
                <table >
                  <thead>
                    <tr>
                      <th scope="col" colspan="4">Informações Pessoais</th>
                    </tr>
                  </thead>
                  <tbody class="text-start">
                    
                    <tr >
                      <td scope="col" colspan="4">Nome:
                        <p class="info-relatorio-detalhado-bt"><?php echo $row['nome'] ?></p>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">Telefone:
                        <p class="info-relatorio-detalhado-bt"><?php echo $row['telefone'] ?></p>
                      </td>
                      <td colspan="2">CPF:
                        <p class="info-relatorio-detalhado-bt"><?php echo $row['cpf'] ?></p>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">E-mail:
                                    <p class="info-relatorio-detalhado-bt"><?php echo $row['email'] ?></p>
                                  </td>
                                  <td colspan="2">Data de Nascimento:
                                    <p class="info-relatorio-detalhado-bt"><?php
                                        $date = date_create( $row['dataNascimento']);
                                        echo (date_format( $date, "d/m/Y"));
                                        ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Nome do Pai:
                                  <p class="info-relatorio-detalhado-bt"><?php echo $row['nomePai'] ?></p>
                                </td>
                                <td colspan="2">Nome da Mãe:
                                  <p class="info-relatorio-detalhado-bt"><?php echo $row['nomeMae'] ?></p>
                                </td>
                              </tr>
                            </tbody>
                        <thead>
                            <tr>
                              <th scope="col" colspan="4">Endereço</th>
                            </tr>
                          </thead>
                          <tbody class="text-start">
                            <tr>
                              <td colspan="2">Rua:
                                <p class="info-relatorio-detalhado-bt"><?php echo $row['rua'] ?></p>
                              </td>
                              <td colspan="2">Bairro:
                                <p class="info-relatorio-detalhado-bt"><?php echo $row['bairro'] ?></p>
                                </td>
                              </tr>
                              <tr>
                                <td colspan="2">Número:
                                    <p class="info-relatorio-detalhado-bt"><?php echo $row['numero'] ?></p>
                                  </td>
                                  <td colspan="2">Complemento:
                                    <p class="info-relatorio-detalhado-bt"><?php echo $row['complemento'] ?></p>
                                  </td>
                                </tr>
                            <tr>
                                <td colspan="4">CEP:
                                  <p class="info-relatorio-detalhado-bt"><?php echo $row['cep'] ?></p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <a id="btnd" href="gerarPdf.php" class="btn btn-primary relatorio_edital_aluno-button">Imprimir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>

</html>