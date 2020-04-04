<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="./../styles.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="./../script.js"></script>
   <title>Evidencija robe</title>
</head>
<body>
<?php include "meni.html";?>

<div class="container">
<div class="card">
    <div class="card-body">
    <div style="font-family:arial; color:black; padding-left: 20px;">
    <div class="card-title">
        <h4 class="card-title " style='font-size:40px' align='center' >Unos robe</h4>
    </div>
    <table>
        
        <form action="unosrobe.php" method="get">
            <div class="form-group d-inline-block w-75">
                <label for="id_vrste">ID vrste:*</label>
                <input type="text" class="form-control" name="id_vrste" placeholder="Unesite ID vrste">
            </div>
            <div class="form-group d-inline-block w-75">
                <label for="id_robe">ID robe:*</label>
                <input type="text" class="form-control" name="id_robe" placeholder="Unesite ID robe">
            </div>
            <div class="form-group d-inline-block w-75">
                <label for="nazivrobe">Naziv robe:*</label>
                <input type="text" class="form-control" name="nazivrobe" placeholder="Unesite naziv robe">
            </div>
            <div class="form-group d-inline-block w-75">
                <label for="nazivvrste">Vrsta:*</label>
                <select name="nazivvrste" class="form-control">
                    <option value="Porcelan">Porcelan</option>
                    <option value="Drvo">Drvo</option>
                    <option value="Tkanina">Tkanina</option>
                    <option value="Drugi">Drugi...</option>
                </select>
            </div>
            
            <div class="form-group d-inline-block w-75">
                
                 
                   
                <label for="cena">Cena:*</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">RSD</span>
                    </div>
                <input type="number" class="form-control" name="cena" placeholder="Unesite cenu robe">
                
                </div>
                
            </div>
            <div class="form-group d-inline-block w-75">
                <label for="godina_kupovine">Godina kupovine:*</label>
                <input type="date" class="form-control" name="godina_kupovine" placeholder="Unesite godinu kupovine">
            </div>
            <div class="form-group d-inline-block w-75">
                <label for="nazivdobavljaca">Naziv dobavljača:*</label>
                <input type="text" class="form-control" name="nazivdobavljaca" placeholder="Unesite naziv dobavljača">
            </div>
            <div class="form-group d-inline-block w-75">
                <label for="opis">Opis:*</label>
                <input type="text" class="form-control" name="opis" placeholder="Unesite opis robe">
            </div>
            <br>
            <input type="submit" name="submit" value="Snimi" class="btn btn-primary btn-block">
            <!-- <button class="btn btn-danger btn-block" name="cancel">Ponisti</button> -->
            <a href="../index.php" class='btn btn-danger btn-block'>Ponisti</a>
            
        </form>
        </div>
    </table> 
</div>
    </div>
    
</div>
<?php include "footer.html";?>
</body>
</html>