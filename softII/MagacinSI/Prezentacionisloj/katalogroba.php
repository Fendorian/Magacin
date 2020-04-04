<?php include '../start.php'; ?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="reportstyles.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Spisak roba u magacinu</title>
</head>
<body>
<div class='container'>
   <!-- style="font-family:arial; color:black; padding-left: 20px;" -->
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

    
    echo "<div class='card w-25 mt-2'>
    <div class='card-body'>
    <table border = 0 class='card-text'>
        <tr><td>Trg Oslobodjenja 3/45</td></tr>
        <tr><td>Tel. 013/742269</td></tr>
        <tr><td>26220 Kovin</td></tr>
    </table>
    </div>
    </div>";
    echo "<h3 align='center' class='p-2'> Spisak robe u magacinu </h3>";
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
            echo "<table class='table table-striped'>";
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
        // echo "<br/>";
        // echo "<p align='center' style='font-size:20px'> Ukupan broj robe u magacinu: ".$brredova .'</p>';
        // echo "<br>";
        // echo "<br/>";
        // echo "<div class='card float-right'> U Kovinu,". "<br/>"."Dana " .date('d.m.Y'). ".</div>" ;
        echo  "<div class='card w-25 mt-2 float-right'>
        <div class='card-body'>
        <table border = 0 class='card-text'>
            <tr><td>U Kovinu,</td></tr>
            <tr><td>Dana 28.09.2019 </td></tr>
            
        </table>
        </div>
        </div>";
        
        // echo "Dana " .date('d.m.Y'). ".";
	
		}
    } 
    $objRoba=null;
    $objKonekcija->zatvoriKonekciju($konekcija);
    $objKonekcija=null;
?>
<div id="options">

<input id="printpagebutton" class='btn btn-primary mt-2 ' type="button" value="Print news" onclick="print()"/>
 
</div>


<a href="./../index.php"><button type="button" class='btn btn-danger mt-2 '>Povratak</button></a>
</div>

</body>
</html>