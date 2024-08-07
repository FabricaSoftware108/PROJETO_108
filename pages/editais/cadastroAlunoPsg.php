<?php
include '../../app/session/verificacaoPsg.php';
?>


<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro Aluno PSG</title>
    <link rel="icon" href="../../Imagens/favicon.png" type="image/x-icon">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="../../js/validacao-cpf-pagCadastroAlunoPsg.js"></script>
    <script src="../../js/cep-pagAlunoPsg.js"></script>
    <script src="../../js/mascaranomes.js"></script>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="../../js/dropdownfabricas.js" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

    <script>
        function validarPost() {
            if (grecaptcha.getResponse() != '') return true;
            alert('Selecione o checkbox de não sou um robô!')
            return false;
        }
    </script>
    
</head>

<body>
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
                            <a class="nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                                Fábricas
                            </a>

                            <ul class="dropdown-menu border-0 shadow-sm mt-1" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="../fabricas/pagFabricaSoftware.php">Fábrica de
                                        Software</a></li>
                                <li><a class="dropdown-item" href="../fabricas/pagFabricaJogos.php">Fábrica de
                                        Jogos</a></li>
                                <li><a class="dropdown-item" href="../fabricas/pagFabricaCgi.php">Fábrica de Computação
                                        Gráfica</a></li>
                                <li><a class="dropdown-item" href="../fabricas/pagFabricaAudioVisual.php">Fábrica de
                                        Áudio e Vídeo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active ms-2 me-2" aria-current="page" href="./pagEdital.php">Vagas Gratuitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active ms-2 me-2" aria-current="page" href="./pagDemanda.html">Demanda de Projeto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active ms-2 me-2" aria-current="page" href="./cadastroVagasEmprego.html">Cadastro de Vagas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active ms-2 me-2" aria-current="page" href="./pagBancoTalentos.html">Talentos das Fábricas</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active back me-5 loginADM" aria-current="page" href="../adm/loginAdm.php">Login ADM</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="body-aluno-psg">
        <div class="effects"></div>
        <div class="effects-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-12" id="textSobreCadastroAlunoPsg">
                    <h1>Cadastro Aluno</h1><br><br>
                    <!-- <p>O Programa SENAC de Gratuidade é uma política de incentivo única que busca
                        oferecer uma educação profissional inclusiva com instrutores especializados e gratuita.
                    </p> -->
                </div>
            </div>
            <div class="row" id="quadradoRoxo-cadastroaluno">
                <form class="col-12" id="camposPreenchimentoCadastroAlunoPsg" method="post" action="../../app/session/conexaoCadastroAlunoPsg.php" onsubmit="return validarPost()">
                    <h1>Informações Pessoais</h1><br>
                    <input class="input-completo-cadastro-aluno-psg col-xs-6 col-lg-10" type="text" name="nome" id="nome" size="27" maxlength="100" placeholder="Nome Completo" required>
                    <div class="col-xs-12 col-sm-auto col-md-auto col-lg-12">
                        <input class="cadastro-aluno-psg col-xs-6 col-lg-5" type="text" name="cpf" id="cpf" size="27" maxlength="14" placeholder="CPF" onblur='validarcpf()' required>
                        <input class="cadastro-aluno-psg col-md-5 col-11 col-sm-12" name="data_nascimento_psg" id="data_nascimento_psg" placeholder="Data de Nascimento" type='text' onfocus="this.type = 'date'" onblur="if(!this.value) this.type='text'" max="9999-12-31" required><br>
                        <input class="cadastro-aluno-psg col-xs-6 col-lg-5" type="text" name="telefone" id="telefone" size="27" maxlength="15" placeholder="Telefone" required>
                        <input class="cadastro-aluno-psg col-xs-6 col-lg-5" type="email" name="email" id="email" size="27" maxlength="80" placeholder="E-mail" required><br>
                        <input class="cadastro-aluno-psg col-xs-6 col-lg-5" type="text" name="nomePai" id="nomePai" size="27" maxlength="80" placeholder="Nome do Pai">
                        <input class="cadastro-aluno-psg col-xs-6 col-lg-5" type="text" name="nomeMae" id="nomeMae" size="27" maxlength="80" placeholder="Nome da Mãe" required><br>
                    </div>
                    <h1 id="camposPreenchimentoCadastroAlunoPsg">Endereço</h1><br>
                    <input class="cadastro-aluno-psg col-xs-6 col-lg-5" type="text" name="cep" id="cep" size="27" maxlength="9" placeholder="CEP" required>
                    <input class="cadastro-aluno-psg col-xs-6 col-lg-5 col-11" type="number" name="numero" id="numero" size="27" maxlength="4" placeholder="Número" required><br>


                    <div class="col-12">
                        <input class="input-completo-cadastro-aluno-psg col-xs-6 col-lg-10" type="text" name="rua" id="rua" size="27" maxlength="100" placeholder="Rua" required>

                        <input class="cadastro-aluno-psg col-xs-6 col-lg-5" type="text" name="bairro" id="bairro" size="27" maxlength="80" placeholder="Bairro" required>
                        <input class="cadastro-aluno-psg col-xs-6 col-lg-5" type="text" name="complemento" id="complemento" size="27" maxlength="100" placeholder="Complemento"><br>
                    </div>

                    <div class="check-consentimento-dados">
                        <input type="checkbox" id="horns" name="horns" required>
                        <label for="horns">Ao preencher este formulário, você permite que seus dados pessoais sejam processados em nossas plataformas educacionais.</label>
                    </div>

                    <!--essa div é do RECAPTCHA, NÃO MUDAR OU MECHER NELA EM HIPÓTESE ALGUMA!.-->
                    <div class="g-recaptcha pagDemanda-recaptcha" data-sitekey="6Lc5Fg0qAAAAAH3wCJ8JvFdm1FcLBiEofK3vSiqY"></div>

                    <div class="button-enviar-vagas">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
            </div>
            </form>

        </div>

        </div>
    </main>
    <script src="../../js/mascara-aluno.js"></script>
    <div class="container-fluid rodape-preto py-1">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top container align-items-center">
            <a href="../../index.html" class="col-md-4 d-flex order-lg-2 order-sm-1 align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="../../Imagens/logo_senac-hub_sistema-comercio_RGB_vertical_negativo-preto.png" alt="" class="img-fluid">
            </a>
            <p class="col-md-4 mb-0 text-muted justify-content-center order-lg-1 order-sm-3 copText"  style="cursor: pointer;" onclick="location.href='../developers/developers.html'"><u>© 2024 Fábrica de
                Software 108</u></p>

            <ul class="nav justify-content-center col col-md-4 order-sm-3 order-lg-3">
                <li class="nav-item"><a href="https://www.instagram.com/senachubacademy/" target="_blank" class="nav-link px-2 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg></a>
                </li>
                <li class="nav-item"><a href="https://api.whatsapp.com/send?phone=556799492638" target="_blank" class="nav-link px-2 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg></a>
                </li>
            </ul>
        </footer>

    </div>
    <script src="../../js/cep-pagAlunoPsg.js"></script>
</body>

</html>