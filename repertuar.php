<?php
require "connect.php";
$polaczenie = new polaczenie();

$filmy = $polaczenie->listaFilmow();
//
//print_r($filmy);
//die();


header("Content-Type: text/html;charset=UTF-8");
?>

<!doctype html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <link href="css/rotating-card.css" rel="stylesheet">

        <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">






        <!-- Custom styles for this template -->
        <link href="css/rotating-card.css" rel="stylesheet">


        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

        <title>Kino</title>
        <style>


            .carousel-caption {
                position: absolut;
                bottom: 5%;
                z-index: 20;
                color: white;
                text-shadow: 0 1px 2px rgba(0,0,0,.6);
            }

            .container-fluid{
                background-color: lightgray;
            }
            .karuzela{
                color: white;
            }
            .tytul{
                color: black;
                font-size:33px;
            }
            h2{
                color: black;
                font-size: 47px;
            }
            h3{
                color: black;
            }
            body
            {
                background-color: #2F3336;
                color: #efefef;
                font-family: 'Open Sans', sans-serif;
                font-size: 17px;
            }
            .col-md-12
            {
                border-width: thin; border-style: solid; border-color: blue;
                position: relative; z-index: 1;
                background-color: blue;
            }
            .img-responsive
            {
                height: 5cm;
            }
            .profession
            {
                
                
                text-align: center;
            }
            .col-md-3
            {
                border-width: thin; border-style: solid; border-color: blue;
                height: 5cm;
                background-color: #2F3336;
                position: relative; z-index: 2;
                line-height: 5cm;
            }
            .a
            {
                border-width: thin; border-style: solid; border-color: blue;
                height: 5cm;
                background-color: #2F3336;
                position: relative; z-index: 2;
                line-height: 3cm;  
            }
                        .footer
{
position: relative; bottom: -10px;    
}
        </style>
    </head>

    <body>



        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">CINEMA CITY - najlepsze kino!</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav  navbar-right">
                        <li><a href="repertuar.php">REPERTUAR</a></li>
                        <li><a href="informacje.php">INFORMACJE</a></li>
                        <li class="dropdown">

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


        <div class="container">
            <?php
            foreach ($filmy as $idFilmu => $film) {
                echo <<<HTML
<div class='col-md-12'>


   <div class="col-md-3">
       
   <img class="img-responsive" src="{$film['obrazek_maly']}"> 
    </div>
<div class="col-md-3">
              
   <p class="profession"><b>{$film['tytul']}</b></p>
   </div>
  
<div class="col-md-3">


           <p class="profession"><b>Data: </b>{$film['data']}</p>
           </div>
<div class="col-md-3 a">
           
           <p class="profession"><b>Cena: </b>{$film['cena']}zł</p><a class="btn btn-primary btn-xs btn-block" href="film.php?id={$film['ID']}">Więcej informacji</a>
           
           

</div>
                </div>





HTML;
            }
            ?>

            <div class="footer">
            <table style="width: 100%;" cellspacing="2" cellpadding="0" border="0">
        <div class="col-sm-12" style="background-color: lightgray; "></div>
        <tbody><tr>
                <td style="text-align: center;">Copyright © 2019 <i>Cinema City</i></td>
</tr>

</div>
    </table>
            </div>
        </div>
    </body>

</html>
