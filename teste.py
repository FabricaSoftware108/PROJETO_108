
from playwright.sync_api import sync_playwright


def test_form():
    with sync_playwright() as p:
        browser = p.chromium.launch(headless=False)
        page = browser.new_page()
        
        page.goto('http://10.28.1.194/PROJETO_108-main/index.html') #('http://127.0.0.1:5502/index.html')
        
        page.wait_for_timeout(5000)
        
      
    #     #PAGINA CADASTRO DE VAGAS esta funcionando tudooo
    #     page.goto('http://127.0.0.1:5502/pages/editais/cadastroVagasEmprego.html') #('http://127.0.0.1:5502/pages/editais/cadastroVagasEmprego.html')
    #     page.wait_for_timeout(5000)

    #     page.wait_for_selector('input[name="nome_empresa"]')
    #     page.fill('input[name="nome_empresa"]', 'novoo blau')
    #     page.fill('input[name="email"]', 'foiAmem@email.com')
    #     page.fill('input[name="cnpj"]', '87.170.176/0001-70')
    #     page.fill('input[name="cidade"]', 'Campo gente')
    #     page.fill('input[name="telefone"]', '67 0000-0000')
    #     page.select_option('select[name=estado]', value='MS')
    #     # page.fill('input[name="estado"]', 'bla')
    #     page.fill('textarea[name="descricao_vaga"]', 'lorem snjnwjdnsjdsndjs nc dn nfdc fdncbdndbhdnbhjsdnjsdnsjjjjjjjj')
    #     page.click('.check-consentimento-dados')
       
        
    #     page.wait_for_timeout(3000)
    #     page.click('.btn.btn-primary')
    #     print("Clicou no botao de enviar")
    #     page.wait_for_timeout(1000)


    # #PAG EMPRESAS esta funcionando tudo
    #     page.goto('http://127.0.0.1:5502/pages/editais/pagDemanda.html') #('http://127.0.0.1:5502/pages/editais/pagDemanda.html')
    #     page.wait_for_timeout(5000)
        
    #     page.wait_for_selector('input[name="nome"]')
    #     page.fill('input[name=nome]', ' Bianca')    
    #     page.fill('input[name=email]', 'bianca@gmail.com')
    #     page.fill('input[name=cpf]', '618.149.190-23')
    #     page.fill('input[name=telefone]', '265656') 
    #     page.fill('input[name=cidade]', 'Amambai')
    #     page.select_option('select[name=estado]', value='MT')
    #     page.fill('textarea[name=descricao]', 'mkfmfkmfksmkmfkmfkfnmdkfdknfkkmnd')
    #     page.click('.check-consentimento-dados')
        
    #     page.wait_for_timeout(3000)
        
    #     page.click('.btn.btn-primary')
        
    #     page.wait_for_timeout(3000)
        
        
    #     #PAGINA BANCO DE TALENTOS, so falta arrumar o input date (ele funciona se mudar o date para text no input no HTML)
    #     page.goto('http://127.0.0.1:5502/pages/editais/pagBancoTalentos.html') #('http://127.0.0.1:5502/pages/editais/pagBancoTalentos.html')
    #     page.wait_for_timeout(5000)
        
    #     page.wait_for_selector('input[name="nome"]')
    #     page.fill('input[name=nome]', 'Adam Carsen')    
    #     page.fill('input[name=cpf]', '618.149.190-23')
    #     page.fill('input[name=dataNascimento]','8-56-2023')
    #     # page.wait_for_timeout(1000)
    #     # page.click('.cadastrovagas.col-md-5.col-10.col-sm-12')
    #     # page.wait_for_timeout(1000)


    #     # page.wait_for_timeout(3000)
      
    #     # page.wait_for_timeout(1000)
    #     page.select_option('select[name=escolaridade]', value='Superior')
    #     page.fill('input[name=telefone]', '6655454566') 
    #     page.fill('input[name=email]', 'adam@gmail.com')
    #     page.fill("input[name=cep]","79017253")
    #     page.fill('input[name=numero]', '543')
    #     page.fill('input[name=rua]', 'aaa')
    #     page.fill('input[name=bairro]', 'aaaaa')
    #     page.fill('input[name=cidade]', 'aaaaa')
        
    #     page.fill('input[name=github]', 'deedeee') 
    #     page.fill('input[name=linkedin]', 'adam@gmail.com')
    #     page.click('.check-consentimento-dados')
        
    #     # page.wait_for_timeout(2000)
    #     page.click('.btn.btn-primary')
    #     page.select_option('select[name=uf]', value='AL')
    #     page.wait_for_timeout(3000)
        
    #    #PAG ALUNO PSG ta funcionandooo
       
    #     page.goto('http://127.0.0.1:5502/PROJETO_108/pages/editais/pagEdital.php') #('http://127.0.0.1:5502/PROJETO_108/pages/editais/pagEdital.php')
    #     page.wait_for_timeout(5000)
        
    #     page.click('.btn.btn.bg-light.rounded.d-lg-flex.d-sm-block.justify-content-between.align-items-center.w-100')
    #     page.wait_for_timeout(2000)
    #     page.click('.btn.btn-primary')
    #     page.wait_for_timeout(2000)
        
    #     page.wait_for_timeout(5000)
    #     page.wait_for_selector('input[name="nome"]')
    #     page.fill('input[name=nome]', 'Jack Smith Turner')    
    #     page.fill('input[name=cpf]', '618.149.190-23')
    #     page.fill('input[name=data_nascimento_psg]', '2020-02-02')
    #     page.fill('input[name=telefone]', '265656') 
    #     page.fill('input[name=email]', 'costhelaria@gmail.com')
    #     page.fill("input[name=nomeMae]","Olive Smith")
    #     page.fill('input[name=nomePai]', 'Adam Carsen')
    #     page.fill('input[name=cep]', '69911-780')
    #     page.fill('input[name=numero]', '895')
    #     page.fill('input[name=rua]', 'Campo Pequeno')
    #     page.fill('input[name=bairro]', 'mnjnjnn')
    #     page.fill('input[name=complemento]', 'mnjnjnn')
    #     page.click('.check-consentimento-dados')
        
    #     page.wait_for_timeout(3000)
        
    #     page.click('.btn.btn-primary')
    #     page.wait_for_timeout(2000)
        
        
        
        
        # PARTE ADM
        
        
              
        


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
        # page.click('.navbar-toggler') #entra no menu bar adm
        # page.click('.nav-link.dropdown-toggle.fs-5') # vai em administradores
        # page.click('.dropdown-item') #vai em pag adicionar administradores.
        
        # #adicionar administradores
        # page.fill('input[name="nome"]', 'Adam Carsel')
        # page.fill('input[name="email"]', 'Adamcarsel@gamil.com')
        # page.fill('input[name="telefone"]', '675454544')
        # page.wait_for_timeout(1000)
        # page.click('.btn.btn-primary.cadastro-adm-button')
        
        
        # page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/admHome.php')
        # page.wait_for_timeout(1000)
        
        # page.click('.navbar-toggler') #entra no menu bar adm
        # page.wait_for_timeout(1000)
        # page.click('.nav-link.dropdown-toggle.fs-5') # vai em administradores
        
        # page.wait_for_timeout(2000)
        # page.click('.dropdown-menu.dropdown-menu-dark')#aqui ele entra no editar administradores.
        
        # page.wait_for_timeout(2000)
        
        # #EDITAR ADM MEXENDO NOS BOTOES DE ATIVAR E DESATIVAR ADM.
        # page.click('.btn.d-flex.justify-content-center.align-items-center')
        # page.wait_for_timeout(1000)
        # # page.click('.cadastro-adm-knob')
        

        # # #TEMPO DE EXECUCAO DA PÁGINA.
        # page.wait_for_timeout(2000)
        
        # pag editais ta funcionando
        
        # page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/admHome.php')
        # page.wait_for_timeout(1000)
        # # aqui ele entra no menubar do cabeçalho adm na página home
        # page.click('.navbar-toggler')
        
        
        
        
        # page.click('a.nav-link.fs-5[href="./cadastroAdmEdital.php"]') # aqui ele vai em editais
        # if str(page.title()) == 'Cadastro Editais ADM':
        #     # elementos = page.query_selector_all('#cadastroAdmEditalInput')
        #     page.fill(f'input[type="text"]','Edital 567')
        #     page.fill(f'input[type="email"]','34521')
        #     page.fill(f'input[type="number"]','13')
        #     page.fill('input[id="cadastroAdmEditalInput"]','Processo Seletivo 12/2023 Fabrica de Software - Aluno')
        #     page.click('.btn.btn-primary')
        #     page.wait_for_timeout(3000)
            
            
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/admHome.php')
        page.wait_for_timeout(1000)
        # aqui ele entra no menubar do cabeçalho adm na página home
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/adm/adicionarCarrosselAdm.php')  
       

        page.fill('input[name="nomedafabrica"]','Software')
        page.fill('input[name="nomedoprojeto"]','SenaCoin')
        page.fill('input[name="textodaturma"]','nnskjndwjdnwjdndjn')
        
        
         
        # page.click('a.nav-link.fs-5[href="./adicionarCarrosselAdm.php"]') # aqui ele vai em adicionar nova fabrica
        # if str(page.title()) == 'Adicionar Carrossel ADM':
        #     # elementos = page.query_selector_all('#cadastroAdmEditalInput')
        #     page.fill('.btn.btn-primary.dropdown-toggle')
        #     page.fill('textarea[id=campoTextoDescricaoCarrossel]', 'mkfmfkmfksmkmfkmfkfnmdkfdknfkkmnd')
        #     # page.fill(f'input[type="number"]','13')
        #     # page.fill('input[id="cadastroAdmEditalInput"]','Processo Seletivo 12/2023 Fabrica de Software - Aluno')
        #     page.click('.btn.btn-primary')
        #     page.wait_for_timeout(3000)
        # page.click('.nav-item.dropdown-adm') # fabricas
        # page.click('.dropdown-item') # pag cadastrar carrossel 
        

        
        # # aqui ele entra no menubar do cabeçalho adm na página home
        # page.click('.navbar-toggler')
        
        #aqui ele vai para editais ARRUMAR..
        # page.click('a.nav-link fs-5')
      


        # acao = ['.dropdown-item[href="./cadastroAdm.php"]',
        #         '.dropdown-item[href="./editarAdm.php"]']
        # acao2 = ['.dropdown-item[href="./adicionarCarrosselAdm.php"]', 
        #         '.dropdown-item[href="./editarCarrosselAdm.php"]']
        # acao3 = ['.dropdown-item[href="./relatorioAlunoADM.php"]', 
        #         '.dropdown-item[href="./relatorioeditaldaempresa.php"]',
        #         '.dropdown-item[href="./relatoriobancotalento.php"]',
        #         '.dropdown-item[href="./relatorioVagasEmprego.php"]']


        # page.wait_for_timeout(1000)
        # nav_links = page.query_selector_all('.nav-link.dropdown-toggle.fs-5')
        # page.wait_for_timeout(1000)


        # for i in acao:
        #     page.click('.navbar-toggler')
        #     page.wait_for_timeout(2000)
        #     page.click('.nav-link.dropdown-toggle.fs-5')
        #     page.wait_for_timeout(1000)
        #     page.click(i)
            
        #     if str(page.title()) == 'Cadastro Admin':
        #         page.fill('input[name="nome"]','ana')
        #         page.fill('input[name="email"]', 'jacksmith@gmail.com')
        #         page.fill('input[name="telefone"]', '67-99865456982')
        #         page.wait_for_timeout(1000)
        #     elif str(page.title()) == 'Editar Admin':
        #         page.click('.cadastro-adm-knob')
        #         page.wait_for_timeout(1000)
            
            
        #     page.wait_for_timeout(2000)


        # page.click('.navbar-toggler')
        # page.wait_for_timeout(1000)
        # page.click('a.nav-link.fs-5[href="./cadastroAdmEdital.php"]')
        # if str(page.title()) == 'Cadastro Editais ADM':
        #     # elementos = page.query_selector_all('#cadastroAdmEditalInput')
        #     page.fill(f'input[type="text"]','Edital 567')
        #     page.fill(f'input[type="email"]','34521')
        #     page.fill(f'input[type="number"]','13')
        #     # page.fill('input[id="cadastroAdmEditalInput"]','Processo Seletivo 12/2023 Fabrica de Software - Aluno')
        # page.wait_for_timeout(3000)


        # for i in acao2:
        #     page.click('.navbar-toggler')
        #     page.wait_for_timeout(2000)
        #     nav_links = page.query_selector_all('.nav-link.dropdown-toggle.fs-5')       
        #     if len(nav_links) >= 2:
        #         nav_links[1].click()
                
        #     if str(page.title()) == 'Adicionar Carrossel Adm':
        # # elementos = page.query_selector_all('#cadastroAdmEditalInput')
        #         page.fill(f'textarea[type="text"]','Software')
        #         page.fill(f'textarea[type="email"]','SenaCoin')
        #         page.fill(f'textarea[type="number"]','nnskjndwjdnwjdndjn')
            
        #     page.wait_for_timeout(1000)
        #     page.click(i)
        #     page.wait_for_timeout(2000)


        # for i in acao3:
        #     page.click('.navbar-toggler')
        #     page.wait_for_timeout(2000)
        #     nav_links = page.query_selector_all('.nav-link.dropdown-toggle.fs-5')       
        #     if len(nav_links) >= 3:
        #         nav_links[2].click()
            
        #     page.wait_for_timeout(1000)
        #     page.click(i)
        #     page.wait_for_timeout(2000)
   


        # page.click('.navbar-toggler')
        # page.wait_for_timeout(1000)
        # page.click('.nav-link[href="./usuarioAdm.php"]')
        # page.wait_for_timeout(3000)
   
      

    
        
       
        
        
        
    
        
       
        

        page.wait_for_timeout(6000)
        
        print(f"Título da página: {page.title()}")
        browser.close()


test_form()
