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
    <h4>Unos Robe</h4>
    <table>
        <form method="get" action="unosrobe.php">
            <tr><td align=right>id vrste*</td><td><input type="number" name="id_vrste" size="10" autofocus min="0" required maxlength=10 tabindex=1></td></tr> 
            <tr><td align=right>id robe*</td><td><input type="number" name="id_robe" size="10" maxlength=10 min="0" tabindex=2></td></tr> 
            <tr><td align=right>Naziv robe*</td><td><input type="text" name="nazivrobe" size="30" required maxlength=30 tabindex=3></td></tr> 
            <tr><td align=right>Vrsta*</td><td>
            <select name="nazivvrste">
                <option value="Porcelan">Porcelan</option>
                <option value="Drvo">Drvo</option>
                <option value="Tkanina">Tkanina</option>
                <option value="Drugi">Drugi...</option>
            </select>
            </td></tr>
            <tr><td align=right>Cena*</td><td><input type="number" name="cena" size="10" required maxlength=10 min="0" tabindex=5></td></tr> 
            <tr><td align=right>Godina kupovine*</td><td><input type="date" name="godina_kupovine" required maxlength=4 tabindex=6></td></tr> 
            <tr><td align=right>Naziv dobavljaca*</td><td><input type="text" name="nazivdobavljaca" required required maxlength=30 tabindex=7></td></tr> 
            <tr><td align=right>Opis</td><td><input type="text" name="opis" size="50" maxlength=50 tabindex=8></td></tr>
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