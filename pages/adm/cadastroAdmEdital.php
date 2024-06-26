<?php
include '../../app/session/verificacao.php';
include '../../app/db/connection.php';

if(isset($_SESSION['editEdital'])){
    $query = "SELECT * FROM editais WHERE codigo = '".$_SESSION['editEdital']."'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
}

if($_SESSION['editalAlert']){
    echo("<script>alert('{$_SESSION['editalAlert']}')</script>");
}

?>
<!-- CABEÇALHO E MENU SANDUICHE DO ADM -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">

    <!--Links para funcionar o BootStap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Cadastro Editais ADM</title>
    <link rel="icon" href="../../Imagens/favicon.png" type="image/x-icon">
</head>
<body class="body-cadastro-adm-edital">

    <!--Menu de Navegação-->
    <!-- <header> 
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
    </header> -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <main class="cadastro-adm-editais">
                <div class="cadastro-adm-edital-centered">
                    <div class="cadastro-adm-edital-container">
                        <div class="col-xs-12 col-sm-auto col-md-auto col-lg-12">
                            <div class="cadastro-adm-edital-container-title">
                                <h1><?php if(isset($_SESSION['editEdital'])){echo 'Edição';}else{echo 'Cadastro';}?> de Edital</h1>
                            </div>
                            
                            <div class="container">
                                <div class="row">
                                    <div class="col-12" id="tituloCadastroEdital">
                                        
                                    <form action="<?php if(isset($_SESSION['editEdital'])){echo '../../app/session/actionEditEdital.php';}else{echo '../../app/session/uploadEdital.php';}?>" method="post" enctype="multipart/form-data">
                                        <div class="cadastro-adm-edital-input-container ">
                                            <label for="cadastro-adm-edital-nome" class="cadastro-adm-edital-label">Nome do Edital</label>
                                            <input type="text" name="editalName" size="60" id="cadastroAdmEditalInput" class="form-control cadastro-adm-edital-input" required value="<?php if(isset($_SESSION['editEdital'])){echo ($row['nome']);} ?>">
                                        </div>
                                        <div class="cadastro-adm-edital-input-container">
                                            <label for="cadastro-adm-edital-email" class="cadastro-adm-edital-label">Código Do Edital</label>
                                            <input type="text" name="editalCode" size="10" maxlength="11" id="cadastroAdmEditalInput" class="form-control cadastro-adm-edital-input" required value="<?php if(isset($_SESSION['editEdital'])){echo ($row['codigo']);} ?>">
                                        </div>

                                        <div class="cadastro-adm-edital-input-container">
                                            <label for="cadastro-adm-edital-limite-aluno" class="cadastro-adm-edital-label">Limite de Alunos</label>
                                            <input type="number" name="editalLimit" size="10"  id="cadastroAdmEditalInput" class="form-control cadastro-adm-edital-input" required value="<?php if(isset($_SESSION['editEdital'])){echo ($row['quantidadeAlunos']);} ?>">
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <label for="cadastro-adm-edital-data" id="centerDateInicio" class="cadastro-adm-edital-label-data">Data Ínicial</label>
                                                    
                                                    <input value="<?php if(isset($_SESSION['editEdital'])){echo ($row['dataInicio']);}else{ echo date('Y-m-d'); }  ?>" type="date" class="form-control" id="cadastroAdmEditalDataInicial"
                                                    max = "9999-12-31" name="editalInicialDate" required >
                                                </div>
                                                <div class="col-md-6 mt-2 mt-md-0">

                                                    <label for="cadastro-adm-edital-data"  id="centerDateFinal"class="cadastro-adm-edital-label-data">Data Final</label>
                                                    <input type="date" class="form-control" id="cadastroAdmEditalDataFinal"
                                                    max = "9999-12-31" name="editalFinalDate" required value="<?php if(isset($_SESSION['editEdital'])){echo ($row['dataFim']);} ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row d-flex align-items-center justify-content-center ">
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
                                                    <p style="padding-top: 15px;" class="ms-2 ">Arquivo pdf ou docx</p>
                                                    <input type="file" name="editalPDF" id="file-input" class="file-input" title="Arquivo pdf ou docx" required value="<?php if(isset($_SESSION['editEdital'])){echo ($row['arquivo']);} ?>">
                                                    
                                                </label>
                                            </div>
                                        </div>
                                        <div class="button-cadastrar-edital-adm">
                                            <button type="submit" class="btn btn-primary"><?php if(isset($_SESSION['editEdital'])){echo 'Salvar';}else{echo 'Cadastrar';}?></button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                <div class="col-6">
                                    <div class="imagem-cadastroEditalADM">
                                        <img src="../../Imagens/img_cadastroEdital_adm.png" width="150" height="400">
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
                                <form action="" method="post" id="editalForm">
                                    <div class="cadastro-adm-edital-centered">
                                        <div class="cadastro-adm-edital-container">
                                            <div class="col-12" >
                                                <div class="cadastro-adm-edital-container-title">
                                                    <h1>Editais</h1>
                                                </div>
                                                <div class="container mt-1">
                                                    <input type="text" size="34" maxlength="11" id="cadastroAdmEditalInputEdital" class="form-control cadastro-adm-edital-input mt-3 shadow-none" placeholder="Digite o nome do edital que procura.">
                                                </div>
                                                
                                                    <div class="col-md-12 mt-3">
                                                        <div class="container mb-3">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="button-apagar-edital">
                                                                        <button type="buttom" class="btn btn-danger disabled" id="deleteButtom" onclick="changeToDelete()">Apagar</button>
                                                                    </div>
                                                                </div>
                                                                    
                                                                <div class="col-md-6 mt-2 mt-md-0">
                                                                    <div class="button-editar-edital">
                                                                        <button type="buttom" class="btn btn-primary disabled" id="editButtom" onclick="changeToEdit()">Editar</button>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="container overflow-x-auto">
                                                <div class="row">
                                                    <div class="quadro-cinza-adm-edital">
                                                        <div class="quadro-branco-adm-edital mt-3" >
                                                        <?php
                                                            $query = 'SELECT * FROM editais ORDER BY dataFim DESC';
                                                            $result = mysqli_query($connection, $query);

                                                            while($row = mysqli_fetch_array($result)){
                                                                $today = date("Y-m-d");
                                                                if($today >= $row["dataFim"] || $row["quantidadeAlunos"] == $row["alunosCadastrados"]){
                                                                    $dateColor = "bg-danger";
                                                                }
                                                                else{
                                                                    $dateColor = "bg-success";
                                                                }
                                                                ?>
                                                                <div class="mx-2 my-2 w-100">
                                                                    <button class="btn w-100 btn-light editalAdm d-flex justify-content-between align-items-center" id=" <?php echo "{$row['codigo']}"?> <?php echo $row["nome"] ?>" type="button" name="editalCode" value="<?php echo $row["codigo"] ?>" onclick="anableToEdit(this)">
                                                                        <div class="<?php echo $dateColor ?> me-4 rounded" style="width: 20px; height:20px;"></div>
                                                                        <p class="w-100 text-start h-100 d-flex justify-content-start align-items-center">Processo Seletivo <?php echo $row["codigo"] ?> - <?php echo $row["nome"] ?></p>
                                                                    </button>
                                                                </div>
                                                        <?php } ?>
                                                            
                
                                                                
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <script src="../../js/editalAdmFilter.js"></script>
    <script>
        var editalCode;
        function changeToDelete(){
            document.getElementById("editalForm").action = "../../app/session/deleteEdital.php?editalCode="+editalCode;
        }
        function changeToEdit(){
            document.getElementById("editalForm").action = "../../app/session/editEdital.php?editalCode="+editalCode;
        }
        function anableToEdit(edital){
            document.querySelector("#deleteButtom").classList.remove('disabled')
            document.querySelector("#editButtom").classList.remove('disabled')
            for(var i = 0; i < document.querySelectorAll(".editalAdm").length; i++){
                document.querySelectorAll(".editalAdm")[i].classList.remove('bg-primary');
                document.querySelectorAll(".editalAdm")[i].classList.remove('text-light');

            }
            edital.classList.add("bg-primary");
            edital.classList.add("text-light");
            editalCode = edital.value; 
        }
    </script>
                                                        
</body>
</html>
<?php $_SESSION['editalAlert'] = null; unset($_SESSION['editEdital']);?>