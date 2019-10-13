<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
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

<div style="font-family:arial; color:black; padding-left: 20px;">
    <h4>Izmena roba</h4>
    <table>
        <form method="get" action="azuriranjerobe.php"> 
            <tr><td align=right>ID robe*</td><td><input  type="number" name="id_robe" min="1" size="10" autofocus required value="<?php echo $id_robe;?>" readonly="readonly" maxlength=10 tabindex=1></td></tr>
            <tr><td align=right>ID vrste*</td><td><input  type="number" name="id_vrste" min="1" size="10" autofocus required value="<?php echo $id;?>" readonly="readonly" maxlength=10 tabindex=2></td></tr> 
            <tr><td align=right>Naziv robe*</td><td><input type="text" name="nazivrobe" size="30" required value="<?php echo $nazivrobe;?>"  maxlength=30 tabindex=3></td></tr> 
            <tr><td align=right>Tehnika*</td><td>
            <select name="nazivvrste">
                <option value="Porcelan" value="<?php echo $nazivvrste;?>">Porcelan</option>
                <option value="Drvo" value="<?php echo $nazivvrste;?>">Drvo</option>
                <option value="Tkanina" value="<?php echo $nazivvrste;?>">Tkanina</option>
                <option value="Drugi" value="<?php echo $nazivvrste;?>">Drugi...</option>
            </select>
            </td></tr>
            <tr><td align=right>Cena</td><td><input type="number" name="cena" size="10" value="<?php echo $cena;?>" maxlength=10 tabindex=4></td></tr>
            <tr><td align=right>Opis*</td><td><input type="text" name="opis" size="50" required value="<?php echo $opis;?>" maxlength=30 tabindex=5></td></tr> 
            <tr><td align=right>Godina kupovine*</td><td><input type="date" name="godina_kupovine" value="<?php echo $godina_kupovine;?>" required maxlength=4 tabindex=6></td></tr>
            <tr><td align=right>Naziv dobavljaca*</td><td><input type="text" name="nazivdobavljaca" size="30" required value="<?php echo $nazivdobavljaca;?>" maxlength=30 tabindex=7></td></tr> 
            <tr><td></td>
                <td>
                    <br/>
                    <input type="submit" name="submit" value="Snimi" tabindex=8>
                    <button type="reset" name="cancel" tabindex=9>Poništi</button>
                </td>
            </tr>
        </form>
    </table> 
</div>
</body>
</html>