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

            .img-responsive
            {
                height: 5cm;
            }
            .profession
            {
                position: absolute;
                top: 2.3cm;
                text-align: center;
            }
            .col-md-3
            {
                border-right-style: solid; border-color: blue;
            }
                        .footer
{
position: absolute;
   left: 0;
   bottom: 0;
      text-align: center;
      width: 100%;
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
            <p> Jest to projekt zamawiania biletów do kina</p>
            <br>
            <p> Zrobiony przez: Damian Buszek, Wojciech Dziedzic.</p>
            <div class="footer">
            <table style="width: 100%;" cellspacing="2" cellpadding="0" border="0">
        <div class="col-md-12" style="background-color: lightgray; "></div>
        <tbody><tr>
                <td style="text-align: center;">Copyright © 2019 <i>Cinema City</i></td>
</tr>

        </tbody>
    </table>

        </div>
        </div>
    </body>
</html>