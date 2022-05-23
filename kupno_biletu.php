<?php
require "connect.php";
$polaczenie = new polaczenie();

$filmId = (int)$_REQUEST['idfilmu'];

$film = $polaczenie->listaFilmow($filmId);

$rezerwacje = $polaczenie->listaRezerwacji($filmId);

//    print_r($rezerwacje);
//    die();

if(!empty($_POST['idfilmu'])){
    //klienci
$telefon = $_POST['telefon'];
$email = $_POST['email'];


 
    if(!empty($_POST['miejsce']) && is_array($_POST['miejsce'])){
        $last_id =  $polaczenie->dodawanieklienta($telefon,$email);
        $polaczenie->rezerwuj($filmId,$_POST['miejsce'],$last_id);
       
        $bilety = count($_POST['miejsce']);
        $kwota=$bilety*$film['cena'];
        $miejsca= implode(',',$_POST['miejsce']);
        $tyt=$film['tytul'];
        $_POST['tyt'];
                $dat=$film['data'];
        $_POST['dat'];
        header("Location: platnosc.php?bilety={$bilety}&kwota={$kwota}&miejsca={$miejsca}&tyt={$tyt}&dat={$dat}");
    }
    
}

$rezerwacje = $polaczenie->listaRezerwacji($filmId);


  



header("Content-Type: text/html;charset=UTF-8");
?>


<!DOCTYPE HTML> 
<html lang="pl"> 
    <head>  
        <meta charset="utf-8" />  
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />  
        <title>Kupno biletu</title> 
        
		
		
		<script src='https://www.google.com/recaptcha/api.js'></script>
		    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    		<style>
		body
{
	background-color: #2F3336;
	color: #efefef;
    font-family: 'Open Sans', sans-serif;
    font-size: 17px;
}
input[type='checkbox'] {
    -webkit-appearance:none;
    width:30px;
    height:30px;
    background:white;
    border-radius:5px;
    border:2px solid #555;
}
input[type='checkbox']:checked {
    background: blue;
}
.ekran{ text-align: center}
input, select, textarea{
    color: black;
}
.footer
{
position: relative; bottom: -260px; z-index: -2;    
}
           .container-fluid{
                background-color: lightgray;
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
     
    <form autocomplete="off" action="kupno_biletu.php?idfilmu=<?=$film['ID']?>" method="post" onsubmit="if (this.telefon.value == '') { alert('Proszę wypełnić pole nr.telefonu'); return false }; if (this.email.value == '') { alert('Proszę wypełnić pole Email'); return false }; " >    

        <div class="col-md-5">
		Kupno biletu na seans filmowy:
		<b>
                <?=$film['tytul']?>
                   
		</b>
                <p><b> <?=$film['data']?> </b></p>
                		<p>Cena za jeden bilet:
                                    <b><?=$film['cena']?> zł</b>
                </p>
		<p>Proszę podać informacje na którę zostanie wysłany bilet</p>
        
            Nr. telefonu: <br /> <input type='phone' name='telefon'  /> <br />   
            Email: <br /> <input type='email' name='email' /> <br /><br />   


		</div>
		 <div class="col-md-7">
		 <div class="col-md-7">
wybierz siedzenie
<div class="responsive">

<input type="hidden" id="idfilmu" name="idfilmu" value="<?=$film['ID']?>">
<?php
for($rzad =0; $rzad<5; $rzad++ ){
	for($kolumna =0; $kolumna<11; $kolumna++ ){
            $miejsce = ($rzad*11+$kolumna+1);
            $checked = in_array($miejsce, $rezerwacje) ? "checked" : "";
            $disabled = in_array($miejsce, $rezerwacje) ? "disabled" : "";
		echo '<input type="checkbox" class="form-check-input" '.$checked.' '.$disabled.' value="'.$miejsce.'" name="miejsce[]">';
	}
	echo '<br />';
}
echo '<hr>';
echo '<p class="ekran">Ekran<p>';
echo '<br>';
echo ' <button type="submit" class="btn btn-primary" style="position: relative; left:250px;">Zamawiam</button>';
?>
</div>
</div>
<div class="col-md-4">
legenda:
<br>
  <input type="checkbox" id="horns" name="horns" disabled>
  
  <label for="horns">wolne miejsce</label>

  <input type="checkbox" id="scales" name="scales" checked disabled>
  <label for="scales">zajęte miejsce</label>
</div>
</div>

</form>
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