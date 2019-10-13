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
<div style="font-family:arial; color:black; padding-left: 20px;">
    <h4>Izmena Robe</h4>
    <?php  
        $id_vrste=$_GET['id_vrste'];
        $nazivdobavljaca=$_GET['nazivdobavljaca'];
        $id_robe=$_GET['id_robe'];
        $nazivrobe =$_GET['nazivrobe'];
        $nazivvrste=$_GET['nazivvrste'];
        $godina_kupovine=$_GET['godina_kupovine'];
        $cena=$_GET['cena'];
        $opis=$_GET['opis'];
      

        
        include './../klase/clsskulptura.php';
        
        
        $objroba = new clsRoba();
        
        //dodeljivanje vrednosti atributima
        $objroba->id_vrste = $id_vrste;
        $objroba->nazivdobavljaca = $nazivdobavljaca;
        $objroba->id_robe = $id_robe;
        $objroba->nazivrobe = $nazivrobe;
        $objroba->nazivvrste = $nazivvrste;
        $objroba->godina_kupovine = $godina_kupovine;
        $objroba->cena = $cena;
        $objroba->opis = opis;

        
        $objroba->izmenaRobe($konekcija);

        
        
        $objroba = null;
        $objKonekcija = null;
?> 
</br>
<a href="unosizgledrobe.php"><button type="button">Povratak</button></a>
</div>
</body>
</html>