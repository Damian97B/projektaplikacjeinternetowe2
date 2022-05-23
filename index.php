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
            .container{
                       background-color: #2F3336;
                color: #efefef;
                font-family: 'Open Sans', sans-serif;
                font-size: 17px;
                position: relative;
                top: -20px;

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
            <div class="col-md-12" style="z-index: 2">
<br/>
</div>
<?php 
echo <<<HTML
            <div class="col-md-9 b">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->

                    <div class = "carousel-inner">
                        <div class = "item active">
                            <img src = "av.jpg" alt = "avengers" >
                            <div class="carousel-caption">
                                <h2><a  class="karuzela" href="film.php?id=1">Avengers: koniec gry</a></h2>
                            </div>

                        </div>

                        <div class = "item">
                            <img src = "pra.jpg" alt = "Prazioemk">
                            <div class="carousel-caption">
                                <h2><a class="karuzela" href="film.php?id=2">Praziomek</a></h2>
                            </div>
                        </div>


                        <div class = "item">
                            <img src = "ka.jpg" alt = "Kapitan marvel">
                            <div class="carousel-caption">
                                <h2><a class="karuzela" href="film.php?id=3">Kapitan Marvel</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>


            </div>
HTML;

?>
    
            
            
            
      
            <div class="col-md-3 c"><div class = "alert alert-success">Najbliższe premiery:</div>
                
                <?php
                foreach ($filmy as $idFilmu => $film){
                     if ($film['powtorka'] === '0') {
                    echo <<<HTML
                <div class = "alert alert-info">{$film['tytul']}<p> </p>{$film['data']} </div>

HTML;
                }
                }
                ?>
   </div>
                
            <!-- tuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu -->
            <div class="col-md-12 e">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#nowshowing" data-toggle="tab">Teraz pokazujemy</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="nowshowing">
                            <?php
                            foreach ($filmy as $idFilmu => $film) {
                                if ($film['powtorka'] === '0') {
                                    echo <<<HTML
                            <div class="col-md-3">
                                <div class="card-container">
                                    <div class="card">
                                        <div class="front">
                                            <div class="cover">
                                                <img class="img-responsive" src="{$film['obrazek_maly']}"> 
                                            </div>
                                            <div class="content">
                                                <div class="main">
                                                    <h3 class="text-center"> <a class="profession" href="film.php?id={$film['ID']}">{$film['tytul']}</a></h3>


                                                    <p class="profession"><b>Gatunek: </b>{$film['gatunek']}</p>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- end front panel -->
                                        <div class="back">
                                            <div class="content">
                                                <div class="main">
                                                    <h3 class="text-center"> <a class="profession" href="film.php?id={$film['ID']}">{$film['tytul']}</a></h3>
                                                    <p class="text-center">{$film['opis']}</p>
                                                </div>
                                                <a class="btn btn-primary btn-xs btn-block" href="film.php?id={$film['ID']}">Więcej</a>
                                            </div>

                                        </div> <!-- end card -->

                                    </div> <!-- end card-container -->
                                </div>
                            </div> 
HTML;
                                }
                            }
                            ?>




                        </div>
                    </div> <!-- end card -->
                </div> <!-- end card-container -->




            </div>
            <!--TUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU !-->
            
            <div class="col-md-12 e">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#nowshowing" data-toggle="tab">Powtarzamy</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="nowshowing">
                            <?php
                            foreach ($filmy as $idFilmu => $film) {
                                if ($film['powtorka'] === '1') {
                                    echo <<<HTML
                            <div class="col-md-3">
                                <div class="card-container">
                                    <div class="card">
                                        <div class="front">
                                            <div class="cover">
                                                <img class="img-responsive" src="{$film['obrazek_maly']}"> 
                                            </div>
                                            <div class="content">
                                                <div class="main">
                                                    <h3 class="text-center"> <a class="profession" href="film.php?id={$film['ID']}">{$film['tytul']}</a></h3>


                                                    <p class="profession"><b>Gatunek: </b>{$film['gatunek']}</p>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- end front panel -->
                                        <div class="back">
                                            <div class="content">
                                                <div class="main">
                                                    <h3 class="text-center"> <a class="profession" href="film.php?id={$film['ID']}">{$film['tytul']}</a></h3>
                                                    <p class="text-center">{$film['opis']}</p>
                                                </div>
                                                <a class="btn btn-primary btn-xs btn-block" href="film.php?id={$film['ID']}">Więcej</a>
                                            </div>

                                        </div> <!-- end card -->

                                    </div> <!-- end card-container -->
                                </div>
                            </div> 
HTML;
                                }
                            }
                            ?>




                        </div>
                    </div> <!-- end card -->
                </div> <!-- end card-container -->




            </div>
<div class="footer">
<table style="width: 100%;" cellspacing="2" cellpadding="0" border="0">
        <div class="col-md-12" style="background-color: lightgray"></div>
        <tbody><tr>
                <td style="text-align: center;">Copyright © 2019 <i>Cinema City</i></td>
</tr>

        </tbody>
    </table>


</div>









        </div>
                <img class="img-responsive" style="position: fixed; bottom: -100px; z-index: -3" src="prplakat.jpg">
    </body>

</html>
