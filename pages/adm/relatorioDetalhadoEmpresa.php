<?php
include '../../app/session/verificacao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Detalhado Empresa</title>
    <link rel="stylesheet" href="../../Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body class="body-relatorio-detalhado-empresa">
    
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
  </header><main class="main-relatorio-detalhado-empresa">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="container" id="relatorio-detalhato-bt-label-branca">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-lg-12">
                                <div class="relatorio-detalhado-bt-caixa-branca">
                                    <div class="container" id="relatorio-detalhado-bt-label-azul">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-12 col-lg-8">
                                                <p class="relatorio-detalhado-bt-titulo">Relatório Detalhado Empresa
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12" id="tabela-relatorio-detalhado-bt">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th scope="col" colspan="4">Informações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="col" colspan="2">Nome da Empresa:
                                                        <p class="info-relatorio-detalhado-bt">Tchurusbangos</p>
                                                    </td>
                                                    <td scope="col" colspan="2">Nome do Representante:
                                                        <p class="info-relatorio-detalhado-bt">Jack Smith Turner</p>
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <td colspan="2">Telefone:
                                                        <p class="info-relatorio-detalhado-bt">6799864578</p>
                                                    </td>
                                                    <td colspan="2">CPF/CNPJ:
                                                        <p class="info-relatorio-detalhado-bt">000.000.000-00</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <td colspan="2">E-mail Representante:
                                                        <p class="info-relatorio-detalhado-bt">Email@example.com</p>
                                                    </td>
                                                    <td colspan="2">E-mail Empresa:
                                                        <p class="info-relatorio-detalhado-bt">
                                                            Email@example.com</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th scope="col" colspan="4">Proposta de Projeto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="4" class="td-proposta-projeto-relatorio-detalhado-bt">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Atque rerum dolorem vel perspiciatis blanditiis ipsum 
                                                        dicta sit quia quae! Aliquid soluta nulla facere eveniet!
                                                        Sed aperiam cumque rerum consequatur itaque. Lorem ipsum
                                                        dolor sit amet consectetur, adipisicing elit.
                                                        Architecto minus excepturi, placeat quam qui
                                                        quo cupiditate debitis sit nobis recusandae?
                                                        Expedita dicta quas laborum cumque magnam,
                                                        porro modi sed similique.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row justify-content-center">
                                            <button class="btn btn-primary"
                                                id="relatorio-detalhado-bt-btn">Imprimir</button>
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


</body>

</html>