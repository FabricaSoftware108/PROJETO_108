

#OBS: PROVAVELMENTE, TALVEZ OCORRA QUE EEL NÃO INSTALE EM SEU PC PROFESSOR,
# COMO O SENHOR VIU QUE OCORREU NO MEU, SE QUISER, PODE VER ELE FUNCIONANDO NO,
# COMPUTADOR DO CURSO, NO MEU, LÁ ELE FUNCIONA CERTINHO.


# AQUI ESTÁ O LINK DA DOCUMENTAÇÃO DO PLAYWRIGHT
# CASO O SENHOR QUEIRA DAR UMA OLHADA NELA.


#https://playwright.dev/python/docs/intro


from playwright.sync_api import sync_playwright


def test_form():
    with sync_playwright() as p:
        browser = p.chromium.launch(headless=False)
        page = browser.new_page()
        
        page.goto('http://10.28.1.194/PROJETO_108-main/index.html') #('http://localhost/PROJETO_108/index.html')
        
        page.wait_for_timeout(5000)
        
      
        #PAGINA CADASTRO DE VAGAS
        page.goto('http://localhost/PROJETO_108/pages/editais/cadastroVagasEmprego.html') #('http://localhost/php/PROJETO_108/pages/editais/cadastroVagasEmprego.html')
        page.wait_for_timeout(5000)

        page.wait_for_selector('input[name="nome_empresa"]')
        page.fill('input[name="nome_empresa"]', 'foiii amémm')
        page.fill('input[name="email"]', 'foiAmem@email.com')
        page.fill('input[name="cnpj"]', '87.170.176/0001-70')
        page.fill('input[name="cidade"]', 'Campo gente')
        page.fill('input[name="telefone"]', '67 0000-0000')
        page.select_option('select[name=estado]', value='MS')
        # page.fill('input[name="estado"]', 'bla')
        page.fill('textarea[name="descricao_vaga"]', 'lorem snjnwjdnsjdsndjs nc dn nfdc fdncbdndbhdnbhjsdnjsdnsjjjjjjjj')
        page.click('.check-consentimento-dados')
       
        
        page.wait_for_timeout(3000)
        page.click('.btn.btn-primary')
        print("Clicou no botao de enviar")
        page.wait_for_timeout(3000)

        
        
        #PAGINA BANCO DE TALENTOS, so falta arrumar o input date que não vaii
        # page.goto('http://localhost/PROJETO_108/pages/editais/pagBancoTalentos.html')
        # page.wait_for_timeout(5000)
        
        # page.wait_for_selector('input[name="nome"]')
        # page.fill('input[name=nome]', 'Adam Carsen')    
        # page.fill('input[name=cpf]', '618.149.190-23')
        # page.fill('input[name=dataNascimento]', '2020-02-02')
        # page.select_option('select[name=escolaridade]', value='Superior')
        # page.fill('input[name=telefone]', '90000-0000') 
        # page.fill('input[name=email]', 'costhelaria@gmail.com')
        # page.fill("input[name=cep]","79017253")
        # page.fill('input[name=numero]', '543')
        # page.fill('input[name=rua]', 'Rua da Alegria')
        # page.fill('input[name=bairro]', '01 dos bairros')
        # page.fill('input[name=cidade]', 'Campo Pequeno')
        # page.fill('input[name=github]', 'mnjnjnn')
        # page.fill('input[name=linkedin]', 'Linikernjnjc')
        # page.click('.check-consentimento-dados')
        
        
        # page.wait_for_timeout(5000)
        # page.click('.btn.btn-primary')
        # page.wait_for_timeout(5000)
        
       #PAG ALUNO PSG
       
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/editais/pagEdital.php')
        page.wait_for_timeout(5000)
        
        page.click('.btn.bg-light.rounded.d-lg-flex.d-sm-block.justify-content-between.align-items-center.w-100')
        page.wait_for_timeout(2000)
        page.click('.btn.btn-primary')
        page.wait_for_timeout(2000)
        
        
        page.wait_for_timeout(5000)
        page.wait_for_selector('input[name="nome"]')
        page.fill('input[name=nome]', 'Jack Smith Turner')    
        page.fill('input[name=cpf]', '618.149.190-23')
        page.fill('input[name=data_nascimento_psg]', '2020-02-02')
        page.fill('input[name=telefone]', '265656') 
        page.fill('input[name=email]', 'costhelaria@gmail.com')
        page.fill("input[name=nomeMae]","Olive Smith")
        page.fill('input[name=nomePai]', 'Adam Carsen')
        page.fill('input[name=cep]', '69911-780')
        page.fill('input[name=numero]', '895')
        page.fill('input[name=rua]', 'Campo Pequeno')
        page.fill('input[name=bairro]', 'mnjnjnn')
        page.fill('input[name=complemento]', 'mnjnjnn')
        page.click('.check-consentimento-dados')
        
        page.wait_for_timeout(3000)
        
        page.click('.btn.btn-primary')
        page.wait_for_timeout(2000)
        
        
        
        
        #PAG EMPRESAS
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/editais/pagDemanda.html')
        page.wait_for_timeout(5000)
        
        page.wait_for_selector('input[name="nome"]')
        page.fill('input[name=nome]', ' Bianca')    
        page.fill('input[name=email]', 'costhelaria@gmail.com')
        page.fill('input[name=cpf]', '618.149.190-23')
        page.fill('input[name=telefone]', '265656') 
        page.fill('input[name=cidade]', 'Amambai')
        page.select_option('select[name=estado]', value='MS')
        page.fill('input[name=descricao]', 'mkfmfkmfksmkmfkmfkfnmdkfdknfkkmnd')
        page.click('.check-consentimento-dados')
        
        page.wait_for_timeout(3000)
        
        page.click('.btn.btn-primary')
        
        
        
        
        
        
        
        
        
        
       
        

        page.wait_for_timeout(6000)
        
        print(f"Título da página: {page.title()}")
        browser.close()


test_form()