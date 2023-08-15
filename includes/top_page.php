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
</head>

<body>

    <!--Cabeçalho-->
<header>
    <nav class="navbar" style="background-color: gray; margin:20px;" >

        <div class="container">
            <div class="row">

                <!--Logo no cabeçalho-->
                <div class="col-8">
                    <a href="index.php">
                        <img src="img/logoRedonda.png" alt="" width="100" height="100">
                    </a>
                </div>

            </div>
        </div>

             <a href="sobre.php" class="esp">Sobre</a>
             <a href="dicas.php"class="esp">Dicas</a>
             <a href="repertorios.php" class="esp">Repertórios</a>

    </nav>
</header>
  

    <style>
        .esp{
            text-align: center;
            margin-right: 45px;
            font-size: 25px;
            color: white;
            text-decoration: none;
            font-family: Century Gothic
            font-weight: bold;
        }

    </style>