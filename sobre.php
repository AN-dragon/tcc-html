<?php 
require_once('./vendor/autoload.php'); 
$_title = "Beloto & Beloto Redações | Sobre" ;
getTopPage();
?>

<main>

   <br />

   <!-- 1º parte -->
   <div class="container">
      <div class="row">
         <div class="col-5" style="margin-top: 20px;">
            <p>
               <img src="img/s_carla.png" alt="Carla"
                style="border: 1px solid #EB356D; border-radius: 16px;"
                width="450" height="250">
            </p>
         </div>

         <div class="col-7">
            <h2 style="margin-top: 10px; font-weight: bold; font-family: Century Gothic;">
               Quem é Carla Beloto?
            </h2>

            <p style="font-size: 23px; text-align: justify; font-family: Century Gothic;">
               A profissional Carla Beloto, é formada em Letras: Português e em inglês, tendo três especializações: em
               psicopedagogia, gestão educacional e pós-graduação em produção textual na Unesp de Assis. Atua na sua área de
               professora tem mais de 12 anos e possui sua própria empresa Beloto & Beloto Redações. 
            </p>
         </div>

      </div>
   </div>

   <!-- 2º parte -->
   <div class="container">
      <div class="row">
         <div class="col-9">

               <p style="font-size: 25px; text-align: justify; margin-top: 100px; font-family: Century Gothic;">
                  A escola de redação oferece aulas presenciais e remotas, ajudando os alunos a
                  desenvolverem suas habilidades na escrita dissertativa-argumentativa, com apoio
                  de materiais e temas.
               </p>

               <hr>

               <div class="container">
                  <div class="row">

                     <div class="col-6">

                        <h5 class="sobConth5">Entre em contato</h5>
                        <h6 class="sobConth6">Em Palmital:</h6>

                        <p class="sobConth6">
                           Local: Avenida Reginalda Leão, 257 - 1º andar.
                           <br />
                           Centro - Palmital, São Paulo.
                        </p>

                        <p class="sobConth6">
                           Telefone: +55 (18) 99 99621-6617
                        </p>
                     </div>


                     <div class="col-6">
                        <h5>&nbsp;</h5>                 
                        <h6 class="sobConth6">Em Assis:</h6>

                        <p class="sobConth6">
                           Local: Avenida Nove de Julho, 851.
                           <br />
                           Centro - Assis, São Paulo.
                        </p>
                     </div>

                  </div>
               </div>

         </div>


         <div class="col-3" style="margin-top: 20px;">
            <p>
               <img src="img/logoRedonda.png" alt="local"
               style="border: 1px solid black; border-radius: 16px;" 
               width="460" height="300">
            </p>
         </div>

      </div>
   </div>

   <style>
      .sobConth5{
         font-family: Century Gothic;
         font-size: 21px;
      }

      .sobConth6{
         font-family: Century Gothic;
         font-size: 19px;
      }

   </style>

</main>

<?php getBottomPage() ?>