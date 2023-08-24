<?php 
require_once('./vendor/autoload.php'); 
$_title = "Beloto & Beloto Redações | Dicas" ;
getTopPage();
?>

<main>
    <h1 style="text-align: center;">CONHEÇA AS METODOLOGIA</h1>

          <!--  Quadros -->
    <div class="container">
        <!-- Primeira linha -->
        <div class="row">

            <div class="col" style="margin: 15px; border-radius: 10px; padding: 20px;">
            <a id="Temas">
                <p style=" text-align: center; "><img src="img/icon1.png" alt=""   width="100px" height="100px">
                    <h3 class="dvText">
                        Temas de Redações 
                    </h3>
                </p>
            </a>
            </div>

            <div class="col-md-auto" style="margin: 15px; border-radius: 10px; padding: 20px;">
            <a name="Gramatica">
                <p style=" text-align: center; "><img src="img/icon2.png" alt=""  width="100px" height="100px"> 
                    <h3 class="dvText" >
                        Gramática
                    </h3>
                </p>
            </a>
            </div>

            <div class="col" style="margin: 15px; border-radius: 10px; padding: 20px;">
            <a name="Vestibulares">
                <p style=" text-align: center; "><img src="img/icon3.png" alt=""  width="100px" height="100px"> 
                    <h3 class="dvText">
                        Vestibulares
                    </h3>
                </p>
            </a>
            </div>
            
        </div>

        <!-- Segunda linha -->
        <div class="row">

            <div class="col" style="margin: 15px; border-radius: 10px; padding: 20px; margin-left: 200px;">
            <a name="Competencias">
                <p style=" text-align: center; "><img src="img/icon4.png" alt=""  width="100px" height="100px">
                    <h3 class="dvText">
                        Competências Avaliativas
                    </h3>
                </p>
            </a>
            </div>

            <div class="col" style=" margin: 15px; border-radius: 10px; padding: 20px; margin-right: 200px;">
            <a name="Estrutura">
                <p style=" text-align: center; "> <img src="img/icon-6.png" alt=""   width="100px" height="100px">
                    <h3 class="dvText">
                        Estrutura Da Redação
                    </h3>
                </p>
            </a>
            </div>

        </div>
    </div>
     




<style>
    .dvText{
        text-align: center;
        font-family: Century Gothic;
        font-weight: bold;
    }
</style>

</main>
<?php getBottomPage() ?>