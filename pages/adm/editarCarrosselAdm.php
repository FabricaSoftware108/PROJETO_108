<?php
include '../../app/db/connection.php';
include '../../app/session/verificacao.php';

$queries = array(
    'SELECT * FROM carroselSoftware',
    'SELECT * FROM carroselJogos',
    'SELECT * FROM carroselCgi',
    'SELECT * FROM carroselAudioVideo',
);
$fabricas = array(
    'Fábrica de Software',
    'Fábrica de Jogos',
    'Fábrica de Cgi',
    'Fábrica de Audio e Video',

);

if(isset($_GET["selectCarrossel"])){
    $_SESSION["selectCarrossel"] = $queries[(int)$_GET["selectCarrossel"]];
    $result = mysqli_query($connection, $_SESSION["selectCarrossel"]);
   
}

if(isset($_GET["carrosselID"])){
    $resultCarrossel = mysqli_query($connection, $_SESSION["selectCarrossel"]." WHERE id = ".$_GET['carrosselID']);
    $rowCarrossel = mysqli_fetch_array($resultCarrossel);
    
}

if(isset($_SESSION["alertCarrossel"])){
    echo "<script>alert('".$_SESSION["alertCarrossel"]."')</script>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carrossel ADM</title>
    <link rel="icon" href="../../Imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                <a class="navbar-brand me-auto fs-2 fw-bold" id="titulo-cabecalho-adm" href="./admHome.php">Área de Administração Hub Fábricas</a>
                <a class="navbar-brand md-auto fs-6" id="nome-cabecalho-adm" href="#"><?php echo $_SESSION['nome'] ?></a>
                <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header ">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><?php echo $_SESSION['nome'] ?></h5>
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
                                    <li><a class="dropdown-item" href="./editarAdm.php">Lista de Administradores</a></li>
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
    </header>
    <main class="main-editarCarrossel">
        <form action="../../app/session/updateCarrossel.php?carrosselIndex=<?php if(isset($_GET['selectCarrossel'])){echo (int)$_GET['selectCarrossel']; }?>&carrosselID=<?php if(isset($_GET['carrosselID'])){echo $rowCarrossel['id'];} ?>" method="post" id="carrosselForm" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center p-0" id="background-EditarCarrossel">
                    <div class="container-wrapper-carrossel justify-content-center align-items-center d-flex">
                        <div class="col-md-12 wrapper-background-all-EditarCarrossel">
                            <div class="col-12 text-center title-editarCarrossel">
                                <h1>Editar Fábrica</h1>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-6 col-12 text-center align-items-md-center justify-content-center m-auto foto-editarCarrossel ">
                                    <div class="input-group d-block justify-content-center p-6">
                                        <div class="d-flex justify-content-center align-items-center pb-2">
                                            <select id="selectFabricas" class="form-select form-select-lg w-100" aria-label="Large select example" onchange="location.href = './editarCarrosselAdm.php?selectCarrossel='+this.value">
                                                
                                                <option class="form-control" value="" selected disabled>Selecione a fábrica</option>
                                                <option value="0" id="fabricaOption">Fábrica de Software</option>
                                                <option value="1" id="fabricaOption">Fábrica de Jogos</option>
                                                <option value="2" id="fabricaOption">Fábrica de Cgi</option>
                                                <option value="3" id="fabricaOption">Fábrica de Audio e Video</option>                                                
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center pb-2">
                                            
                                            <div class="form-floating mb-3 w-100 dropdown" >
                                                <input type="text" class="form-control dropdown-toggle" placeholder="Fábricas" id="fabricasFilter" type="button" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="FALSE" <?php if( !isset($_SESSION["selectCarrossel"]) ){echo "disabled";} ?> value="<?php if(isset($_GET['carrosselID'])){ echo $rowCarrossel["titulo"]; }?>">
                                                <label for="floatingInput">Fábricas</label>
                
                                                    <ul class="dropdown-menu w-100 dropdownFabricas">
                                                        <?php 
                                                        if(isset($_GET["selectCarrossel"])){

                                                            while($row = mysqli_fetch_array($result)){?>
                            
                                                            <li class="fabricaCarrossel" id="<?php echo strtolower($row["titulo"]) ?>"><a class="dropdown-item" href="./editarCarrosselAdm.php?selectCarrossel=<?php echo (int)$_GET["selectCarrossel"] ?>&carrosselID=<?php echo $row["id"] ?>"><?php echo $row["titulo"]?></a></li>
                                                        <?php } }?>
                                                    </ul>
                                             
                                            </div>                                            
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center pb-2">
                                            
                                        </div>
                                        <div class="content-image-describe pt-2">
                                            <h2>Foto da turma</h2>
                                            <label for="inputGroupFile04" id="imgEditarCarrossel">
                                                <img <?php if(isset($_GET['carrosselID'])){ echo "src='".$rowCarrossel["img"]."'"; }?>  id="carrosselImg" style="width: 400px; height: 400px; object-fit: cover;" class="img-fluid">
                                            </label>
                                            <input type="file" class="form-control" name="uploadCarrosselImage" style="display: none;" id="inputGroupFile04" aria-describedby="inputGroupFileEditaron04" aria-label="Upload" autocomplete="FALSE" >
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-12 text-center container-inputs-editarCarrossel">
                                    <div class="container-fabrica-nome-editarCarrossel">
                                        <h3>Nome da fábrica</h3>
                                        <textarea class="form-control" id="campoTextoDescricaoCarrossel" name="carrosselTitle" size="10" style="resize: none;" rows="1"><?php if(isset($_GET['carrosselID'])){ echo $rowCarrossel["titulo"]; }?></textarea>
                                    </div>
                                    <div class="container-fabrica-nome-editarCarrossel">
                                        <h3>Nome do projeto</h3>
                                        <textarea class="form-control" id="campoTextoDescricaoCarrossel" name="projeto" size="10" style="resize: none;" rows="1"><?php if(isset($_GET['carrosselID'])){ echo $rowCarrossel["projeto"]; }?></textarea>
                                    </div>
                                    <div class="container-fabrica-nome-editarCarrossel">
                                        <h3>Texto sobre a turma</h3>
                                        <textarea class="form-control" id="campoTextoDescricaoCarrossel" name="descricao" size="200" style="resize: none;" rows="14"><?php if(isset($_GET['carrosselID'])){ echo $rowCarrossel["descricao"]; }?></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <a type="button" class="btn btn-danger deleteCarrossel <?php if(!isset($_GET['selectCarrossel']) || !isset($_GET['carrosselID'])){ echo "disabled"; }?>" id="btnInputCarrossel" href="" onclick="deleteEditalConfirm()" >Deletar</a>

                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <button type="submit" class="btn btn-primary <?php if(!isset($_GET['selectCarrossel']) || !isset($_GET['carrosselID'])){ echo "disabled"; }?>" id="btnInputCarrossel" onclick="updateCarrossel()">Salvar</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        <script src="../../js/carrosselFilter.js"></script>
        <script>

            // function changeImg(img){
            //     document.querySelector("#carrosselImg").src = img.value
            // }
            document.getElementById("selectFabricas").value = "<?php echo (int)$_GET["selectCarrossel"]?>";
        
            // function updateCarrossel(){
            //     document.querySelector('#carrosselForm').action = "../../app/session/updateCarrossel.php?carrosselIndex=<?php if(isset($_GET['carrosselID'])){echo (int)$_GET['selectCarrossel']; }?>&carrosselID=<?php if(isset($_GET['carrosselID'])){echo $rowCarrossel['id'];} ?>";
            // }

            function deleteEditalConfirm(){
                if(confirm("Deseja deletetar esse edital?")){

                    document.querySelector(".deleteCarrossel").href = '../../app/session/deleteCarrossel.php?carrosselIndex=<?php if(isset($_GET['carrosselID'])){echo (int)$_GET['selectCarrossel']; }?>&carrosselID=<?php if(isset($_GET['carrosselID'])){echo $rowCarrossel['id'];} ?>'
                }
                // location.href = './editarCarrosselAdm.php?selectCarrossel='+select.value
            }
        </script>
    </main>

    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
</body>

</html>

<?php 
    unset($_SESSION["alertCarrossel"]);
    unset($_SESSION["selectCarrossel"]);
?>