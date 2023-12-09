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
                width="450" height="290">
            </p>
         </div>

         <div class="col-7">
            <h2 class="sobtitulo">
               Quem é Carla Beloto?
            </h2>

            <p style="font-size: 22px; text-align: justify; font-family: Century Gothic;">
               Carla Beloto, profissional altamente qualificada com formação em Letras e pós-graduações em Psicopedagogia, Língua
               Portuguesa, Gestão Educacional, Oratória e Redação. Com mestrado em Letras (área de atuação em Literatura), Carla
               possui mais de 13 anos de experiência no ramo de redações. Sua destacada trajetória acadêmica e profissional, aliada
               à competência em orientação e aprimoramento da escrita, a posiciona como referência no cenário educacional.
               Recomendamos Carla Beloto por sua dedicação ao ensino, compromisso com o desenvolvimento intelectual e sucesso de
               seus alunos.
            </p>
         </div>

      </div>
   </div>

   <!-- 2º parte -->
   <div class="container">
      <div class="row">
         <div class="col-9">

               <p style="font-size: 23px; text-align: justify; margin-top: 60px; font-family: Century Gothic;">
                  A escola de redação oferece aulas presenciais e remotas, ajudando os alunos a
                  desenvolverem suas habilidades na escrita dissertativa-argumentativa, com apoio
                  de materiais e temas.
               </p>

               <hr>

               <div class="container">
                  <div class="row">

                     <div class="col-6">

                        <h5 class="sobconth5">Entre em contato</h5>
                        <h6 class="sobconth6">Em Palmital:</h6>

                        <p class="sobconth6">
                           Local: Avenida Reginalda Leão, 257 - 1º andar.
                           <br />
                           Centro - Palmital, São Paulo.
                        </p>

                        <p class="sobconth6">
                           Telefone: +55 (18) 99 99621-6617
                        </p>
                     </div>


                     <div class="col-6">
                        <h5>&nbsp;</h5>                 
                        <h6 class="sobconth6">Em Assis:</h6>

                        <p class="sobconth6">
                           Local: Avenida Nove de Julho, 851.
                           <br />
                           Centro - Assis, São Paulo.
                        </p>
                     </div>

                  </div>
               </div>

         </div>


         <div class="col-3" style="margin-top: 20px;">

         </div>

      </div>
   </div>

   <div class="container" style="margin-top: 5px;">
      <div class="row">

         <div class="col-1">

         </div>

         <div class="col-2">
            <img src="img/s_sala1.jpg" alt="Sala de Palmital"
               style="border: 1px solid black; border-radius: 16px;"
               width="460" height="300">
         </div>

         <div class="col-4">

         </div>

         <div class="col-2">
         <img src="img/s_sala2.jpg" alt="Sala de Assis"
            style="border: 1px solid black; border-radius: 16px;"
            width="460" height="300">
         </div>

      </div>
   </div>

   <br />

   <style>
      /* Contatos */
      .sobconth5{
         font-family: Century Gothic;
         font-size: 21px;
      }

      .sobconth6{
         font-family: Century Gothic;
         font-size: 19px;
      }

      .sobtitulo{
         margin-top: 10px; 
         font-weight: bold; 
         font-family: Century Gothic;
         transition: 0.2s;
      }
      .sobtitulo:hover{
         color: #5b5b5b;
         transition: 0.2s ease-out;
      }

   </style>

</main>

<?php getBottomPage() ?>