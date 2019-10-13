<?php include '../start.php'; ?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="reportstyles.css">
   <title>Spisak roba u magacinu</title>
</head>
<body>
<div style="font-family:arial; color:black; padding-left: 20px;">
   
<?php
	$result="";
    $brredova=0;
    
    $nazivdobavljaca='';
    $godina_kupovine='';
    $id_robe='';
    $nazivrobe='';
    $cena='';
    $opis='';
    $id_vrste='';
    $nazivvrste='';


    if ($konekcija) 
    {$upit = "SELECT * FROM (SELECT * FROM roba) AS ONE LEFT OUTER JOIN (SELECT * FROM vrsta) AS TWO ON ONE.id_robe = TWO.id_vrste;";
        $result = mysqli_query($konekcija, $upit); 
        $brredova = mysqli_num_rows($result);
        if ($brredova>0)
        {
            $red=0;
            while($red = mysqli_fetch_array($result))
                {
                    $id_robe = $red['id_robe'];
                   $id_vrste = $red['id_vrste'];
                    $nazivrobe = $red['nazivrobe'];
                    $nazivvrste = $red['nazivvrste'];
                    $opis = $red['opis'];
                    $cena = $red['cena'];
                    $godina_kupovine=$red['godina_kupovine'];
                    $nazivdobavljaca=$red['nazivdobavljaca'];

                }
        }
    }

    
    echo "<table border = 0>
        <tr><td>Trg Oslobodjenja 3/45</td></tr>
        <tr><td>Tel. 013/742269</td></tr>
        <tr><td>26220 Kovin</td></tr>
    </table>";
    echo "<h3 align='center'> Spisak robe u magacinu </h3>";
    //referenciranje na klasu 
    include './../klase/clsRoba.php';
    
    
    $objRoba = new clsRoba();
   
    if ($konekcija) 
		{
    
        $result = $objRoba->prikazRobe($konekcija);
    
        if ($result)
        {
		$brredova = mysqli_num_rows($result);
		echo "<br/>";
		
		if ($brredova>0) 
		   {
			echo "<br/>";
            echo "<table style='margin-top:0px; margin-left:0px; margin: 0px auto;' border='2s'>";
			echo "<tr>
				
			<th>Naziv</th>
			<th>Dobavljac</th>
            <th>Vrsta</th>
            <th>Godina kupovine</th>

			</tr>";
			
			$red=0;
			while($red = mysqli_fetch_array($result))
			{

            echo "<tr>";
           
            echo "<td>" . $red['nazivrobe'] . "</td>";
            echo "<td>" . $red['nazivdobavljaca']  . "</td>";
            echo "<td>" . $red['nazivvrste'] . "</td>";
            echo "<td>" . $red['godina_kupovine'] . "</td>";          
            
        	echo "</tr>";
			}
			echo "</table>";
		    }//br redova 
        echo "<br/>";
        echo "Ukupan broj robe u magacinu: ".$brredova;
        echo "<br>";
        echo "<br/>";
        echo "U Kovinu,";
        echo "<br/>";
        echo "Dana " .date('d.m.Y'). ".";
	
		}
    } 
    $objRoba=null;
    $objKonekcija->zatvoriKonekciju($konekcija);
    $objKonekcija=null;
?>
<div id="options">

<input id="printpagebutton" type="button" value="print news" onclick="print()"/>
 
</div>


<a href="./../index.php"><button type="button">Povratak</button></a>

</body>
</html>