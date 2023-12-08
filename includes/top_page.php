<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $_title ?>
    </title>
    <link rel="stylesheet" href="css/bootstrap-5.3.1-dist/css/bootstrap.css">
    <link rel="icon" href="img/logoRedonda.png" type="image/png" sizes="16x16">
</head>

<body>
<!-- margin-top: 20px; margin-left: 20px; margin-right: 20px; -->
    <!--Cabeçalho-->
<header>
    <nav class="navbar" style="background-color: #bdbdbd;" >

        <div class="container">
            <div class="row">

                <!--Logo no cabeçalho-->
                <div class="col-8">
                    <a href="index.php" class="navbar-brand"
                     style="color: white; font-size: 25px; font-family: Century Gothic; font-weight: bold;">

                        <img src="img/logoRedonda.png" alt="logo" width="100" height="100">
                        Beloto & Beloto Redações
                    </a>
                </div>

            </div>
        <!-- </div> -->

        <div class="col-md-auto">
             <a href="sobre.php" class="esp">Sobre</a>
             <a href="dicas.php"class="esp">Dicas</a>
             <a href="repertorios.php" class="esp">Repertórios</a>
             <a href="https://belotoredacoes.blogspot.com/" target="_blank" class="esp">Blog</a>
        </div>
</div>

    </nav>
</header>
  

    <style>
        .esp {
            text-align: center;
            margin-right: 35px;
            font-size: 24px;
            color: white;
            text-decoration: none;
            font-family: Century Gothic
            font-weight: bold;
            transition: 0.2s;
        }

        .esp:hover {
            color: crimson;
            transition: 0.2s ease-out;
        }

    </style>