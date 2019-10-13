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
    <h4>Pretraga robe</h4>
    <table>
        <form method="get" action=""> 
           <tr>
           <td align=right>
               Unesite naziv robe:<input type="text" name="nazivzapretragu" size="20" autofocus maxlength=40 tabindex=1>
           </td> 
                <td><input type="submit" name="unospretraga" value="Pretraga" tabindex=2>
                </td>
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
            if(isset($_GET['unospretraga'])) 
            {
               
                $pretraga = $_GET['nazivzapretragu'];
                $result = $objRoba->pretraga($konekcija,$pretraga);
            }
        
        if ($result)
        {
		$brredova = mysqli_num_rows($result);
		echo "<br/>";
		echo "Broj nadjenih roba: ".$brredova;
		if ($brredova>0) 
		   {
			echo "<br/>";
			echo "<table style='margin-top:10px; margin-left:20px;' border='2'>";
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
            
            echo "<td><a href='robaizmena.php?id_vrste=$id_vrste&id_robe=$id_robe&nazivrobe=$nazivrobe&nazivvrste=$nazivvrste&visina=$visina&godina_kupovine=$godina_kupovine&nazivdobavljaca=$nazivdobavljaca&opis=$opis'>Izmeni</a></td>
            <td><a href='robaobrisi.php?Roba=$id_vrste'>Obrisi</a></td>";

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
</body>
</html>