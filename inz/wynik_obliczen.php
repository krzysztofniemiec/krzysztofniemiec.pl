<?php 
include 'obliczenia.php';

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<meta lang="pl" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Wynik obliczen wciecia liniowego</title>
	<link rel="stylesheet" href="css/style.css" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
<div class="wrapper">
	<br />
    <h2> Wynik obliczeń </h2>
        <table class="tabela_wynikow">
        	<tr style="">
            	<th colspan="2" style="font-size:1.3em; border: 4px #194719 solid; font-weight: bold; ">Dane:</th>
            </tr>
            <tr>
            	<th rowspan="2">Współrzędne punktu A </th>
                <td>X: <?php echo ' ' .$ax ;?>  </td>
            </tr>
            <tr>
                <td>Y: <?php echo ' ' .$ay ;?> </td>
            </tr>
            <tr>
            	<th rowspan="2">Współrzędne punktu B </th>
                <td>X: <?php echo ' ' .$bx ;?> </td>
            </tr>
            <tr>
                <td>Y: <?php echo ' ' .$by ;?></td>
            </tr>
            <tr style="">
            	<th colspan="2" style="font-size:1.3em; border: 4px #194719 solid; font-weight: bold; ">Obliczenia i kontrola:</th>
            </tr>
            <tr>
            	<th rowspan="2">Przyrosty A - B </th>
                <td>dx: <?php echo ' ' .$przyrost_xab ;?></td>
            </tr>
            <tr>
                <td>dy: <?php echo ' ' .$przyrost_yab ;?></td>
            </tr>
            <tr>
            	<th>Azymut AB </th>
                <td><?php echo ' ' . number_format($azymut,4);?><span class="grad">g</span></td>
            </tr>
            <tr>
            	<th>Kontrola obliczeń azymutu </th>
                <td><?php echo ' ' .$prawaStrona . ' = '.  $lewaStrona;?> </td>
            </tr>
            <tr>
            	<th>Odległość A - B </th>
                <td><?php echo ' ' . number_format($odlegloscAB,2) ;?>m </td>
            </tr>
            <tr>
            	<th>Kontrola odległości </th>
                <td><?php echo ' ' .number_format($kontrola1,2) . 'm = ' . number_format($odlegloscAB,2) .'m <strong>LUB</strong> '  .number_format($kontrola2,2) . 'm = ' . number_format($odlegloscAB,2) .'m';?> </td>
            </tr>
            <tr>
            	<th rowspan="3">Kąty w trójkącie </th>
                <td>&alpha;: <?php echo ' ' .number_format($alfa,4) ;?><span class="grad">g</span>  </td>
            </tr>
            <tr>
                <td>&beta;: <?php echo ' ' .number_format($beta,4) ;?><span class="grad">g</span>  </td>
            </tr>
            <tr>
            	<td>&gamma;: <?php echo ' ' .number_format($gamma,4) ;?><span class="grad">g</span>  </td>
               
            </tr>
            <tr>
            	<th>Suma kątów </th>
                <td><?php echo ' ' . number_format($suma_katow,4) ;?><span class="grad">g</span> </td>
            </tr>
            <tr style="">
            	<th colspan="2" style="font-size:1.3em; border: 4px #194719 solid; font-weight: bold; ">Wynik obliczeń:</th>
            </tr>
            <tr>
            	<th rowspan="2">Współrzędne punktu wcinanego P </th>
                <td><strong>X:<?php echo ' <u>' .number_format($px, 2, ',',' ') . ' </u> <span class="glyphicon glyphicon-ok"></span>';?> </strong></td>
            </tr>
            <tr>
                <td><strong>Y:<?php echo ' <u>' .number_format($py, 2, ',',' ') . ' </u> <span class="glyphicon glyphicon-ok"></span>';?> </strong></td>
            </tr>
            <tr style="">
            	<th colspan="2" style="font-size:1.3em; border: 4px #194719 solid; font-weight: bold; ">Kontrola wyniku:</th>
            </tr>
            <tr>
            	<th rowspan="2">Współrzędne P' (kontrola) </th>
                <td><strong>X':<?php echo ' ' .number_format($px2, 2, ',',' ') ;?> <span class="glyphicon glyphicon-ok"></span></strong></td>
            </tr>
            <tr>
                <td><strong>Y':<?php echo ' ' .number_format($py2, 2, ',',' ') ;?> <span class="glyphicon glyphicon-ok"></span></strong></td>
            </tr>
            
         </table>
	<div class="div_powrot">
        <a href="index.php" class="btn btn-success pull-left powrot"><span class="glyphicon glyphicon-circle-arrow-left"></span> Powrót do programu </a>
    </div>
    <footer>
		<hr />
		<p class="navbar-text pull-right">Krzysztof Niemiec </p>
	</footer>
</div>
</body>
</html>