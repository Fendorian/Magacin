<?php

class clsRoba

{
    
    public $nazivvrste;  
    public $nazivdobavljaca;
    public $godina_kupovine;
    public $id_robe;
    public $nazivrobe;
    public $cena;
    public $opis;
    public $id_vrste;
    public $vrednost;
 

public function snimiRobu($konekcija)
{
    if($this->id_robe == $this->id_vrste){
    $parts = explode('-', $this->godina_kupovine);//skuplja godinu
    $vrednost=$parts[0];

    $upit = "INSERT INTO `vrsta` (`id_vrste`,`nazivvrste`) VALUES ('$this->id_vrste', '$this->nazivvrste');";
     $result1 = mysqli_query($konekcija, $upit);
    $upit = "INSERT INTO `roba` (`id_robe`, `nazivrobe`,`nazivdobavljaca`, `godina_kupovine`, `cena`, `opis`, `id_vrste`) VALUES ('$this->id_robe', '$this->nazivrobe','$this->nazivdobavljaca', '$this->godina_kupovine', '$this->cena', '$this->opis', '$this->id_vrste');";
    $result2 = mysqli_query($konekcija, $upit);
    if (!$result1 || !$result2) {
        die ("<p align='center' class='alert alert-danger'>Doslo je do greske</p>
        <a href='unosizgledrobe.php'><button type='button' class='btn btn-danger btn-block'>Nazad</button></a>");
    }
    echo "<p class='alert alert-success'>Uspešno ste upisali podatke  ".$this->nazivrobe." u bazu podataka! </p>";
    echo "<br/>";

}
else
{
    echo "<p align='center' class='alert alert-warning'> Vrednosti ID-eva moraju biti jednake! </p>";
}
}

public function prikazRobe($konekcija)//stored procedura

{
    $result = mysqli_query($konekcija, "CALL `prikazi`(@p0, @p1);") or die(mysqli_error($konekcija));             
    return $result;
}

public function pretraga($konekcija, $pretraga)
{
    $upit = "SELECT * FROM (SELECT * FROM roba WHERE `nazivrobe` LIKE '%$pretraga%' ORDER BY `nazivrobe`) AS ONE LEFT OUTER JOIN
    (SELECT * FROM vrsta WHERE id_vrste=`id_vrste`) AS TWO ON ONE.id_robe = TWO.id_vrste;";
    $result = mysqli_query($konekcija, $upit);               
    return $result;
}

public function obrisiRobu($konekcija, $id_robe)
{
    $upit = "DELETE `roba`, `vrsta` 
    FROM `roba`, `vrsta` 
    WHERE `vrsta`.`id_vrste` = `roba`.`id_robe` AND `roba`.`id_vrste` ='$id_robe'";
    $result = mysqli_query($konekcija, $upit);               
    return $result;
}

public function izmenaRobe($konekcija)
{
    $upit = "UPDATE `vrsta` SET `nazivvrste` = '$this->nazivvrste' WHERE `vrsta`.`id_vrste` = '$this->id_vrste';"; 
    $result = mysqli_query($konekcija, $upit);
    $upit = "UPDATE `roba` SET `nazivrobe` = '$this->nazivrobe', `opis` = '$this->opis', `godina_kupovine` = '$this->godina_kupovine', `nazivdobavljaca` = '$this->nazivdobavljaca'

     WHERE `roba`.`id_robe` = '$this->id_robe';";
    $result = mysqli_query($konekcija, $upit);       
    if(!$result)
            {
                echo "<p class='alert alert-danger'>Podaci o robi nisu azurirani. Greška! </p>";
                echo "<br/>";
                mysqli_error($konekcija);
            }
            else
            {
                echo "<p class='alert alert-success'> Uspešno promenjeni podaci o robi ".$this->nazivrobe." u bazu podataka! </p>";
                echo "<br/>";
            }
}
}

?>