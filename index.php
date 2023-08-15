<?php 
require_once('./vendor/autoload.php'); 
$_title = "Beloto & Beloto Redações | Página Principal" ;
getTopPage();
?>

<main>

    <!-- Imagem de introdução -->
    <p style="text-align: center; margin-bottom: 65px;">
        <img src="img/home_img.png" alt="h" width="1200" height="410">
    </p>

    <br />

    <h2 style="text-align: center; font-size;">Notas dos alunos e seus desempenhos:</h2>

    <br />

    <!-- Carrossel -->
    <div id="demo"  style="width: 15%; margin: 0 auto;"  class="carousel slide" data-bs-ride="carousel">
     <!-- Indicators/dots -->

        <div class="carousel-indicators">

            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>

            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>

            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>

            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>

        </div>

     <!-- The slideshow/carousel -->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/fotocarrossel1.png" alt="" class="d-block w-100" width="10%" height="10%">
            </div>

            <div class="carousel-item">
                <img src="img/fotocarrossel2.png" alt="" class="d-block w-100" width="10%" height="10%">
            </div>

            <div class="carousel-item">
                <img src="img/fotocarrossel3.png" alt="" class="d-block w-100" width="10%" height="10%"> 
            </div>

            <div class="carousel-item">
                <img src="img/fotocarrossel4.png" alt="" class="d-block w-100" width="10%" height="10%"> 
            </div>
        </div>

     <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"

      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 

      crossorigin="anonymous"
      >
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
</style>

<?php getBottomPage() ?>