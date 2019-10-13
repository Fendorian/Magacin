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
    <h4>Brisanje robe</h4>
    <?php  
        $id=$_GET['Roba'];
        

      
        include '../Klase/clsRoba.php';
        
      
        $objRoba = new clsRoba();
        
        //poziv metode za brisanje artikla
        $result=$objRoba->obrisiRobu($konekcija,$id);

        //ispis poruke o uspešnosti brisanja
        if ($result)
          {echo "Roba je uspešno obrisana iz baze!";}
         else
          {echo "Roba nije obrisana iz baze!";}

        //uništavanje objekata
        $objRoba = null;
        $objKonekcija = null;
?> 
</br></br>
<a href="pretragarobe.php"><button type="button">Povratak</button></a>
</div>
</body>
</html>