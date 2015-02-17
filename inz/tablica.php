
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tablica</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="wrapper">

	<h2> Wcięcie liniowe </h2>
    <img src="img/wclin2.gif" alt="">
    <form action="wynik_obliczen.php" method="post" enctype="multipart/form-data">
        <table>
        	<tr>
                <td><label for='file'> Nazwa pliku: </label></td>
                <td><input type="file" name="file" id="file"></td>
            </tr>
            <tr>
                <td><label for="punktlewy">Punkt lewy</label></td>
                <td><input type="number" name="punktlewy" id="punktlewy"></td>
             </tr>
             <tr>   
                <td><label for="punktprawy">Punkt prawy</label></td>
                <td><input type="number" name="punktprawy" id="punktprawy"></td>
             </tr>
             <tr>   
                <td><label for="odlegloscAP"> Odleglosc A - P</label></td>
                <td><input type="text" name="odlegloscAP" id="odlegloscAP"></td>
             </tr>
             <tr>
                <td><label for="odlegloscBP"> Odleglosc B - P</label></td>
                <td><input type="text" name="odlegloscBP" id="odlegloscBP"></td>
             <tr>
             	<td></td>
                <td><input type="submit" name="submit" value="Oblicz"></td>
             </tr>
    	</table>
    </form>
</div>

</body>
</html>