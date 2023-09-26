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
                <h1 style="text-align: center; color: #c71352;">CONHEÇA A METODOLOGIA</h1>
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
                        <img src="img/d_temas_icon.png" alt="" width="100px" height="100px">

                        <h3 class="dvText">
                            Temas de Redações
                        </h3>
                    </a>
                </p>
            </div>

            <div class="col-md-auto" style="margin: 15px; border-radius: 10px; padding: 20px;">
                <p style="text-align: center; ">
                    <a href="#gramatica" style="text-decoration: none; color: #000000">
                        <img src="img/d_gramatica_icon.png" alt="" width="100px" height="100px">

                        <h3 class="dvText">
                            Gramática
                        </h3>
                    </a>
                </p>
            </div>

            <div class="col" style="margin: 15px; border-radius: 10px; padding: 20px;">
                <p style="text-align: center; ">
                    <a href="#vestibulares" style="text-decoration: none; color: #000000">
                        <img src="img/d_vestibulares_icon.png" alt="" width="100px" height="100px">

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
                        <img src="img/d_competencias_icon.png" alt="" width="100px" height="100px">

                        <h3 class="dvText">
                            Competências Avaliativas
                        </h3>
                    </a>
                </p>
            </div>

            <div class="col" style=" margin: 15px; border-radius: 10px; padding: 20px; margin-right: 200px;">
                <p style="text-align: center; ">
                    <a href="#estrutura" style="text-decoration: none; color: #000000">
                        <img src="img/d_estrutura_icon.png" alt="" width="100px" height="100px">

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
    <h1 id="temas" style="text-align: center; color: #c71352;">TEMAS POSSÍVEIS DE REDAÇÃO</h1>

    <br />

    <!-- Carrossel -->
    <div class="carousel-container">
        <div class="carousel">
            
            <div class="card">
                <img src="img/d_carrossel1.jpg" alt="">
            </div>

            <div class="card">
                <img src="img/d_carrossel2.jpg" alt="">
            </div>

            <div class="card">
                <img src="img/d_carrossel3.jpg" alt="">
            </div>

            <div class="card">
                <img src="img/d_carrossel4.jpg" alt="">
            </div>

            <div class="card">
                <img src="img/d_carrossel5.jpg" alt="">
            </div>

            <div class="card">
                <img src="img/d_carrossel6.jpg" alt="">
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

    <h1 style="text-align: center; color: #c71352; margin-bottom: 25px; margin-top: 26px;">
        TEMAS ANTERIORES DA REDAÇÃO DO ENEM
    </h1>

    <div class="container" style="list-style-position: inside;">
        <ul style="font-size: 29px; list-style-type: none;">
            <li><strong>2022</strong> - Desafios para a valorização de comunidade e povos tradicionais no Brasil.</li>
            <li><strong>2021</strong> - Invisibilidade e registo civil: garantia de acesso á cidania no Brasil.</li>
            <li><strong>2020</strong> - O estigma associado às doenças mentais na sociedade brasileira (tema do Enem impresso).</li>
            <li><strong>2020</strong> - O desafio de reduzir as desigualdades entre as regiões do Brasil (tema do Enem digital).
            <li><strong>2019</strong> - Democratização do acesso ao cinema no Brasil.</li>
            <li><strong>2018</strong> - Manipulação do comportamento do usuário pelo controle de dados na Internet.</li>
            <li><strong>2017</strong> - Desafios para a formação educacional de surdos no Brasil.</li>
        </ul>
    </div>

    <!-- Fim dos temas -->

    <br />



    <!-- Conteúdos -->

    <h1 id="gramatica" style="text-align: center; color: #c71352; margin-bottom: 15px;">
        GRAMÁTICA
    </h1>


    <div class="container">
        <!-- 1. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/d_temas_icon.png" alt="" width="40" height="40">
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
                    <img src="img/d_temas_icon.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Cuidado ao ser irônico. Em uma redação dissertativa-argumentativa, você sempre deve ser o mais
                    objetivo possível, ao
                    utilizar ironias você pode gerar diversos sentidos no que escreve, e, com isso, acabar confundindo a
                    banca
                    examinadora.
                </p>
            </div>

        </div>

        <!-- 3. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/d_temas_icon.png" alt="" width="40" height="40">
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
                    <img src="img/d_temas_icon.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Outro erro muito comum entre os estudantes, é mudança dos tempos verbais dentro da mesma frase. A
                    conjugação dos
                    verbos deve estar de acordo com o tempo que está sendo referido, por isso, preste sempre atenção
                    nisto
                </p>
            </div>

        </div>

        <!-- 5. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1" style="margin-top: 25px;">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/d_temas_icon.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Evite falar de temas paralelos ao que você está pensando. Além de te confundir na hora de elaborar o
                    seu texto, você
                    pode acabar fugindo do tema ao começar a acrescentar fatos desnecessários e que não estejam
                    relacionados a linha
                    argumentativa de sua redação.
                </p>
            </div>

        </div>

        <!-- 6. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/d_temas_icon.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Não utilize muitas hipérboles em sua redação, isto pode soar exagerado e dar informalidade ao seu
                    texto. (Exemplo: Super, mega, hiper).
                </p>
            </div>

        </div>

        <!-- 7. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/d_temas_icon.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Procure sempre criar frases completas e que tenham sentido. Períodos curtos e desnecessários podem
                    empobrecer gramaticalmente o seu texto.
                </p>
            </div>

        </div>

        <!-- 8. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/d_temas_icon.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Preposições para conectar as suas ideias são importantes, mas devem ser dosadas. Em sua redação,
                    utilize sempre as
                    preposições em número limitado e cuidadosamente.
                </p>
            </div>

        </div>

        <!-- 9. item -->
        <div class="row" style="margin-top: 21px; margin-bottom: 21px;">

            <div class="col-1" style="margin-top: 25px;">
                <p style="text-align: center; margin-top: 15px;">
                    <img src="img/d_temas_icon.png" alt="" width="40" height="40">
                </p>
            </div>

            <div class="col-11">
                <p style="font-size: 26px; text-align: justify;">
                    Atente-se sempre na pontuação. A pontuação incorreta pode tirar pontos, por isso, pratique bastante
                    os seus usos
                    antes da prova, principalmente o uso da vírgula, que acaba confundindo muitos candidatos.
                </p>
            </div>

        </div>

    </div>
    <!-- Fim da gramática -->


    <!-- Estrutura de Redação -->
    <h1 id="estrutura" style="text-align: center; color: #c71352; margin-bottom: 15px;">
        ESTRUTURA DE REDAÇÃO
    </h1>

    <br />

    <div class="container-xxl">

        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">

                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        <h3>
                            1. Introdução
                        </h3>
                    </button>
                </h2>

                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <p style="font-size: 21px;">
                            A introdução é o primeiro contato que o leitor tem com o texto. No primeiro parágrafo, é
                            apresentado a ideia principal das questões para ser abordado na redação. É nessa hora que o
                            leitor terá uma dimensão geral do assunto e vai entender as razões pelas quais a discussão
                            do problema é relevante. A introdução pode ser dividida em 3 ou 4 períodos:
                        </p>

                        <br />

                        <h3 style="font-weight: bold;">Contextualização:</h3> 
                        <p style="font-size: 21px;">
                            Onde você deve dar uma visão geral, mais abrangente, antes de chegar no tema.
                        </p>

                        <h3 style="font-weight: bold;">Problema:</h3> 
                        <p style="font-size: 21px;">
                            Onde você apresenta sobre o que se trata o texto especificamente, e faz a conexão
                            com a contextualização.
                        </p>

                        <h3 style="font-weight: bold;">Tese:</h3>
                        <p style="font-size: 21px;">
                            Onde você apresenta o argumento principal que pretende defender ao longo da sua
                            redação.
                        </p>

                    </div>
                </div>

            </div>

            <div class="accordion-item">

                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        <h3>
                            2. Desenvolvimento
                        </h3>
                    </button>
                </h2>

                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <p style="font-size: 21px;">
                            Essa parte da estrutura é o momento do texto no qual você vai desenvolver as ideias que foram apresentadas na
                            introdução. É aqui o momento de argumentar a favor do ponto que você está defendendo, e utilizar a exemplificação para
                            acrescentar valor ao seu texto.
                            Depois de estabelecidos os objetivos dos parágrafos, você vai precisar de 4 elementos para construir cada um dos seus
                            parágrafos de desenvolvimento: afirmação, explicação, exemplificação e conclusão.
                            Ele pode ser dividido em 4 ou 5 períodos:
                        </p>

                        <ul style="list-style-type: square; font-size: 21px;">
                            <li>Retornar ao argumento;</li>
                            <li>Defender o argumento com o repertório;</li>
                            <li>Fazer o aprofundamento da argumentação;</li>
                            <li>Fechamento.</li>
                        </ul>

                    </div>

                </div>

            </div>

            <div class="accordion-item">

                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        <h3>
                            3. Conclusão e Proposta de Intervenção
                        </h3>
                    </button>
                </h2>

                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <p style="font-size: 21px;">
                            A conclusão é onde você deve apresentar uma solução para os problemas expostos nos parágrafos acima. Esse é o momento
                            para concluir todas as suas ideias e, mais do que isso, propor uma medida de intervenção para a questão principal
                            levantada no texto. Pode ser dividido em 3 ou 4 períodos:
                        </p>

                        <ul style="list-style-type: square; font-size: 21px;">
                            <li>Retomar os objetivos da sua redação;</li>
                            <li>Colocar os cincos elementos da Proposta de Intervenção;</li>
                            <li>Fechamento do texto com uma frase de efeito.</li>
                        </ul>

                        <h3>Proposta de Intervenção</h3>

                        <ul style="list-style-type: none; font-size: 21px;">
                            <li>- <strong>Ação</strong> (o quê?)</li>
                            <li>- <strong>Agente</strong> (quem?)</li>
                            <li>- <strong>Efeito</strong> (para quê?)</li>
                            <li>- <strong>Modo</strong> (como?)</li>
                            <li>- <strong>Detalhamento</strong> (explicação e exemplos)</li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src="css/bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>

    <style>
        .accordion-button:not(.collapsed) {
            background-color: #200F38;
            color: white;
        }
    </style>

    <br />
    <!-- Fim das Estruturas -->


    <!-- Competências avaliativas -->
    <h1 id="competencias" style="text-align: center; color: #c71352; margin-bottom: 15px; margin-top: 28px;">
        COMPETÊNCIAS AVALIATIVAS
    </h1>

    <br />

    <!-- Primeira linha -->
    <div class="container">
        <div class="row">

            <div class="col-md-2" style="padding: 20px;">
                <p style="border-radius: 5px; background-color: #200F38;
                    font-size: 100px; text-align: center; font-family: Impact; color: white;">
                    1.
                </p>
            </div>

            <div class="col-md-3" style="padding: 20px;">
                <p style="text-align: justify; font-size: 22px;">
                    Demonstrar domínio da modalidade escrita formal da língua portuguesa.
                </p>
            </div>

            <div class="col-md-1">
                <!-- Espaçamento aqui -->
            </div>

            <div class="col-md-2" style="padding: 20px;">
                <p style="border-radius: 5px; background-color: #4b104b;
                    font-size: 100px; text-align: center; font-family: Impact; color: white;">
                    2.
                </p>
            </div>

            <div class="col-md-4" style="padding: 20px;">
                <p style="text-align: justify; font-size: 22px;">
                    Compreender a proposta de redação e aplicar conceitos das várias áreas de conhecimento para
                    desenvolver o tema, dentro dos limites estruturais do texto dissertativo-argumentativo em prosa.
                </p>
            </div>

        </div>
    </div>

    <!-- Segunda linha -->
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">

            <div class="col-md-2" style="padding: 20px;">
                <p style="border-radius: 5px; background-color: #4b104b;
                        font-size: 100px; text-align: center; font-family: Impact; color: white;">
                    3.
                </p>
            </div>

            <div class="col-md-3" style="padding: 20px;">
                <p style="text-align: justify; font-size: 22px;">
                    Selecionar, relacionar, organizar e interpretar informações, fatos, opiniões e argumentos em defesa
                    de um ponto de vista.
                </p>
            </div>

            <div class="col-md-1">
                <!-- Espaçamento aqui -->
            </div>

            <div class="col-md-2" style="padding: 20px;">
                <p style="border-radius: 5px; background-color: #200F38;
                        font-size: 100px; text-align: center; font-family: Impact; color: white;">
                    4.
                </p>
            </div>

            <div class="col-md-4" style="padding: 20px;">
                <p style="text-align: justify; font-size: 22px;">
                    Demonstrar conhecimento dos mecanismos linguísticos necessários para a construção da argumentação.
                </p>
            </div>

        </div>
    </div>

    <!-- Terceira linha -->
    <div class="container">
        <div class="row">

            <div class="col-3">
                <!-- Espaçamento -->
            </div>

            <div class="col-md-2" style="padding: 20px;">
                <p style="border-radius: 5px; background-color: #200F38;
                        font-size: 100px; text-align: center; font-family: Impact; color: white;">
                    5.
                </p>
            </div>

            <div class="col-5" style="padding: 20px;">
                <p style="text-align: justify; font-size: 22px;">
                    Elaborar proposta de intervenção para o problema abordado, respeitando os direitos humanos.
                </p>
            </div>

            <div class="col-2">
                <!-- Espaçamento -->
            </div>

        </div>
    </div>


    <!-- Fim das competências -->

    <br />

    <!-- Vestibulares -->
    <h1 id="vestibulares" style="text-align: center; color: #c71352; margin-bottom: 15px; margin-top: 20px;">
        VESTIBULARES
    </h1>


    <!--  Quadros dos vestibulares -->
    <div class="container">
        <!-- Primeira linha -->
        <div class="row">

            <div class="col-4" style="border-radius: 10px; padding: 20px;">
                <p>
                    <a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem">
                        <img src="img/d_enem_logo.png" alt="" style="border: 3px solid #c71352; border-radius: 5px;" width="300" height="300">
                    </a>
                </p>
            </div>

            <div class="col-4" style="border-radius: 10px; padding: 20px;">
                <p>
                    <a href="https://portal.uel.br/home/">
                        <img src="img/d_uel_logo.png" alt="" style="border: 3px solid #c71352; border-radius: 5px;" width="300" height="300">
                    </a>
                </p>
            </div>

            <div class="col-4" style="border-radius: 10px; padding: 20px;">
                <p>
                    <a href="https://www.vunesp.com.br/">
                        <img src="img/d_vunesp_logo.png" alt="" style="border: 3px solid #c71352; border-radius: 5px;" width="300" height="300">
                    </a>
                </p>
            </div>

        </div>
    </div>

    <!-- Segunda linha -->
    <div class="container">
        <div class="row">

            <div class="col-4" style="border-radius: 10px; padding: 20px;">
                <p>
                    <a href="http://www.uem.br/">
                        <img src="img/d_uem_logo.png" alt="" style="border: 3px solid #c71352; border-radius: 5px;" width="300" height="300">
                    </a>
                </p>
            </div>

            <div class="col-4" style="border-radius: 10px; padding: 20px;">
                <p>
                    <a href="https://www.fuvest.br/">
                        <img src="img/d_fuvest_logo.png" alt="" style="border: 3px solid #c71352; border-radius: 5px;" width="300" height="300">
                    </a>
                </p>
            </div>

            <div class="col-4" style="border-radius: 10px; padding: 20px;">
                <p>
                    <a href="https://www.unicamp.br/unicamp/">
                        <img src="img/d_unicamp_logo.png" alt="" style="border: 3px solid #c71352; border-radius: 5px;" width="300" height="300">
                    </a>
                </p>
            </div>

        </div>
    </div>
    <!-- Fim dos vestibulares -->

    <br />

    <h3 style="text-align: center;">
        <a href="#" style="text-decoration: none; color: #c71352;">
            ^ Voltar ao topo ^
        </a>
    </h3>

    <br />

    <style>
        .dvText {
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
            flex: 0 0 570px;
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
            content: '\2190';
            /* Código Unicode da seta esquerda */
        }

        .carousel-container button.next::before {
            content: '\2192';
            /* Código Unicode da seta direita */
        }
    </style>

</main>
<?php getBottomPage() ?>