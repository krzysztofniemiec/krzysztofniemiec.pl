
<h3>Współrzędne wprowadzane ręcznie</h3>
<!--Drugi formularz------------------------------------------------------------------- wspolrzedne wprowadzane recznie -->
    <form action="wynik_obliczen.php" method="post" id="manual_form" class="form-horizontal" role="form">
    	<table>
    		<tr>
    			<td colspan="2"><label class="normal_label">Współrzędne punktu A</label></td>
    		</tr>
    		<tr>
    			<td>
    				<input type="text" name="ax" id="ax" placeholder="Wspolrzedna X" class="form-control">
    				<input type="text" name="ay" id="ay" placeholder="Wspolrzedna Y" class="form-control">
    			</td>
    		</tr>
    		<tr>
    			<td colspan="2"><label class="normal_label">Współrzędne punktu B</label></td>
    		</tr>
    		<tr>
    			<td>
    				<input type="text" name="bx" id="bx" placeholder="Wspolrzedna X" class="form-control">
    				<input type="text" name="by" id="by" placeholder="Wspolrzedna Y" class="form-control">
    			</td>
    		</tr>
    		<tr>   
                <td>
                	<label for="odlegloscAP2" class="small_label"> Odległość A - P</label>
                	<input type="text" name="odlegloscAP" id="odlegloscAP2" placeholder="Odległość A - P" class="input_margin form-control">
                </td>	
             </tr>
             <tr>
                <td>
                	<label for="odlegloscBP2" class="small_label"> Odległość B - P</label>
                	<input type="text" name="odlegloscBP" id="odlegloscBP2" placeholder="Odległość B - P" class="input_margin form-control">
                </td>
             </tr>
    		 <tr>
    			<td><input type="submit" name="submit2" value="Oblicz" class="btn btn-success"></td>
    		 </tr>
    	</table>
    </form>
