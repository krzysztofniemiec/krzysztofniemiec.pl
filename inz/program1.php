
<h3>Współrzędne z pliku (.txt)</h3>
<!--Pierwszy formularz-------------------- wspolrzedne uploadowane z pliku -->
    <form action="wynik_obliczen.php" method="post" enctype="multipart/form-data" id="upload_form" class="form-horizontal" role="form">
        <table>
	        <tr>
	            <td><label for='file'> Nazwa pliku <span class="glyphicon glyphicon-upload"></span></label></td>
	            <td><input type="file" name="file" id="file"></td>
	         </tr>
             <tr>
	             <td><label for="punktlewy">Punkt lewy:</label></td>
	             <td><input type="number" name="punktlewy" id="punktlewy" placeholder="Numer punktu" class="form-control"></td>
             </tr>
             <tr>   
                <td><label for="punktprawy">Punkt prawy:</label></td>
                <td><input type="number" name="punktprawy" id="punktprawy" placeholder="Numer punktu" class="form-control"></td>
             </tr>
             <tr>   
                <td><label for="odlegloscAP"> Odległość A - P:</label></td>
                <td><input type="text" name="odlegloscAP" id="odlegloscAP" placeholder="Odległość A - P" class="form-control"></td>
             </tr> 
             <tr>
                <td><label for="odlegloscBP"> Odległość B - P:</label></td>
                <td><input type="text" name="odlegloscBP" id="odlegloscBP" placeholder="Odległość B - P" class="form-control"></td>
             <tr>
             	<td></td>
                <td><input type="submit" name="submit" value="Oblicz" class="btn btn-success"></td>
             </tr>
    	</table>
    </form>