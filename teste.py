
from playwright.sync_api import sync_playwright


def test_form():
    with sync_playwright() as p:
        browser = p.chromium.launch(headless=False)
        page = browser.new_page()
        
        page.goto('http://10.28.1.194/PROJETO_108-main/index.html') #('http://127.0.0.1:5502/index.html')
        
        page.wait_for_timeout(5000)
        
      
        #PAGINA CADASTRO DE VAGAS esta funcionando tudooo
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/editais/cadastroVagasEmprego.html') #('http://127.0.0.1:5502/pages/editais/cadastroVagasEmprego.html')
        page.wait_for_timeout(5000)

        page.wait_for_selector('input[name="nome_empresa"]')
        page.fill('input[name="nome_empresa"]', 'novoo blau')
        page.wait_for_timeout(1000)
        page.fill('input[name="email"]', 'foiAmem@email.com')
        page.fill('input[name="cnpj"]', '87.170.176/0001-70')
        page.wait_for_timeout(1000)
        page.fill('input[name="cidade"]', 'Campo gente')
        page.fill('input[name="telefone"]', '67 0000-0000')
        page.wait_for_timeout(1000)
        page.select_option('select[name=estado]', value='MS')
        # page.fill('input[name="estado"]', 'bla')
        page.wait_for_timeout(1000)
        page.fill('textarea[name="descricao_vaga"]', 'lorem snjnwjdnsjdsndjs nc dn nfdc fdncbdndbhdnbhjsdnjsdnsjjjjjjjj')
        page.click('.check-consentimento-dados')
        
       
        
        page.wait_for_timeout(3000)
        page.click('.btn.btn-primary')
        print("Clicou no botao de enviar")
        page.wait_for_timeout(1000)


    #PAG EMPRESAS esta funcionando tudo
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/editais/pagDemanda.html') #('http://127.0.0.1:5502/pages/editais/pagDemanda.html')
        page.wait_for_timeout(5000)
        
        page.wait_for_selector('input[name="nome"]')
        page.fill('input[name=nome]', ' Bianca')    
        page.wait_for_timeout(1000)
        page.fill('input[name=email]', 'bianca@gmail.com')
        page.fill('input[name=cpf]', '618.149.190-23')
        page.wait_for_timeout(1000)
        page.fill('input[name=telefone]', '265656') 
        page.fill('input[name=cidade]', 'Amambai')
        page.wait_for_timeout(1000)
        page.select_option('select[name=estado]', value='MT')
        page.fill('textarea[name=descricao]', 'mkfmfkmfksmkmfkmfkfnmdkfdknfkkmnd')
        page.wait_for_timeout(1000)
        page.click('.check-consentimento-dados')
        
        page.wait_for_timeout(3000)
        
        page.click('.btn.btn-primary')
        
        page.wait_for_timeout(3000)
        
        
        
        
       #PAG ALUNO PSG ta funcionandooo
       
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/editais/pagEdital.php') #('http://127.0.0.1:5502/PROJETO_108/pages/editais/pagEdital.php')
        page.wait_for_timeout(5000)
        
        page.click('.btn.btn.bg-light.rounded.d-lg-flex.d-sm-block.justify-content-between.align-items-center.w-100')
        page.wait_for_timeout(2000)
        page.click('.btn.btn-primary')
        page.wait_for_timeout(2000)
        
        page.wait_for_timeout(5000)
        page.wait_for_selector('input[name="nome"]')
        page.fill('input[name=nome]', 'Jack Smith Turner')    
        page.wait_for_timeout(1000)
        page.fill('input[name=cpf]', '618.149.190-23')
        page.fill('input[name=data_nascimento_psg]', '2020-02-02')
        page.wait_for_timeout(1000)
        page.fill('input[name=telefone]', '265656') 
        page.fill('input[name=email]', 'costhelaria@gmail.com')
        page.wait_for_timeout(1000)
        page.fill("input[name=nomeMae]","Olive Smith")
        page.fill('input[name=nomePai]', 'Adam Carsen')
        page.wait_for_timeout(1000)
        page.fill('input[name=cep]', '69911-780')
        page.fill('input[name=numero]', '895')
        page.wait_for_timeout(1000)
        page.fill('input[name=rua]', 'Campo Pequeno')
        page.fill('input[name=bairro]', 'mnjnjnn')
        page.wait_for_timeout(1000)
        page.fill('input[name=complemento]', 'mnjnjnn')
        page.click('.check-consentimento-dados')
        
        page.wait_for_timeout(3000)
        
        page.click('.btn.btn-primary')
        page.wait_for_timeout(2000)
        
        
        #PAGINA BANCO DE TALENTOS, so falta arrumar o input date (ele funciona se mudar o date para text no input no HTML)
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/editais/pagBancoTalentos.html') #('http://127.0.0.1:5502/pages/editais/pagBancoTalentos.html')
        page.wait_for_timeout(5000)
        
        page.wait_for_selector('input[name="nome"]')
        page.fill('input[name=nome]', 'Adam Carsen')    
        page.wait_for_timeout(1000)
        page.fill('input[name=cpf]', '618.149.190-23')
        page.fill('input[name=dataNascimento]','8-56-2023')
        page.wait_for_timeout(1000)
        # page.wait_for_timeout(1000)
        # page.click('.cadastrovagas.col-md-5.col-10.col-sm-12')
        # page.wait_for_timeout(1000)


        # page.wait_for_timeout(3000)
      
        # page.wait_for_timeout(1000)
        page.select_option('select[name=escolaridade]', value='Superior')
        page.fill('input[name=telefone]', '6655454566') 
        page.wait_for_timeout(1000)
        page.fill('input[name=email]', 'adam@gmail.com')
        page.fill("input[name=cep]","79017253")
        page.wait_for_timeout(1000)
        page.fill('input[name=numero]', '543')
        page.fill('input[name=rua]', 'aaa')
        page.wait_for_timeout(1000)
        page.fill('input[name=bairro]', 'aaaaa')
        page.fill('input[name=cidade]', 'aaaaa')
        page.wait_for_timeout(1000)
        
        page.fill('input[name=github]', 'deedeee') 
        page.fill('input[name=linkedin]', 'adam@gmail.com')
        page.wait_for_timeout(1000)
        page.click('.check-consentimento-dados')
        
        # page.wait_for_timeout(2000)
        page.click('.btn.btn-primary')
        page.wait_for_timeout(1000)
        page.select_option('select[name=uf]', value='AL')
        page.wait_for_timeout(3000)
        
        
        
        
        #PARTE ADM
        
        #ESQUECEU SENHA ADM esta funcionandooo
        
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/loginAdm.php')
        page.wait_for_timeout(1000)
        
        page.click('.esqueceuSenha-login-ADM.col-12')
        page.click('.form-control.shadow-sm.p-3')
        page.wait_for_timeout(1000)
        page.fill('input[name="email"]','testeee@gmail.com')
        page.wait_for_timeout(1000)
        page.click('.btn.btn-primary.mt-3.mb-3.col-8.p-2.btn-login-ADM')
        page.wait_for_timeout(1000)
        
        page.click('.bi.bi-arrow-left-circle-fill.mx-2.my-4')
        page.wait_for_timeout(1000)
              
        
        #LOGIN ADM

        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/loginAdm.php')
         # Realiza o login
        # page.click('.nav-link.active.back.me-5.loginADM')
        page.fill('input[name="email"]', 'fabi@gmail.com')
        page.wait_for_timeout(1000)
        page.fill('input[name="senha"]', '321')
        page.wait_for_timeout(1000)
        page.click('.btn.btn-primary.mt-3.mb-3.col-10.p-2.btn-login-ADM')
        page.wait_for_timeout(1000)
        
        
        #aqui esta funcionando tudooo
        page.click('.navbar-toggler') #entra no menu bar adm
        page.wait_for_timeout(1000)
        page.click('.nav-link.dropdown-toggle.fs-5') # vai em administradores
        page.wait_for_timeout(1000)
        page.click('.dropdown-item') #vai em pag adicionar administradores.
        
        #adicionar administradores esta funcionando
        page.fill('input[name="nome"]', 'Adam Carsel')
        page.fill('input[name="email"]', 'Adamcarsel@gamil.com')
        page.wait_for_timeout(1000)
        page.fill('input[name="telefone"]', '675454544')
        page.wait_for_timeout(1000)
        page.click('.btn.btn-primary.cadastro-adm-button')
        
        
        
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/admHome.php')
        page.wait_for_timeout(1000)
        
        page.click('.navbar-toggler') #entra no menu bar adm
        page.wait_for_timeout(1000)
        page.click('.nav-link.dropdown-toggle.fs-5') # vai em administradores
        
        page.wait_for_timeout(2000)
        page.click('.dropdown-menu.dropdown-menu-dark')#aqui ele entra no editar administradores.
        
        page.wait_for_timeout(2000)
        
        # #EDITAR ADM MEXENDO NOS BOTOES DE ATIVAR E DESATIVAR ADM.
        # page.click('.btn.d-flex.justify-content-center.align-items-center')
        # page.wait_for_timeout(1000)
        # # page.click('.cadastro-adm-knob')
        

        # #TEMPO DE EXECUCAO DA PÁGINA.
        page.wait_for_timeout(1000)
        
        #pag editais ta funcionando
        
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/admHome.php')
        page.wait_for_timeout(1000)
        # aqui ele entra no menubar do cabeçalho adm na página home
        page.click('.navbar-toggler')
        page.wait_for_timeout(1000)
        
        
        
        #pag EDITAIS esta funcionandoo
        page.click('a.nav-link.fs-5[href="./cadastroAdmEdital.php"]') # aqui ele vai em editais
        if str(page.title()) == 'Cadastro Editais ADM':
            # elementos = page.query_selector_all('#cadastroAdmEditalInput')
            page.fill(f'input[type="text"]','Edital 567')
            page.fill(f'input[name="editalCode"]','34521')
            page.wait_for_timeout(1000)
            page.fill(f'input[name="editalLimit"]','13')
            # page.click('.form-control.cadastro-adm-edital-input.mt-3 shadow-none')
            page.wait_for_timeout(1000)
            page.click('.form-control.cadastro-adm-edital-input.mt-3.shadow-none')
            page.fill(f'input[type="text"]','2035')
            page.click('.btn.btn-primary')
            page.wait_for_timeout(3000) 
            
            
            
            
        #pag ADICIONAR CARROSSEL ESTA FUNCIONANDOOO   
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/admHome.php')
        page.wait_for_timeout(1000)
        #pag adicionar fabrica eel nao preenche os outros inputs não sei pqq
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/adicionarCarrosselAdm.php')  
        
        page.click('.form-select.form-select-lg.mb-3') #seleciona a fabrica no adicionar carrossel.
        page.wait_for_timeout(1000)
        
        page.fill('input[name="nomedafabrica"]','Fabriciooo345')
        page.wait_for_timeout(1000)
        page.fill('input[name="nomedoprojeto"]',',SenaCoin')
        page.wait_for_timeout(1000)
        page.fill('textarea[name="textodaturma"]','bhdbhdbhbdhdbhsdbvshjbhdbdhjbdshsbd')
        page.wait_for_timeout(1000)
    
        page.click('.btn.btn-primary')
        
        page.wait_for_timeout(3000) 
        
        #editar carrossel esta funcionandooo
        
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/editarCarrosselAdm.php')
        page.wait_for_timeout(1000)
        
        page.click('.select2-selection__rendered')
        page.click('.select2-search__field')
        page.wait_for_timeout(1000)
        page.fill('input[type="search"]', '108')
        page.click('.select2-results__option.select2-results__option--selectable.select2-results__option--highlighted')
        page.wait_for_timeout(1000)
        
        page.click('.container-fabrica-nome-editarCarrossel')
        page.fill('textarea[name="titulo"]','aawaaaa')
        page.wait_for_timeout(1000)
        
        page.click('.container-fabrica-nome-editarCarrossel')
        page.fill('textarea[name="projeto"]','projeto aaaa')
        page.wait_for_timeout(1000)
        
        page.click('.container-fabrica-nome-editarCarrossel')
        page.fill('textarea[name="descricao"]','pmjndjsndjdnjdnjndjndjsndjsdnsjdnsjdnsjdnsjdnsdj')
        page.wait_for_timeout(1000) 
        page.click('.btn.btn-primary')
        page.wait_for_timeout(3000) 
        

  
        #relatorios edital aluno esta funcionadoo
        
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/relatorioAlunoADM.php')
        page.wait_for_timeout(1000)
        
        
        page.click('.form-control.relatorio-aluno-adm-input')
        
        page.fill('input[type="text"]','2036')
        page.wait_for_timeout(1000)
        
        
        
        #relatorio DEMANDA esta funcionandoo
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/relatorioeditaldaempresa.php') #http://10.28.1.194/PROJETO_108-main/pages/adm/relatorioeditaldaempresa.php
        page.wait_for_timeout(1000)
        
        page.click('.btn.btn-primary.relatorio-edital_da_empresa-button_irParaDetalhado')
        page.wait_for_timeout(1000)
        
        page.click('.btn.btn-primary')
        page.wait_for_timeout(3000) 
        
        
        #relatorio TALENTOS DAS FABRICAS esta funcionandoo
        
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/relatoriobancotalento.php') #http://10.28.1.194/PROJETO_108-main/pages/adm/relatorioeditaldaempresa.php
        page.wait_for_timeout(1000)
        
        page.click('.btn.btn-primary.relatorio-banco_talento-button_irParaDetalhado')
        page.click('.btn.btn-primary')
        page.wait_for_timeout(3000) 
        
        
        
       # relatorio VAGAS EMPREGO esta funcionandooo
        
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/relatorioVagasEmprego.php')
        page.wait_for_timeout(1000)
        
        page.click('.btn.btn-primary.relatorio-vagas_emprego-button_irParaDetalhado')
        page.wait_for_timeout(1000)
        page.click('.btn.btn-primary.relatorio-detalhado-ve-btn')
        
        
        #pag USUARIO
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/usuarioAdm.php')
        page.wait_for_timeout(1000)
        
        page.click('.btn.btn-primary')#editar usuario
        page.wait_for_timeout(1000)
        page.fill('input[name="nomeantigo"]','Edward cullen')
        page.wait_for_timeout(1000)
        page.fill('input[name="e-mailantigo"]','Edwardcullen@gmail.com')
        page.wait_for_timeout(1000)
        page.fill('input[name="foneantigo"]','95625455')
        page.wait_for_timeout(1000)
        page.click('.btn.btn-secondary')
        page.wait_for_timeout(3000) 
        
        
        #Pag USUARIO BUTTON ALTERAR SENHA esta funcionandoo
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/usuarioAdmRecuperar.php')
        page.wait_for_timeout(1000)
        
        page.click('.form-control')
        page.fill('input[type="password"]', '2656565')
        page.wait_for_timeout(1000)
        
        page.click('.form-control')
        page.fill('input[name="newPassword"]', '656565')
        page.wait_for_timeout(1000)
        
        page.click('.form-control')
        page.fill('input[name="confirmNewPassword"]', '656565')
        page.wait_for_timeout(1000)
        
        page.click('.btn.btn-primary')
        page.wait_for_timeout(1000)
        
        
         #entra no menu bar adm para sair do adm ta funcionandooo
        page.click('.navbar-toggler')
        page.wait_for_timeout(1000)
        page.click('.nav-item.mt-auto.mb-2')
        page.wait_for_timeout(3000)
        page.click('.bi.bi-arrow-left-circle-fill.mx-2.my-4')
        
        
        
        
        
        
   

        page.wait_for_timeout(6000)
        
        print(f"Título da página: {page.title()}")
        browser.close()


test_form()
