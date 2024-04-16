<?php
include '../../app/session/verificacao.php';
?>
<!-- CABEÇALHO E MENU SANDUICHE DO ADM -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">

    <!--Links para funcionar o BootStap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Cadastro editais ADM</title>
</head>
<body class="body-cadastro-adm-edital">

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
  </header>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <main class="cadastro-adm-editais">
                <div class="cadastro-adm-edital-centered">
                    <div class="cadastro-adm-edital-container">
                        <div class="col-xs-12 col-sm-auto col-md-auto col-lg-12">
                            <div class="cadastro-adm-edital-container-title">
                                <h1>Cadastro de Edital</h1>
                            </div>
                            
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12" id="tituloCadastroEdital">
                                            <div class="cadastro-adm-edital-input-container ">
                                                <label for="cadastro-adm-edital-nome" class="cadastro-adm-edital-label">Nome do Edital</label>
                                                <input type="text"  size="60" maxlength="11" id="cadastroAdmEditalInput" class="form-control cadastro-adm-edital-input">
                                            </div>
                                            <div class="cadastro-adm-edital-input-container">
                                                <label for="cadastro-adm-edital-email" class="cadastro-adm-edital-label">Código Do Edital</label>
                                                <input type="email" size="10" maxlength="11" id="cadastroAdmEditalInput" class="form-control cadastro-adm-edital-input">
                                            </div>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <label for="cadastro-adm-edital-data" id="centerDateInicio" class="cadastro-adm-edital-label-data">Data de Início</label>
                                                        <input type="date" class="form-control" id="cadastroAdmEditalDataInicial">
                                                    </div>
                                                    <div class="col-md-6 mt-2 mt-md-0">

                                                        <label for="cadastro-adm-edital-data"  id="centerDateFinal"class="cadastro-adm-edital-label-data">Data de Fim</label>
                                                        <input type="date" class="form-control" id="cadastroAdmEditalDataFinal">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row align-items-center justify-content-center ">
                                                <div class="col-md-12 col-sm-12 text-center">
                                                    <label for="file-input" class="file-label" style="text-align: center;">
                                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="16.000000pt"
                                                            height="16.000000pt" viewBox="0 0 16.000000 16.000000"
                                                            preserveAspectRatio="xMidYMid meet">
                                                            <g transform="translate(0.000000,16.000000) scale(0.100000,-0.100000)"
                                                                fill="grey" stroke="none">
                                                                <path
                                                                    d="M41 105 c-51 -55 -53 -88 -6 -93 25 -2 39 6 79 47 49 50 55 74 20 88 -17 6 -104 -71 -104 -93 0 -27 21 -23 62 13 l43 37 -40 -42 c-41 -44 -71 -53 -82 -26 -4 10 9 31 38 60 23 24 40 46 37 49 -3 3 -24 -15 -47 -40z m104 4 c-3 -4 -11 -6 -18 -3 -7 2 -26 -9 -42 -26 -16 -16 -33 -30 -39 -30 -6 0 10 20 34 45 33 34 47 42 57 34 7 -6 10 -15 8 -20z" />
                                                            </g>
                                                        </svg>
                                                        <p style="padding-top: 15px;">Arquivo pdf ou docx</p>
                                                        <input type="file" id="file-input" class="file-input"
                                                            title="Arquivo pdf ou docx">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="button-cadastrar-edital-adm">
                                                <button type="button" class="btn btn-primary">Cadastrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="imagem-cadastroEditalADM">
                                        <img src="../../Imagens/img_cadastroEdital_adm.png"  width="150" height="400">
                                    </div>
                                </div>
                            

                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-6 col-12" style="padding: 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-auto col-12" style="padding: 0;">
                            <div class="cadastro-adm-editais" >
                                <div class="cadastro-adm-edital-centered">
                                    <div class="cadastro-adm-edital-container">
                                        <div class="col-12" >
                                            <div class="cadastro-adm-edital-container-title">
                                                <h1>Editais</h1>
                                            </div>
                                            <div class="container mt-3">
                                                <input type="text" size="34" maxlength="11" id="cadastroAdmEditalInputEdital" class="form-control cadastro-adm-edital-input" placeholder="Digite o nome do edital que procura.">
                                            </div>
                                        </div>
                                        <div class="container overflow-x-auto">
                                            <div class="row">
                                                <div class="quadro-cinza-adm-edital">
                                                    <div class="quadro-branco-adm-edital">
                                                        <div class="cadastro-adm-borda-com-conteudo">
                                                        
            
                                                            <label class="cadastro-adm-nome-aleatorio-edital">
                                                                <span class="icon-green"></span>
                                                                <span class="label-text">Processo Seletivo 12/2023 - Fábrica de Software - Aluno</span>
                                                            </label>

                                                            <label class="cadastro-adm-nome-aleatorio-edital">
                                                                <span class="icon-green"></span>
                                                                <span class="label-text">Processo Seletivo 12/2023 - Fábrica de Software - Aluno</span>
                                                            </label>
            
                                                            <label class="cadastro-adm-nome-aleatorio-edital">
                                                                <span class="icon-green"></span>
                                                                <span class="label-text">Processo Seletivo 12/2023 - Fábrica de Software - Aluno</span>
                                                            </label>

                                                            <label class="cadastro-adm-nome-aleatorio-edital">
                                                                <span class="icon-red"></span>
                                                                <span class="label-text">Processo Seletivo 12/2023 - Fábrica de Software - Aluno</span>
                                                            </label>

                                                            <label class="cadastro-adm-nome-aleatorio-edital">
                                                                <span class="icon-red"></span>
                                                                <span class="label-text">Processo Seletivo 12/2023 - Fábrica de Software - Aluno</span>
                                                            </label>

                                                            <label class="cadastro-adm-nome-aleatorio-edital">
                                                                <span class="icon-red"></span>
                                                                <span class="label-text">Processo Seletivo 12/2023 - Fábrica de Software - Aluno</span>
                                                            </label>

                                                            <label class="cadastro-adm-nome-aleatorio-edital">
                                                                <span class="icon-green"></span>
                                                                <span class="label-text">Processo Seletivo 12/2023 - Fábrica de Software - Aluno</span>
                                                            </label>

                                                            <label class="cadastro-adm-nome-aleatorio-edital">
                                                                <span class="icon-green"></span>
                                                                <span class="label-text">Processo Seletivo 12/2023 - Fábrica de Software - Aluno</span>
                                                            </label>

                                                            <label class="cadastro-adm-nome-aleatorio-edital">
                                                                <span class="icon-green"></span>
                                                                <span class="label-text">Processo Seletivo 12/2023 - Fábrica de Software - Aluno</span>
                                                            </label>

                                                            <label class="cadastro-adm-nome-aleatorio-edital">
                                                                <span class="icon-green"></span>
                                                                <span class="label-text">Processo Seletivo 12/2023 - Fábrica de Software - Aluno</span>
                                                            </label>

                                                            <label class="cadastro-adm-nome-aleatorio-edital">
                                                                <span class="icon-green"></span>
                                                                <span class="label-text">Processo Seletivo 12/2023 - Fábrica de Software - Aluno</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-auto mt-3">
                                                    <div class="container mb-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="button-apagar-edital">
                                                                    <button type="button" class="btn btn-primary">Apagar</button>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6 mt-2 mt-md-0">
                                                                <div class="button-editar-edital">
                                                                    <button type="button" class="btn btn-primary">Editar</button>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
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