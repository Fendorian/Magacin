<?php

class clsKonekcijaBP

{
   private $server = "localhost";
   private $username = "root";
   private $serverpassword ="";
   private $database = "evidencijamagacina11";
  
public function otvoriKonekciju()
{
    $konekcija = mysqli_connect($this->server, $this->username, $this->serverpassword, $this->database);
    if (!$konekcija) 
        {
            echo('Nije uspostavljena veza sa serverom baze podataka!');
            echo "<br/>";
        }
    return $konekcija;
} 

public function zatvoriKonekciju($konekcija)
{
    mysqli_close($konekcija);
}

}
?>