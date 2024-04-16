<?php
include '../../app/session/verificacao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Home ADM</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


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

      <!--Quadrados com as informações-->
      <div class="row justify-content-center" id="row-2-adm-home">
        <div class="col-sm-12 col-lg-3 w-sm-100" id="label-quadrados-1-adm-home">
          <p class="text-center">217<br>Projetos Submetidos</p>
        </div>
        <div class="col-sm-12 col-lg-3 offset-lg-1 w-sm-100" id="label-quadrados-2-adm-home">
          <p class="text-center">218<br>Inscrição - Vagas de Emprego</p>
        </div>
        <div class="col-sm-12 col-lg-3 offset-lg-1 w-sm-100" id="label-quadrados-3-adm-home">
          <p class="text-center">160<br>Banco de Talentos</p>
        </div>
      </div>
    </div>

    <!--Imagem dos gráficos-->
    <div class="container w-100" id="container-2-adm-home-imagem">
  <div class="row justify-content-center d-flex align-items-center">
    <div class="col-sm-12 col-lg-8">
      <img src="../../Imagens/imagem_grafico_adm_home.png" class="img-fluid" alt="Responsive image" id="adm-home-img-2">
    </div>
  </div>
</div>
  </main>

</body>

</html>