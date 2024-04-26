<?php include "../../app/session/fabricas/conexaoCarrosselAudioVisual.php"?>

<!DOCTYPE html>
<html lang="pt-br" class="htmlFabricaAudiovisual">
<head class="headFabricaAudiovisual">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fábrica de Áudio e Vídeo</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="../../js/dropdownfabricas.js" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body class="bodyFabricaAudiovisual">
  <!-- Header -->
  <header class="cabecalhoGeral border shadow-sm">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="../../index.html"><img src="../../Imagens/logoHubFabricas.svg" alt="" id="hubFabricasLogo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active ms-2 me-2" aria-current="page" href="../../index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown drop-fabrica">
                        <a class="nav-link active dropdown-toggle" 
                            href="#"
                            role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" 
                            aria-expanded="false"
                            aria-current="page"> 
                            Fábricas 
                        </a>  
                
                        <ul class="dropdown-menu border-0 shadow-sm mt-1" 
                            aria-labelledby="dropdownMenuLink"> 
                            <li><a class="dropdown-item" href="./pagFabricaSoftware.php">Fábrica de Software</a></li> 
                            <li><a class="dropdown-item" href="./pagFabricaJogos.php">Fábrica de Jogos</a></li> 
                            <li><a class="dropdown-item" href="./pagFabricaCgi.php">Fábrica de Computação Gráfica</a></li> 
                            <li><a class="dropdown-item" href="./pagFabricaAudioVisual.php">Fábrica de Áudio e Vídeo</a></li> 
                        </ul> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-2 me-2" aria-current="page" href="../editais/pagEdital.php">Edital</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-2 me-2" aria-current="page" href="../editais/pagDemanda.html">Demanda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-2 me-2" aria-current="page" href="../editais/cadastroVagasEmprego.html">Cadastro de Vagas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-2 me-2" aria-current="page" href="../editais/pagBancoTalentos.html">Banco de Talentos</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active back me-5 loginADM" aria-current="page" href="../adm/loginAdm.html">Login ADM</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
  </header>

    <!-- Main -->
    <main class="main-fabrica-de-audiovisual border-0 bg-light">

        <!-- Primeira parte Fábrica de Audiovisual -->
        <div class="verde-introdu-audiovisual border-0">
          <div class="branco-introdu-audiovisual border-0 bg-light rounded-start-pill py-5">
            <div class="container conteudo-introdu-software d-flex justify-content-center align-items-center py-5">
              <img src="../../Imagens/img_pause.png" id="audioVisualImg">
              <img src="../../Imagens/img_play.png" id="audioVisualImg">
              <img src="../../Imagens/img_play.png" id="audioVisualImg">
              <img src="../../Imagens/img_stop.png" id="audioVisualImg">
                    <div class="container py-5">
                      <div class="row py-5">
                        <h1 class="text-center pt-5">Fábrica de Áudio e Vídeo</h1>
                      </div>
                      <div class="row">
                        <p class="col-12">A Fábrica de Audiovisual é um projeto que visa a concepção e entrega de produtos de audiovisuais realizada pelos alunos que colocam em prática os conhecimentos e competências desenvolvidas ao longo do curso.
                        O projeto é desenhado por meio de um atendimento corporativo atendendo uma demanda de mercado, seja de um parceiro Senac ou até mesmo da própria Instituição.
                        Seu objetivo é proporcionar ao time de alunos uma experiência prática e imersiva na criação de conteúdo de alta qualidade, com produção e edição de produtos audiovisuais. Essa abordagem permite que os alunos vivenciem todo as etapas de desenvolvimento de projetos audiovisuais, preparando-os para os desafios do mercado de trabalho.
                        No desenvolvimento do projeto, eles têm a oportunidade de trabalhar com equipamentos profissionais, software de edição e produção, e aprender com profissionais do mercado. Dessa forma, a Fábrica Audiovisual prepara uma nova geração de talentos para atuar no mercado de produção de conteúdo audiovisual, promovendo a inovação, criatividade e excelência na entrega.</p>
                      </div>
                      <div class="row d-lg-flex justify-content-center py-5">
                        <a class="btn text-light rounded-pill w-25 "
                                                type="button" href="../editais/pagEdital.php">Editais</a>
                      </div>
                    </div>
                </div>


            </div>
        </div>


        <!-- Segunda parte Fábrica de Audiovisual (Carrossel)-->
        <div class="lightEffectGames"></div>
        <div class="branco-projetos-audiovisual bg-light">
          <div class="verde-projetos-audiovisual py-5">
              <div class="container-fluid">
                <div class="container col-12">
                  <div class="row">
                    <h1 class="col-12 text-center text-light py-5">Projetos</h1>
                  </div>
                  <div class="row text-light pb-5">
                    <p class="col-12" style="text-align: justify;">A Fábrica de Áudio e Vídeo é um projeto que simula o ambiente de uma empresa de desenvolvimento de audio visual, criando soluções tecnológicas para micro e pequenas empresas e instituições parceiras, preparando mão de obra especializada para o mercado de trabalho ao longo da execução do curso Técnico em Desenvolvimento de Áudio e Vídeo.</p>
                  </div>
                </div>
              </div>
              
              <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                <?php
                    $c = 0;
                    $state = "";
                    while ($retorno = mysqli_fetch_array($result)){
                      if($c == 0){$state = "active";}else{$state = "";};
                  ?>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo ("$c")?>" class="<?php echo ("$state")?>" ></button>
                  <?php 
                    $c++;}
                    mysqli_data_seek($result, 0);
                  ?>                  
                </div>
                <div class="carousel-inner">
                  <?php
                      $c = 0;
                      $state = "";
                      while ($retorno = mysqli_fetch_array($result)){
                        if($c == 0){$state = "active";}else{$state = "";};
                        ?>
                  <div class="carousel-item <?php echo $state ?> my-5">
                    <div class="d-flex justify-content-center">                                   
                      <div class="text-light text-center" data-bs-toggle="modal" data-bs-target="<?php echo ("#$c")?>" style="cursor: pointer;">
                        <img src="<?php echo $retorno["img"];?>" class="d-block img-fluid" alt="..." id="carouselImg">
                        <div class="carousel-text d-block position-absolute bottom-0 start-50 translate-middle-x py-2 px-5 shadow-lg">

                          <h5 class="text-center"><?php echo $retorno["titulo"];?></h5>
                          <p class="text-center"><?php echo $retorno["projeto"];?></p>
                        </div>
                      </div>
                      <div class="modal fade" id="<?php echo ("$c")?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $retorno["titulo"];?></h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="container">
                                <div class="row">

                                  <img src="<?php echo $retorno["img"];?>" alt="" class="" id="modalImg">
                                </div>
                                <p><?php echo $retorno["descricao"];?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php $c++; }?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
                
            </div>
                
        </div>

        <!-- Terceira parte Fábrica de Audiovisual (Requisitos)-->
        <div class="verde-requisitos-audiovisual border-0">
            <div class="container-fluid branco-requisitos-audiovisual bg-light d-flex justify-content-center align-items-center py-5">  
                    <div class="container py-5">
                      <div class="row py-5">
                        <h1 class="text-center">Requisitos</h1>
                      </div>
                      <div class="row">
                        <p class="col-12">Pessoas interessadas em atuar como Técnico em Produção de Áudio e Vídeo, que tenham no
                          mínimo 17 anos completos e tenham concluído o Ensino Médio ou estejam cursando no mínimo o
                          3º ano do Ensino Médio. Devem ser atendidos os seguintes critérios:</p>
                      </div>
                      <div class="row d-lg-flex d-sm-block justify-content-center py-5">
                        <div class="col">
                          <h2>Idade mínima:</h2>
                          <ul><li><p>16 anos</p></li></ul>
                        </div>
                        <div class="col">
                          <h2>Conhecimentos necessários:</h2>
                          <ul>
                            <li><p>Comprovar conclusão do Ensino Médio ou estar cursando o 3º ano do Ensino Médio ou 2ª fase
                              da EJA;</p></li>
                            <li><p>Possuir conhecimentos de informática básica;</p></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quarta parte Fábrica de audiovisual (Grade)-->
        <div class="body-da-grade-audiovisual">
            <div class="grade-container-audiovisual">
              <div class="body-da-grade-audiovisual py-5">
                <div class="grade-container-audiovisual py-5">
                <br>
                <h1 class="titulo-grade-audiovisual" style="color: white;">Grade Curricular</h1>
        <br>
        <br>
            <div class="primeira-grade-audiovisual">
            <p class="d-inline-flex gap-1">
                <button class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample1-audiovisual" role="button" aria-expanded="false" aria-controls="collapseExample" id="botao-grade-audiovisual">
                  Oferta 1 - Técnico em Desenvolvimento de Áudio e Vídeo ▼
                </button>
              </p>
              <div class="collapse" id="collapseExample1-audiovisual">
                <div class="card card-body">
                    <table class="table-grade-audiovisual">
                        <tr>
                            <th class="th-grade-audiovisual">Unidade Curricular</th>
                            <th class="th-grade-audiovisual">Carga Horária</th>
                        </tr>
                        <tr>
                            <td class="td-class-1-audiovisual">UC 1 - Introdução a Programação</td>
                            <td class="td-class-1-audiovisual">100 Horas</td>
                        </tr>
                        <tr>
                            <td class="td-class-2-audiovisual">UC 2 - Analisar requisitos e funcionalidades da aplicação</td>
                            <td class="td-class-2-audiovisual">100 Horas</td>
                        </tr>
                        <tr>
                            <td class="td-class-1-audiovisual">UC 3 - Analisar requisitos e funcionalidades da aplicação</td>
                            <td class="td-class-1-audiovisual">100 Horas</td>
                        </tr>
                        <tr>
                            <td class="td-class-2-audiovisual">UC 4 - Analisar requisitos e funcionalidades da aplicação</td>
                            <td class="td-class-2-audiovisual">100 Horas</td>
                        </tr>
                    </table>
                </div>
              </div>
            </div>
        
        <br>
        
            <div class="segunda-grade-audiovisual">
                <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2-audiovisual" aria-expanded="false" aria-controls="collapseExample" id="botao-grade-audiovisual">
                    Oferta 2 - Técnico em Desenvolvimento de Áudio e Vídeo ▼
                  </button>
                </p>
                <div class="collapse" id="collapseExample2-audiovisual">
                  <div class="card card-body">
                    <table class="table-grade-audiovisual">
                        <tr class="tr-grade-audiovisual">
                            <th class="th-grade-audiovisual">Unidade Curricular</th>
                            <th class="th-grade-audiovisual">Carga Horária</th>
                        </tr>
                        <tr>
                            <td class="td-class-1-audiovisual">UC 1 - Introdução a Programação</td>
                            <td class="td-class-1-audiovisual">100 Horas</td>
                        </tr>
                        <tr>
                            <td class="td-class-2-audiovisual">UC 2 - Analisar requisitos e funcionalidades da aplicação</td>
                            <td class="td-class-2-audiovisual">100 Horas</td>
                        </tr>
                        <tr>
                            <td class="td-class-1-audiovisual">UC 3 - Analisar requisitos e funcionalidades da aplicação</td>
                            <td class="td-class-1-audiovisual">100 Horas</td>
                        </tr>
                        <tr>
                            <td class="td-class-2-audiovisual">UC 4 - Analisar requisitos e funcionalidades da aplicação</td>
                            <td class="td-class-2-audiovisual">100 Horas</td>
                        </tr>
                    </table>
                  </div>
                </div>
        
            </div>
        <br>
            <div class="terceira-grade-audiovisual">
                <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3-audiovisual" aria-expanded="false" aria-controls="collapseExample" id="botao-grade-audiovisual">
                    Oferta 3 - Técnico em Desenvolvimento de Áudio e Vídeo ▼
                  </button>
                </p>
                <div class="collapse" id="collapseExample3-audiovisual">
                  <div class="card card-body">
                    <table class="table-grade-audiovisual">
                        <tr class="tabel-tr-audiovisual">
                            <th class="th-grade-audiovisual">Unidade Curricular</th>
                            <th clas="th-grade-audiovisual">Carga Horária</th>
                        </tr>
                        <tr>
                            <td class="td-class-1-audiovisual">UC 1 - Introdução a Programação</td>
                            <td class="td-class-1-audiovisual">100 Horas</td>
                        </tr>
                        <tr>
                            <td class="td-class-2-audiovisual">UC 2 - Analisar requisitos e funcionalidades da aplicação</td>
                            <td class="td-class-2-audiovisual">100 Horas</td>
                        </tr>
                        <tr>
                            <td class="td-class-1-audiovisual">UC 3 - Analisar requisitos e funcionalidades da aplicação</td>
                            <td class="td-class-1-audiovisual">100 Horas</td>
                        </tr>
                        <tr>
                            <td class="td-class-2-audiovisual">UC 4 - Analisar requisitos e funcionalidades da aplicação</td>
                            <td class="td-class-2-audiovisual">100 Horas</td>
                        </tr>
                    </table>
                  </div>
                </div>
            </div>
        <br>
        </div>
        </div>
        
    </main>


    <!-- Footer -->
    <div class="container-fluid py-1 rodape-branco">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top container align-items-center">
        
        
        
            <a href="../../index.html" class="col-md-4 d-flex order-lg-2 order-sm-1 align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <img src="../../Imagens/logo_senac-hub_sistema-comercio_RGB_vertical_negativo-branco.png" alt="" class="img-fluid">
            </a>
            <p class="col-md-4 mb-0 text-light justify-content-center order-lg-1 order-sm-3 copText">© 2024 Fábrica de Software 108</p>
            
            <ul class="nav justify-content-center col col-md-4 order-sm-3 order-lg-3">
              <li class="nav-item"><a href="https://www.instagram.com/senachubacademy/" target="_blank" class="nav-link px-2 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
              </svg></a>
              </li>
              <li class="nav-item"><a href="https://api.whatsapp.com/send?phone=556799492638" target="_blank" class="nav-link px-2 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                </svg></a>
              </li>
            </ul>
          </footer>
    </div>


</body>
</html>
