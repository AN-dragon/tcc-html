<?php 
require_once('./vendor/autoload.php'); 
$_title = "Beloto & Beloto Redações | Página Principal" ;
getTopPage();
?>

<main>

    <!-- Imagem de introdução -->
    <p style="text-align: center; margin-bottom: 65px;">
        <img src="img/home_img3.png" alt="h" width="1200" height="350" style="border: 4px solid #24007D;">
    </p>

    <br />

    <h2 style="text-align: center; font-size;">Notas dos alunos e suas aprovações:</h2>

    <br />

    <!-- Carrossel -->
    <div class="carousel-container">
        <div class="carousel">
            <div class="card">
                <img src="img/fotocarrossel1.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel2.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel3.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel4.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel5.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel6.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel7.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel8.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel9.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel10.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel11.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel12.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel13.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel14.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel15.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel16.png" alt="">
            </div>

            <div class="card">
                <img src="img/fotocarrossel17.png" alt="">
            </div>

        </div>

        <button class="prev"></button>
        <button class="next"></button>
  </div>

  <script>
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const carousel = document.querySelector('.carousel');
    let currentIndex = 0;
    
    prevButton.addEventListener('click', () => {
      currentIndex = Math.max(currentIndex - 1, 0);
      updateCarouselPosition();
    });
    
    nextButton.addEventListener('click', () => {
      currentIndex = Math.min(currentIndex + 1, carousel.children.length - 1);
      updateCarouselPosition();
    });
    
    function updateCarouselPosition() {
      const cardWidth = carousel.querySelector('.card').offsetWidth;
      carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }
  </script>
    <!-- Fim do carrossel -->

    <br />

    <h2 style="text-align: center; margin-top: 50px;"> Por que estudar com Beloto & Beloto Redações?</h2>

    <br />


    <!--  Quadros -->
    <div class="container">
        <!-- Primeira linha -->
        <div class="row">

            <div class="col" style="background-color: #EB356D; margin: 15px; border-radius: 10px; padding: 20px;">
                <h3 class="divsTxt">
                    Teorias e práticas
                </h3>
            </div>

            <div class="col-md-auto" style="background-color: #24007D; margin: 15px; border-radius: 10px; padding: 20px;">
                <h3 class="divsTxt">
                    Aulas presenciais e On-line
                </h3>
            </div>

            <div class="col" style="background-color: #EB356D; margin: 15px; border-radius: 10px; padding: 20px;">
                <h3 class="divsTxt">
                    Correções e Explicações
                </h3>
            </div>
            
        </div>

        <!-- Segunda linha -->
        <div class="row">

            <div class="col" style="background-color: #24007D; margin: 15px; border-radius: 10px; padding: 20px;">
                <h3 class="divsTxt">
                    Fique por dentro de todas as notícias dos vestibulares
                </h3>
            </div>

            <div class="col" style="background-color: #EB356D; margin: 15px; border-radius: 10px; padding: 20px;">
                <h3 class="divsTxt">
                    Dicas de filmes, livros, citações para melhorar seu repertório
                </h3>
            </div>

        </div>
    </div>
     
</main>

<style>
    .divsTxt{
        text-align: center;
        color: white;
        font-family: Century Gothic;
        font-weight: bold;
    }

    /* Propriedades do Carrossel */
    .carousel-container {
      width: 80%;
      margin: 0 auto;
      overflow: hidden;
      position: relative;
    }
    
    .carousel {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }
    
    .card {
      flex: 0 0 300px;
      background-color: #f2f2f2;
      border-radius: 8px;
      padding: 20px;
      margin: 10px;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
    }
    
    /* Botões de navegação do carrossel */
    .carousel-container button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    
    .carousel-container button.prev {
      left: 10px;
    }
    
    .carousel-container button.next {
      right: 10px;
    }
    
    /* Estilo das setas de navegação */
    .carousel-container button::before {
      content: '\2190'; /* Código Unicode da seta esquerda */
    }
    
    .carousel-container button.next::before {
      content: '\2192'; /* Código Unicode da seta direita */
    }

</style>

<?php getBottomPage() ?>