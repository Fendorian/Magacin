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
    <h4>Prikaz svih roba</h4>
    <table>
        <form method="get" action=""> 
           <tr>
            </tr>
        </form>
    </table> 
<?php
	$result="";
    $brredova=0;


   
    include './../klase/clsRoba.php';
    
    
    $objRoba = new clsRoba();
   
    if ($konekcija) 
		{
             $result = $objRoba->prikazRobe($konekcija);
        
             $brredova = mysqli_num_rows($result);
             echo "<br/>";
             echo "Broj nadjenih roba: ".$brredova;

		if ($brredova>0) 
		   {
			echo "<br/>";
			echo "<table style='margin-top:10px; margin-left:20px;' border='2'>";
			echo "<tr>
			<th>Naziv robe</th>
			<th>Vrsta</th>
			<th>Godina kupovine</th>
            <th>Naziv dobavljaca</th>
            <th>Cena</th>
            <th>Opis</th>
           
			</tr>";
			
			$red=0;
			while($red = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $red['nazivrobe'] . "</td>";
			echo "<td>" . $red['nazivvrste'] . "</td>";
			echo "<td>" . $red['godina_kupovine'] . "</td>";
            echo "<td>" . $red['nazivdobavljaca'] . "</td>";
            echo "<td>" . $red['cena'] . "</td>"; 
            echo "<td>" . $red['opis'] . "</td>";             
            
            $nazivrobe = $red['nazivrobe'];
            $nazivvrste = $red['nazivvrste'];
            $godina_kupovine=$red['godina_kupovine'];
            $nazivdobavljaca=$red['nazivdobavljaca'];
            $cena=$red['cena'];
            $opis=$red['opis'];

        	echo "</tr>";
			}
			echo "</table>";
		    } 
		echo "<br/>";
        }
    
    $objRoba=null;
    $objKonekcija->zatvoriKonekciju($konekcija);
    $objKonekcija=null;
?>
</div>
</body>
</html>