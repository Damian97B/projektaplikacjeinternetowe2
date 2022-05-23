<?php
require "connect.php";
$polaczenie = new polaczenie();

$filmId = (int)$_GET['id'];

$film = $polaczenie->listaFilmow($filmId);
//
//print_r($filmy);
//die();


header("Content-Type: text/html;charset=UTF-8");
?>

<!doctype html>
<html>
  <head>
<html>
  <head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link href="css/style.css" rel="stylesheet">
  <link href="css/rotating-card.css" rel="stylesheet">
  
  <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">






  <!-- Custom styles for this template -->
  <link href="css/rotating-card.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <title><?=$film['tytul']?></title>
  <style>
  .a{
	  font-size: 42px;
  text-decoration: underline
  }
  .b{
	  font-size: 25px;
  font-style:italic
  }
  .z{
	position: relative;
	left:0px;
  }

.btn-facebook {
	color: #fff;
	background-color: #4C67A1;
}
.btn-facebook:hover {
	color: #fff;
	background-color: #405D9B;
}
.btn-facebook:focus {
	color: #fff;
}
.container-fluid{
	background-color: lightgray;
}
body
{
	background-color: #2F3336;
	color: #efefef;
    font-family: 'Open Sans', sans-serif;
    font-size: 17px;
}
.footer
{
position: relative;
   left: 0;
   bottom: 0;
      text-align: center;
      width: 100%;
}
option{
    color: black;
}
select{
    color: black;
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
 
 
 
 <div class="col-md-5">
<img class="img-responsive" src = "<?=$film['obrazek_maly']?>" alt = "avengers" >
</div>
<div class="col-md-7">
<div class="a"><p><?=$film['tytul']?></p></div><?=$film['data']?>
<br><br>
<div class="b"><p><?=$film['gatunek']?></p></div>
<div class="c"><p><?=$film['szczegoly']?></p></div>
<br><hr><br>
<div class="b"><p>Opis filmu:</p></div>
<div class="c"><p><?=$film['opis']?></p></div>
<br><hr><br>
</div>
<div class="col-md-2">
<a class="btn btn-primary btn-lg" href="<?=$film['youtube']?>">Zwiastun</a>
</div>
<div class="col-md-3 z">
<!- -------------------------------------------------------------------------------------!>
<form action="kupno_biletu.php" method="get">
<input type="hidden" id="idfilmu" name="idfilmu" value="<?=$film['ID']?>">

<input type="submit" value="Kupno biletu" <a class="btn btn-success btn-lg"></a></input>


</form>

</div>
<br><br>
<a class="btn-facebook"></a>
<a href="https://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://www.example.com&p[images][0]=&p[title]=Title%20Goes%20Here&p[summary]=Description%20goes%20here!" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false"><button style="width:100%; margin-top:10px;" type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"></i> Udostępnij na Facebook</button></a>
<div class="col-md-12"
<br/><br/>
</div>
            <div class="footer">
            <table style="width: 100%;" cellspacing="2" cellpadding="0" border="0">
        <div class="col-md-12" style="background-color: lightgray; "></div>
        <tbody><tr>
                <td style="text-align: center;">Copyright © 2019 <i>Cinema City</i></td>
</tr>


    </table>
            </div>


</div>



</body>

</html>