<?php

class polaczenie {

    private $polaczenie;

    function __construct() {

        $host = "mysql.cba.pl";
        $db_user = "projektap1";
        $db_password = "1234567Aa";
        $db_name = "projektaplikacjeinternetowe";

        $this->polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        mysqli_query($this->polaczenie, "set names 'utf8'");
    }

    public function listaFilmow($id = null) {

        $where = "";
        if(!empty($id)){
            $where = "WHERE ID=".(int)$id;
        }
        
        $filmy = [];
        $result = mysqli_query($this->polaczenie, 'SELECT * FROM `film` '.$where);

        if ($result) {
            if(!empty($id)){
                return mysqli_fetch_assoc($result);
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $filmy[$row['ID']] = $row;
            }
        }

        return $filmy;
    }
    
    public function rezerwuj($idfilmu,$miejsca = [],$last_id)
    {
        foreach($miejsca as $miejsce){
            $result = mysqli_query($this->polaczenie, "INSERT INTO `rezerwacje` (film_id,miejsce,klient_id) VALUES ({$idfilmu},{$miejsce},{$last_id})");
            if(!$result){
                //blad
            }
        }
        
    }
    
    //klienci
    
        public function dodawanieklienta($telefon,$email)
    {

            mysqli_query($this->polaczenie, "INSERT INTO `klienci` (telefon,email) VALUES ('{$telefon}','{$email}')");
            $last_id = $this->polaczenie->insert_id;
            return $last_id;
        }
        

    
    
    public function listaRezerwacji($idfilmu) {

        $rezerwacje = [];
        $result = mysqli_query($this->polaczenie, 'SELECT * FROM `rezerwacje` WHERE film_id='.(int)$idfilmu);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $rezerwacje[] = $row['miejsce'];
            }
        }

        return $rezerwacje;
    }

    /*
      function wypisz() {
      $query = "SELECT * FROM uzytkownicy";
      $result = mysqli_query($this->polaczenie, $query);

      if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
      foreach ($row as $key => $value) {
      echo "<strong>{$key}</strong>: {$value}<br/>";
      }
      echo "<hr>";
      }
      }
      }
     */
}
