var swiper = new Swiper(".swiper", {
    cssMode: true,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    keyboard: true, // Ativa a navegação por teclado

    
    autoplay: { 
        delay: 10000, // passar a pagina a cada segundo ex:50000 (50 segundos)
    },
  });

  swiper.on("slideChange", function () { // se a pessoa interagir com o botão vai resetar o delay
    swiper.autoplay.stop(); 
    swiper.autoplay.start(); // Inicia o autoplay com o novo delay
});