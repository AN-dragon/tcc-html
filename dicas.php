<?php 
require_once('./vendor/autoload.php'); 
$_title = "Beloto & Beloto Redações | Dicas" ;
getTopPage();
?>

<main>

<div class="container">
    <div class="row">
        <div class="col-4">
            <hr style="color: #24007D; margin-top: 45px; border: 2px solid #24007D;" width="100%">
        </div>

        <div class="col-4">
            <h1 style="text-align: center; color: #EB356D;">CONHEÇA A METODOLOGIA</h1>
        </div>

        <div class="col-4">
            <hr style="color: #24007D; margin-top: 45px; border: 2px solid #24007D;" width="100%">
        </div>

    </div>
</div>

    <!--  Quadros -->
    <div class="container">
        <!-- Primeira linha -->
        <div class="row">
    
            <div class="col" style="margin: 15px; border-radius: 10px; padding: 20px;">
                <p style="text-align: center; ">
                    <a href="#temas" style="text-decoration: none; color: black;">
                        <img src="img/icon1.png" alt="" width="100px" height="100px">
                    
                        <h3 class="dvText"> 
                            Temas de Redações
                        </h3>
                    </a>
                </p>
            </div>
    
            <div class="col-md-auto" style="margin: 15px; border-radius: 10px; padding: 20px;">
                <p style="text-align: center; ">
                    <a href="#gramatica" style="text-decoration: none; color: #000000">
                        <img src="img/icon2.png" alt="" width="100px" height="100px">
                    
                        <h3 class="dvText">
                            Gramática
                        </h3>
                    </a>
                </p>
            </div>
    
            <div class="col" style="margin: 15px; border-radius: 10px; padding: 20px;">
                <p style="text-align: center; ">
                    <a href="#vestibulares" style="text-decoration: none; color: #000000">
                        <img src="img/icon3.png" alt="" width="100px" height="100px">
                    
                        <h3 class="dvText">
                            Vestibulares
                        </h3>
                    </a>
                </p>
            </div>
    
        </div>
    
        <!-- Segunda linha -->
        <div class="row">
    
            <div class="col" style="margin: 15px; border-radius: 10px; padding: 20px; margin-left: 200px;">
                <p style="text-align: center; ">
                    <a href="#competencias" style="text-decoration: none; color: #000000">
                        <img src="img/icon4.png" alt="" width="100px" height="100px">
                    
                        <h3 class="dvText">
                            Competências Avaliativas
                        </h3>
                    </a>
                </p>
            </div>
    
            <div class="col" style=" margin: 15px; border-radius: 10px; padding: 20px; margin-right: 200px;">
                <p style="text-align: center; ">
                    <a href="#estrutura" style="text-decoration: none; color: #000000">
                        <img src="img/icon5.png" alt="" width="100px" height="100px">
                    
                        <h3 class="dvText">
                            Estrutura de Redação
                        </h3>
                    </a>
                </p>
            </div>
    
        </div>
    </div>
    <!-- Fim dos Quadros -->

    <br />

    <!-- Temas -->
    <h1 id="temas" style="text-align: center; color: #EB356D;">TEMAS POSSÍVEIS DE REDAÇÃO</h1>

    <br />

 <!-- Carrossel -->
 <div class="carousel-container">
        <div class="carousel">
            <div class="card">
                <img src="img/icon1.png" alt="">
            </div>

            <div class="card">
                <img src="img/icon2.png" alt="">
            </div>

            <div class="card">
                <img src="img/icon3.png" alt="">
            </div>

            <div class="card">
                <img src="img/icon4.png" alt="">
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

    <p style="text-align: center; margin-top: 200px; margin-bottom: 150px;">
        <img src="img/redaçaoenem.png" alt="" width="70%" height="70%">
    </p>
    <!-- Fim dos temas -->

    <br />



 <!-- Conteúdos -->

    <h1 id="gramatica" style="text-align: center; color: #EB356D; margin-bottom: 15px;">
        GRAMÁTICA
    </h1>


    <div class="container">
        <!-- 1. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/icon1.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    A utilização de parênteses pode ser bastante útil em uma redação, principalmente para mostrar
                    alguma informação relevante que você queira acrescentar à sentença ou fazer alguma referência.
                </p>
            </div>

        </div>


        <!-- 2. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1" style="margin-top: 38px;">
                <p style="text-align: center;">
                    <img src="img/icon1.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Cuidado ao ser irônico. Em uma redação dissertativa-argumentativa, você sempre deve ser o mais objetivo possível, ao
                    utilizar ironias você pode gerar diversos sentidos no que escreve, e, com isso, acabar confundindo a banca
                    examinadora.
                </p>
            </div>

        </div>

        <!-- 3. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/icon1.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                Não inicie suas frases da mesma maneira, principalmente àquelas que dão início aos parágrafos.
                </p>
            </div>

        </div>

        <!-- 4. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1" style="margin-top: 30px;">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/icon1.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Outro erro muito comum entre os estudantes, é mudança dos tempos verbais dentro da mesma frase. A conjugação dos
                    verbos deve estar de acordo com o tempo que está sendo referido, por isso, preste sempre atenção nisto
                </p>
            </div>

        </div>

        <!-- 5. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1" style="margin-top: 25px;">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/icon1.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Evite falar de temas paralelos ao que você está pensando. Além de te confundir na hora de elaborar o seu texto, você
                    pode acabar fugindo do tema ao começar a acrescentar fatos desnecessários e que não estejam relacionados a linha
                    argumentativa de sua redação.
                </p>
            </div>

        </div>

        <!-- 6. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/icon1.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                Não utilize muitas hipérboles em sua redação, isto pode soar exagerado e dar informalidade ao seu texto. (Exemplo: Super, mega, hiper).
                </p>
            </div>

        </div>

        <!-- 7. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/icon1.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                Procure sempre criar frases completas e que tenham sentido. Períodos curtos e desnecessários podem empobrecer gramaticalmente o seu texto.
                </p>
            </div>

        </div>

        <!-- 8. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/icon1.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Preposições para conectar as suas ideias são importantes, mas devem ser dosadas. Em sua redação, utilize sempre as
                    preposições em número limitado e cuidadosamente.
                </p>
            </div>

        </div>

        <!-- 9. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1" style="margin-top: 25px;">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/icon1.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Atente-se sempre na pontuação. A pontuação incorreta pode tirar pontos, por isso, pratique bastante os seus usos
                    antes da prova, principalmente o uso da vírgula, que acaba confundindo muitos candidatos.
                </p>
            </div>

        </div>
        
    </div>
    <!-- Fim da gramática -->


    <!-- Estrutura de Redação -->
    <h1 id="estrutura" style="text-align: center; color: #EB356D; margin-bottom: 15px;">
        ESTRUTURA DE REDAÇÃO
    </h1>

    <br />

    <div class="container-xxl">

        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">

                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <h3>
                            1. Introdução
                        </h3>
                    </button>
                </h2>

                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <p>
                            Aqui fica o texto.
                        </p>
                    </div>
                </div>

            </div>

            <div class="accordion-item">

                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        <h3>
                            2. Desenvolvimento
                        </h3>
                    </button>
                </h2>
            
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>

                </div>

            </div>

            <div class="accordion-item">

                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        <h3>
                            3. Conclusão
                        </h3>
                    </button>
                </h2>

                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>

            </div>

        </div>

</div>
    <script src="css/bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>

    <style>
        .accordion-button:not(.collapsed) {
        background-color: #24007D;
        color: white;
        }
    </style>

    <br />
    <!-- Fim das Estruturas -->


    <!-- Competências avaliativas -->
    <h1 id="competencias" style="text-align: center; color: #EB356D; margin-bottom: 15px;">
        COMPETÊNCIAS AVALIATIVAS
    </h1>

    <!-- Fim das competências -->



    <!-- Vestibulares -->
    <h1 id="vestibulares" style="text-align: center; color: #EB356D; margin-bottom: 15px;">
        VESTIBULARES
    </h1>


    <!--  Quadros dos vestibulares -->
    <div class="container">
        <!-- Primeira linha -->
        <div class="row">

            <div class="col-4" style="border-radius: 10px; padding: 20px;">
                <p>
                    <img src="img/enem-logo.png" alt="" style="border: 3px solid #EB356D;" width="300" height="300">
                </p>
            </div>

            <div class="col-4" style="border-radius: 10px; padding: 20px;">
                <p>
                    <img src="img/uel-logo.png" alt="" style="border: 3px solid #EB356D;" width="300" height="300">
                </p>
            </div>

            <div class="col-4" style="border-radius: 10px; padding: 20px;">
                <p>
                    <img src="img/vunest-logo.png" alt="" style="border: 3px solid #EB356D;" width="300" height="300">
                </p>
            </div>

        </div>
    </div>

        <!-- Segunda linha -->
        <div class="container">
            <div class="row">

                <div class="col-4" style="border-radius: 10px; padding: 20px;">
                    <p>
                        <img src="img/uem-logo.png" alt="" style="border: 3px solid #EB356D;" width="300" height="300">
                    </p>
                </div>

                <div class="col-4" style="border-radius: 10px; padding: 20px;">
                    <p>
                        <img src="img/Fuvest-logo.png" alt="" style="border: 3px solid #EB356D;" width="300" height="300">
                    </p>
                </div>

                <div class="col-4" style="border-radius: 10px; padding: 20px;">
                    <p>
                        <img src="img/unicamp-logo.png" alt="" style="border: 3px solid #EB356D;" width="300" height="300">
                    </p>
                </div>

            </div>
        </div>
    <!-- Fim dos vestibulares -->

<br />

<style>
    .dvText{
        text-align: center;
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

</main>
<?php getBottomPage() ?>