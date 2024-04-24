<?php
include '../../app/session/verificacao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carrossel ADM</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="body-adicionar-carrossel-adm">
  
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
  <main class="main-editarCarrossel ">
<div class="container-fluid ">
<div class="row justify-content-center align-items-center " id="background-EditarCarrossel">
<div class="container-wrapper-carrossel">
  <div class="col-md-12 wrapper-background-all-EditarCarrossel">
    <div class="col-12 text-center title-editarCarrossel">
      <h1>Editar Fábrica</h1>
    </div>
    <div class="row ">
      <div class="col-md-6 col-12 text-center align-items-md-center justify-content-center foto-editarCarrossel">
        <div class="input-group justify-content-center">
          <div class="container-dropdown">
            <div class="dropdown">
              <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Fabrica de Software 108
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Fabrica de Software 108</a></li>
                <li><a class="dropdown-item" href="#">Fabrica de Software 206</a></li>
                <li><a class="dropdown-item" href="#">Fabrica de Software 203</a></li>
                <li><a class="dropdown-item" href="#">Fabrica de Software 102</a></li>
              </ul>
            </div>
          </div>
          <div class="content-image-describe py-5">
            <h2>Foto da turma</h2>
            <label for="inputGroupFile04" id="imgEditarCarrossel">
              <img src="../../Imagens/fabrica108.jpg" style=" width: 400px; height: 400px;" class="img-fluid">
            </label>
            <input type="file" class="form-control" style="display: none;" id="inputGroupFile04" aria-describedby="inputGroupFileEditaron04" aria-label="Upload">
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12 text-center container-inputs-editarCarrossel">
        <div class="container-fabrica-nome-editarCarrossel">
          <h3>Nome da fábrica</h3>
          <textarea class="form-control" id="campoTextoDescricaoCarrossel"  size="10" style="resize: none;" rows="1" >Fábrica de Software 108</textarea>
        </div>
        <div class="container-fabrica-nome-editarCarrossel">
          <h3>Nome do projeto</h3>
          <textarea class="form-control" id="campoTextoDescricaoCarrossel"  size="10" style="resize: none;" rows="1" >Hub Fábricas, vulgo, substituto do Senacoin</textarea>
          
        </div>
        <div class="container-fabrica-nome-editarCarrossel">
          <h3>Texto sobre a turma</h3>
          <textarea class="form-control" id="campoTextoDescricaoCarrossel"  size="200" style="resize: none;" rows="14" >
Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores similique consectetur sunt dolore officia recusandae quis impedit magni accusamus. Rerum dolor nam perspiciatis, tempore pariatur ad iste. Totam, facilis! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi itaque impedit similique iste laudantium animi mollitia facilis pariatur velit architecto voluptatem aliquid tenetur rem magnam tempore debitis, delectus eos! In! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores similique consectetur sunt dolore officia recusandae quis impedit magni accusamus. Rerum dolor nam perspiciatis, tempore pariatur ad iste. Totam, facilis! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi itaque impedit similique iste laudantium animi mollitia facilis pariatur velit architecto voluptatem aliquid tenetur rem magnam tempore debitis, delectus eos! In! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores similique consectetur sunt dolore officia recusandae quis impedit magni accusamus. Rerum dolor nam perspiciatis, tempore pariatur ad iste. Totam, facilis! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi itaque impedit similique iste laudantium animi mollitia facilis pariatur velit architecto voluptatem aliquid tenetur rem magnam temporedebitis, delectus eos! In
          </textarea>
        </div>
        <button class="btn btn-primary" id="btnInputCarrossel">Salvar</button>
      </div>
    </div>
    </div>
</div>
</div>
</div>
</main>

</body>
    


</body>
</html>

