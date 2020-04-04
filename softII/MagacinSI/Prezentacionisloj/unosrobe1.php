<?php include '../start.php'; ?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="./../styles.css">
     <script src="./../script.js"></script>
   <title>Evidencija robe</title>
</head>
<body>
<?php include "meni.html";?>
<?php include "../Klase/poslovnalogika.php"; ?>
<div style="font-family:arial; color:black; padding-left: 20px;">
    <h4>Unos robe</h4>
    <?php  
        $id_vrste=$_GET['id_vrste'];
        $godina_kupovine=$_GET['godina_kupovine'];
        $nazivdobavljaca=$_GET['nazivdobavljaca'];
        $id_robe=$_GET['id_robe'];
        $nazivrobe=$_GET['nazivrobe'];
        $nazivvrste=$_GET['nazivvrste'];        
        $cena=$_GET['cena'];
        $opis=$_GET['opis'];

        $poslovnaLogika = new PoslovnaLogika();
        $godina = date("Y", strtotime($godina_kupovine));
        $poslovnaLogika->ProveriGodinu($godina);

        //referenciranje na klasu clsArtikl
        include './../klase/clsRoba.php';
        
        //instanciranje objekta objSkulptura
        $objRoba = new clsRoba();
        
        //dodeljivanje vrednosti atributima
        $objRoba->id_vrste = $id_vrste;
        $objRoba->godina_kupovine = $godina_kupovine;
        $objRoba->nazivdobavljaca = $nazivdobavljaca;
        $objRoba->id_robe = $id_robe;
        $objRoba->nazivrobe = $nazivrobe;
        $objRoba->nazivvrste = $nazivvrste;        
        $objRoba->cena = $cena;
        $objRoba->opis = $opis;

        //poziv metode za unos novog artikla
        $objRoba->snimiRobu($konekcija);

        //ispis poruke o uspešnosti upisa u BP iz klase
        //uništavanje objekata
        $objKnjiga = null;
        $objKonekcija = null;
?> 
</br>
<a href="unosizgledrobe.php"><button type="button" class="btn btn-success">Povratak</button></a>
</div>
</body>
</html>