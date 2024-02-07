var swiper = new Swiper(".swiper", {
  cssMode: true, //  é uma opção que ativa o modo CSS do Swiper. Manipulará as classes CSS para criar as transições
  loop: true, //  permite um carrossel contínuo.
  navigation: { // configura os botões de navegação.
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: { // configura a paginação.
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