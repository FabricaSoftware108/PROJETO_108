from playwright.sync_api import sync_playwright


def test_form():
    with sync_playwright() as p:
        browser = p.chromium.launch(headless=False)
        page = browser.new_page()   
   
        page.goto('http://10.28.1.194/PROJETO_108-main/index.html') #('http://127.0.0.1:5502/index.html')
        
        page.wait_for_timeout(5000)
   #FABRICAS butons home
        #FABRICA SOFTWARE
        
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/fabricas/pagFabricaSoftware.php')
        page.wait_for_timeout(2000)
        
        page.click('.col-12.text-center.text-light.py-5')
        page.wait_for_timeout(2000)
        
        #carrossel fabrica de software
        page.click('.carousel-control-prev-icon')
        page.wait_for_timeout(1000)
        page.click('.carousel-control-prev-icon')
        page.wait_for_timeout(1000)
        page.click('.carousel-control-prev-icon')
        page.wait_for_timeout(1000)
        
        #grade curricular software
        page.click('.btn.btn-danger')
        page.wait_for_timeout(1000)
        page.click('.btn.btn-danger')
        page.wait_for_timeout(1000)
 
 
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/fabricas/pagFabricaJogos.php')
        page.wait_for_timeout(1000)
        
        #carrossel fabrica de jogos
        page.click('.col-12')
        page.wait_for_timeout(1000)
        
        page.click('.carousel-control-prev-icon')
        page.wait_for_timeout(1000)
        
        #grade curricular jogos
        page.click('.btn.btn-danger')
        page.wait_for_timeout(1000)
        page.click('.btn.btn-danger')
        page.wait_for_timeout(1000)
        
        # #button home cabeçalho
        # page.click('.nav-link.active.ms-2.me-2') #aqui ele volta pra home pelo cabeçalho.
        # page.wait_for_timeout(2000)
        
        
        # elementos = page.query_selector_all('.text-fabricas-right-home.col-12.col-lg-6')
        # segundo_elemento = elementos[1]
        # segundo_elemento.click()# o text no home cgi
        # page.wait_for_timeout(2000)
        
        #fabrica de cgi
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/fabricas/pagFabricaCgi.php')
        #fabrica cgi page
        # page.click('.btn-cgi-home')
        page.wait_for_timeout(1000)
        
        #carrossel cgi
        page.click('.carousel-control-prev-icon')
        page.wait_for_timeout(2000)
        
        #grade curricular cgi
        page.click('.btn.btn-warning')
        page.wait_for_timeout(1000)
        page.click('.btn.btn-warning')
        page.wait_for_timeout(1000)
        
        # #button home cabeçalho
        # page.click('.nav-link.active.ms-2.me-2') #aqui ele volta pra home pelo cabeçalho.
        # page.wait_for_timeout(3000)
    
    
        #page audio e video
        page.goto('http://10.28.1.194/PROJETO_108-main/pages/fabricas/pagFabricaAudioVisual.php')
        page.wait_for_timeout(2000)
        
        #carrossel audio e video
        page.click('.carousel-control-next-icon')
        page.wait_for_timeout(2000)
        
        #grade curricular audio e video
        page.click('.btn.btn-success')
        page.wait_for_timeout(2000)
        page.click('.btn.btn-success')
        page.wait_for_timeout(2000)
        
        
        page.wait_for_timeout(6000)
        
        print(f"Título da página: {page.title()}")
        browser.close()


test_form()