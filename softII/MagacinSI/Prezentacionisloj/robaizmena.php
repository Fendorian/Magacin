<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="./../styles.css">
     <script src="./../script.js"></script>
   <title>Evidencija roba</title>
</head>
<body>
<?php 
include "meni.html";
    $nazivdobavljaca=$_GET['nazivdobavljaca'];
    $id_robe=$_GET['id_robe'];
    $nazivrobe=$_GET['nazivrobe'];
    $nazivvrste=$_GET['nazivvrste'];
    $cena=$_GET['cena'];
    $godina_kupovine=$_GET['godina_kupovine'];
    $opis=$_GET['opis'];
    $id_vrste=$_GET['id_vrste'];
 
 ?>
<div class="container">
<div class="card">
<div class="card-body" align='center'>

    <div class="card-title" style='font-size:40px' align='center'>Izmena robe</div>
    <table>
        <form method="get" action="azuriranjerobe.php"> 
        
            <tr><td align=right>ID robe*</td><td><input class="form-control"  type="number" name="id_robe" min="1" size="10" autofocus required value="<?php echo $id_robe;?>" readonly="readonly" maxlength=10 tabindex=1></td></tr>
           
            
            <tr><td align=right>ID vrste*</td><td><input class="form-control"  type="number" name="id_vrste" min="1" size="10" autofocus required value="<?php echo $id;?>" readonly="readonly" maxlength=10 tabindex=2></td></tr> 
           
            
            <tr><td align=right>Naziv robe*</td><td><input class="form-control" type="text" name="nazivrobe" size="30" required value="<?php echo $nazivrobe;?>"  maxlength=30 tabindex=3></td></tr> 
            <tr><td align=right>Tehnika*</td><td>
           
            
            <select name="nazivvrste" class='form-control'>
                <option value="Porcelan" value="<?php echo $nazivvrste;?>">Porcelan</option>
                <option value="Drvo" value="<?php echo $nazivvrste;?>">Drvo</option>
                <option value="Tkanina" value="<?php echo $nazivvrste;?>">Tkanina</option>
                <option value="Drugi" value="<?php echo $nazivvrste;?>">Drugi...</option>
            </select>
            </td></tr>
           
            
            <tr><td align=right>Cena</td><td><input class="form-control" type="number" name="cena" size="10" value="<?php echo $cena;?>" maxlength=10 tabindex=4></td></tr>
           
            
            <tr><td align=right>Opis*</td><td><input class="form-control" type="text" name="opis" size="50" required value="<?php echo $opis;?>" maxlength=30 tabindex=5></td></tr> 
           
            <tr><td align=right>Godina kupovine*</td><td><input class="form-control" type="date" name="godina_kupovine" value="<?php echo $godina_kupovine;?>" required maxlength=4 tabindex=6></td></tr>
           
            
           
            <tr><td align=right>Naziv dobavljača*</td><td><input class="form-control" type="text" name="nazivdobavljaca" size="30" required value="<?php echo $nazivdobavljaca;?>" maxlength=30 tabindex=7></td></tr> 
            <tr><td></td>
           
           
                <td>
                    <br/>
                    <input type="submit" name="submit" value="Snimi" class='btn btn-primary btn-block' tabindex=8>
                    
                    <a href="unosizgledrobe.php" class='btn btn-danger btn-block'>Poništi</a>
                </td>
            </tr>
        </form>
    </table> 
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"></script>
      
</body>
</html>