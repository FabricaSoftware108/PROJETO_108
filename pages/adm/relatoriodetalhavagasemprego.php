<?php
include '../../app/session/verificacao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio Vaga Emprego</title>
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

<body class="body-relatorio-detalhado-vagas-emprego">

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
                    <li><a class="dropdown-item" href="./adicionarCarrosselAdm.php">Cadastrar Carrossel</a></li>
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
  </header><!--Conteúdo Principal-->
    <main class="main-relatorio-detalhado-vagas-emprego">

        <!--Labels coloridas e responsividade do conteudo principal-->
        <div class="container" id="relatorio-detalhato-ve-label-branca">
            <div class="row justify-content-center">
                <div class="col-sm-12-col-lg-6">
                    <div class="relatorio-detalhado-ve-caixa-branca">


                        <!--Titulo da grade-->
                        <div class="container" id="relatorio-detalhado-ve-label-azul">
                            <div class="row justify-content-center">
                                <div class="col-sm-12 col-lg-6">
                                    <p class="relatorio-detalhado-ve-titulo">Relatório - Vagas de Emprego</p>
                                </div>
                            </div>
                        </div>

                        <div class="img-fluid" id="imagem-fundo-relatorio-detalhado-ve">
                            <img src="../../Imagens/fundo-relatorio-detalhado-vagas-emprego.svg" alt="imagem de fundo">
                        </div>

                        <!--Grade com informações do banco de talentos detalhado.-->
                        <div class="col-12" id="tabela-relatorio-detalhado-ve">
                            <table>
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="4">Informações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="col" colspan="2">Nome:
                                            <p class="info-relatorio-detalhado-ve">Coca Cola Pepsi Cola</p>
                                        </td>
                                        <td scope="col" colspan="2">E-mail:
                                            <p class="info-relatorio-detalhado-ve">coca@gmail.com</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Telefone:
                                            <p class="info-relatorio-detalhado-ve">67940028922</p>
                                        </td>
                                        <td colspan="2">CPF/CNPJ:
                                            <p class="info-relatorio-detalhado-ve">000.000.000-00</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Estado:
                                            <p class="info-relatorio-detalhado-ve">Pará
                                            </p>
                                        </td>
                                        <td colspan="2">Cidade:
                                            <p class="info-relatorio-detalhado-ve">Marabá</p>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="4">Sobre a vaga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="td-sobre-pessoa-relatorio-detalhado-ve">Lorem Ipsum is
                                            simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into electronic typesetting, remaining essentially unchanged. It was
                                            popularised in the 1960s with the release of Letraset sheets containing
                                            Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum.</td>
                                    </tr>
                                </tbody>
                            </table>

                            <!--Botão de Imprimir-->
                            <div class="row justify-content-center">
                                <button class="btn btn-primary relatorio-detalhado-ve-btn">Imprimir</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
</body>

</html>