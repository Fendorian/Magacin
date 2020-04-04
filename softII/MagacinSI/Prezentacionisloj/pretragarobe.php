<?php include '../start.php'; ?>
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
<div class="container" align=center>
    <div class="card">
    <h4 class="card-title mb-4 mt-1" style='font-size:40px'  align=center>Pretraga robe</h4>
    
    <table class="mb-4">
        <form method="get" action=""> 
           <tr>
           <td align=center>
               Unesite naziv robe:<input type="text" name="nazivzapretragu" class="form-control mt-3" maxlength=40 tabindex=1>
            
                <input type="submit" name="unospretraga" value="Pretraga" class="btn btn-primary mt-3" tabindex=2>
                </td>     
            </tr>
        </form>
    </table> 
    </div>
<?php
	$result="";
    $brredova=0;


   
    include './../klase/clsRoba.php';
    
 
    $objRoba = new clsRoba();
   
    if ($konekcija) 
		{
            if(isset($_GET['unospretraga'])) 
            {
               
                $pretraga = $_GET['nazivzapretragu'];
                $result = $objRoba->pretraga($konekcija,$pretraga);
            }
        
        if ($result)
        {
		$brredova = mysqli_num_rows($result);
		echo "<br/>";
		echo "<h4 style='color:white;'>Broj nadjenih roba: ".$brredova ."</h4>";
		if ($brredova>0) 
		   {
			echo "<br/>";
			echo "<table class='table table-hover table-dark table-border '>";
			echo "<tr>
			<th>ID vrste</th>	
			<th>ID robe</th>
			<th>Naziv robe</th>
			<th>Vrsta</th>
            <th>Cena</th>
            <th>Godina kupovine</th>
            <th>Naziv dobavljaca</th>
            <th>Opis</th>
			</tr>";
			
			$red=0;
			while($red = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $red['id_vrste'] . "</td>";
			echo "<td>" . $red['id_robe'] . "</td>";
			echo "<td>" . $red['nazivrobe'] . "</td>";
			echo "<td>" . $red['nazivvrste'] . "</td>";
            echo "<td>" . $red['cena'] . "</td>";
            echo "<td>" . $red['godina_kupovine'] . "</td>";
            echo "<td>" . $red['nazivdobavljaca'] . "</td>"; 
            echo "<td>" . $red['opis'] . "</td>";             
            
            $id_vrste = $red['id_vrste'];
            $id_robe = $red['id_robe'];
            $nazivrobe = $red['nazivrobe'];
            $nazivvrste=$red['nazivvrste'];
            $cena=$red['cena'];
            $godina_kupovine=$red['godina_kupovine'];
            $nazivdobavljaca=$red['nazivdobavljaca'];
            $opis=$red['opis'];
            
            echo "<td><a class='btn btn-warning' href='robaizmena.php?id_vrste=$id_vrste&id_robe=$id_robe&nazivrobe=$nazivrobe&nazivvrste=$nazivvrste&cena=$cena&godina_kupovine=$godina_kupovine&nazivdobavljaca=$nazivdobavljaca&opis=$opis'>Izmeni</a></td>
            <td><a class='btn btn-danger' href='robaobrisi.php?Roba=$id_vrste'>Obrisi</a></td>";

        	echo "</tr>";
			}
			echo "</table>";
		    } 
		echo "<br/>";
	
		}
    } 
    $objRoba=null;
    $objKonekcija->zatvoriKonekciju($konekcija);
    $objKonekcija=null;
?>
</div>
<?php include "footerFixed.html";?>
</body>
</html>