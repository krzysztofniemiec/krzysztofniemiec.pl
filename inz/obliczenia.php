<?php 
//jesli zatwierdzimy formularz:
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	// FORMULARZ NR 1 - wprowadzanie wspolrzednych z pliku
	if (isset($_POST['submit'])) 
	{
	//definiowanie zmiennych - wartosci pol wspisanych do formularza
		$name =  $_FILES['file']['name'];
		$tmp_name =  $_FILES['file']['tmp_name'];
		$punktlewy =  $_POST['punktlewy']-1;
		$punktprawy =  $_POST['punktprawy']-1;
		$odlegloscAP =  $_POST['odlegloscAP'];
		$odlegloscBP =  $_POST['odlegloscBP'];
		

	// upload i wczytanie pliku wspolrzedne.txt
		if (isset($name)) 
			{
			if (!empty($name) && !empty($odlegloscAP) && !empty($odlegloscBP) && isset($punktlewy) && isset($punktprawy))
				{
				$location =  'uploads/' ;
				if (move_uploaded_file ($tmp_name, $location.$name)) 
					{
					$filename = $location.$name;
					$myfile = fopen($filename , 'r');
					$myfilecontent = fread($myfile, filesize($filename));
					fclose($myfile);
		// utworzenie z zawartosci pliku tablicy
					$items = file($location.$name);	
					$rows = count($items);
					for ($i = 0; $i < $rows; $i++) 
						{
						$linia[$i] = explode(",", $items[$i]) ;	
						//print_r ($linia[$i]);
						}
					if ($punktlewy < $rows && $punktprawy <$rows && $punktlewy != $punktprawy && $punktlewy >= 0 && $punktprawy >= 0)
						{ 
						//obliczenie przyrostow
						$ax = $linia[$punktlewy][1] ;
						$ay = $linia[$punktlewy][2] ;
						$bx = $linia[$punktprawy][1] ;
						$by = $linia[$punktprawy][2] ;
						}
						else 
						{
						
						header('Location: blad.php');
						//echo 'Nie znaleziono punktu o zadanym numerze w załączonym pliku: '. $name;
						//$blad = 'Nie znaleziono punku o zadanym numerze w załączonym pliku';
						
						exit ();
						}
						//if (isset($linia[$punktlewy][3]) || isset($linia[$punktprawy][3]))
						//{
						//	header('Location: blad.php');
					//		exit();
					//	}
					}
				} else  {
				//echo 'Proszę załączyć plik i wypełnić wymagane pola formularza!';
				//$blad = 'Nie załączono pliku';
				//echo $blad;
				header('Location: blad.php');
				exit();
				
				}
			}	
		}
// FORMULARZ NR 2 - reczne wprowadzania wspolrzednych
		else	if (isset($_POST['submit2']))
		{
			//definiowanie zmiennych (wspolrzedne wprowadzone recznie);
			$odlegloscAP =  $_POST['odlegloscAP'];
			$odlegloscBP =  $_POST['odlegloscBP'];
			$ax = $_POST['ax'];
			$ay = $_POST['ay'];
			$bx = $_POST['bx'];
			$by = $_POST['by'];
			if (empty($ax) && empty($ay) && empty($bx) && empty($by) && empty($odlegloscAP) && empty($odlegloscBP))
			{
/*echo <<<END
Prosze uzupelnic odpowiednie pola formularza.<br />
<a style="text-decoration:none; color:darkblue;" href="index.php"> Powrót do strony obliczeniowej</a>
END; */
				//$blad = 'Nie uzupełniono formularza';
				//echo $error;
				header('Location: blad.php');
				exit();
			}
		}
			
						//echo 'wspolrzedne uploadowane to: <br>'. $ax .'<br>'. $ay .'<br>'. $bx .'<br>'. $by .'<br>';
						//$przyrost_xab = $linia[$punktprawy][1] - $linia[$punktlewy][1] ;
						//$przyrost_yab = $linia[$punktprawy][2] - $linia[$punktlewy][2] ;
						$przyrost_xab = $bx - $ax ;
						$przyrost_yab = $by - $ay ;
						//echo 'przyrosty to: <br>'. $przyrost_xab .'<br>'. $przyrost_yab .'<br>';
						//obliczenie czwartaka:
						if ($przyrost_xab == 0 || $przyrost_yab == 0) 
						{
							$czwartak = 0;
						} else {
							$czwartak_rad = abs(atan($przyrost_yab / $przyrost_xab));
							$czwartak = $czwartak_rad * (200/pi());
						}
						
						//obliczenie azymutu:
						if ($czwartak < 100) 
						{
							if ($przyrost_xab > 0 && $przyrost_yab > 0) 
							{
								$azymut = $czwartak ;
							}
							else if ($przyrost_xab < 0 && $przyrost_yab > 0) 
							{
								$azymut = 200 - $czwartak ;
							}
							else if ($przyrost_xab < 0 && $przyrost_yab < 0) 
							{
								$azymut = 200 + $czwartak ;
							}
							else if ($przyrost_xab > 0 && $przyrost_yab < 0) 
							{
								$azymut = 400 - $czwartak ;
							}
							else if ($przyrost_xab == 0 && $przyrost_yab < 0) 
							{
								$azymut = 300;
							}
							else if ($przyrost_xab == 0 && $przyrost_yab > 0) 
							{
								$azymut = 100;
							}
							else if ($przyrost_yab == 0 && $przyrost_xab < 0) 
							{
								$azymut = 200;
							}
							else { 
								$azymut = 0 ;	
							}
						} //else {
							//echo 'blad! czwartak nie miesci sie w przedziale od -100 do 100 gradow'.'<br>';
						//	header('Location: blad.php');
						//	exit();
						//}
						//echo 'azymut to: <br>'. $azymut .'<br>';
						//kontrola obliczen azymutu:
						//$lewaStrona = tan(($azymut + 50)*pi()/200);
						//$prawaStrona = (($linia[$punktprawy][1] + $linia[$punktprawy][2]) - ($linia[$punktlewy][1] + $linia[$punktlewy][2])) / (($linia[$punktprawy][1] - $linia[$punktprawy][2]) - ($linia[$punktlewy][1] - $linia[$punktlewy][2])) ;
						if (($bx + $by) - ($ax + $ay) == 0 || ($bx - $by) - ($ax - $ay) == 0) 
						{
							$prawaStrona = 0;
							$lewaStrona = 0;
						} else {
							$prawaStrona = (($bx + $by) - ($ax + $ay)) / (($bx - $by) - ($ax - $ay)) ;
							$lewaStrona = tan(($azymut + 50)*pi()/200);
						}
						if (round($lewaStrona, 5) != round($prawaStrona, 5)) 
						//if ($lewaStrona != $prawaStrona) 
						{
							//echo 'Blad przy obliczaniu azymutu' . $prawaStrona . ' _NIE rowna sie_ ' . $lewaStrona . '<br>';
							header('Location: blad.php');
							exit();
						} else {
							//echo 'Azymut policzony poprawnie' . $prawaStrona . ' _rowna sie_ ' . $lewaStrona .'<br>';
						}  
						
						//obliczenie odleglosci
						$odlegloscAB = sqrt((pow($przyrost_xab, 2)) + (pow($przyrost_yab, 2))); 	
						if ($odlegloscAB == 0) 
						{
							header('Location: blad.php');
							exit();
						}
						//kontrola obliczenia dlugosci:
						if ($czwartak != 0) 
						{	
							$kontrola1 = abs($przyrost_xab) / cos($czwartak*pi()/200);
							$kontrola2 = abs($przyrost_yab) / sin($czwartak*pi()/200);
	
							//echo ' kontrola wynosi <b>' .$kontrola1 .' = '.  $kontrola2 . ' </b>'.'<br>' ;
						} 
						else if ($czwartak == 0 && $przyrost_yab == 0) 
						{
							$kontrola1 = $przyrost_xab;
						}
						else if ($czwartak == 0 && $przyrost_xab == 0) 
						{
							$kontrola2 = $przyrost_yab;
							$kontrola1 = 0;
						} else {
							//echo ' Blad w obliczeniach kontrolnych dlugosci !!!!';
							header ('Location: blad.php');
							exit();
						}
							if ($kontrola1 == $odlegloscAB || $kontrola2 == $odlegloscAB || $kontrola1 == $kontrola2) 
							{
									//echo 'Dlugosc obliczona poprawnie! ' .$kontrola1 . ' rowna sie ' . $odlegloscAB .' LUB '  .$kontrola2 . ' rowna sie ' . $odlegloscAB . '<br><h1>Katy w trojkacie</h1>' ;
							} else { 
								//echo 'Dlugossc obliczona blednie!!!! ' .$kontrola1 . ' nie rowna sie ' . $odlegloscAB .' LUB '   .$kontrola2 . ' nie rowna sie ' . $odlegloscAB; 
								header ('Location: blad.php');
								exit();
							}
							//obliczenie katow w trojakcie
							$gamma = (acos((pow($odlegloscAB,2) - (pow($odlegloscAP,2) + pow($odlegloscBP,2))) / (-2*$odlegloscAP * $odlegloscBP))) * 200/pi();
							$beta  = (acos((pow($odlegloscAP,2) - (pow($odlegloscAB,2 ) + pow($odlegloscBP,2))) / (-2*$odlegloscAB  * $odlegloscBP))) * 200/pi();
							$alfa  = (acos((pow($odlegloscBP,2) - (pow($odlegloscAP,2) + pow($odlegloscAB,2 )))/ (-2*$odlegloscAP * $odlegloscAB ))) * 200/pi();
							//echo 'katy to: <br> gamma '. $gamma .'<br> beta '. $beta .'<br> alfa '.$alfa .'<br>';
							//sprawdzenie czy suma katow w trojkacie wynosi 200 gradow:
							$suma_katow = $gamma + $beta + $alfa;
							//if (round($suma_katow, 4) != 200) 
							if ($suma_katow != 200) 
							{
								//echo 'Suma katow niezgodna (rozna od 200 gradow) ----> ' . $suma_katow .'<br>' ;
								header ('Location: blad.php');
								exit();
							} 
							else 
							{
								//echo 'Suma katow zgodna ----> ' . $suma_katow .'<br>';
							}
							
							//azymut A - P = azymut A - B - kąt alfa
							$azymutAP = $azymut - $alfa;
							$azymutAP_rad = $azymutAP * pi()/200 ;
							
							//obliczenie przyrostow XAP i YAP:
							$przyrost_xap = $odlegloscAP * cos($azymutAP_rad);
							$przyrost_yap = $odlegloscAP * sin($azymutAP_rad);
							
							//wspolrzedne punktu P:
								$px = $ax + $przyrost_xap;
								$py = $ay + $przyrost_yap;
							
							//kontrola obliczen:
							$azymutBA = $azymut + 200 ;
							$azymutBP = $azymutBA + $beta;
							$azymutBP_rad = $azymutBP * pi()/200;
							
							//przyrosty wcinanego punktu
							$przyrost_xbp = $odlegloscBP * cos($azymutBP_rad) ;
							$przyrost_ybp = $odlegloscBP * sin($azymutBP_rad) ;

							$px2 = $bx + $przyrost_xbp ;
							$py2 = $by + $przyrost_ybp ;
							if (round($px, 5) == round($px2, 5) && round($py, 5) == round($py2, 5)) 
							{
								//echo 'OK !!!! : <br> XP1 = ' .round($px, 5) . ' == '. round($px2, 5) .'<br> YP = ' . $py . ' == ' . $py2 ;
							}
							else
							{
								//echo 'ZLE !!!! : <br> XP1 = ' .$px . ' == '. $px2 .'<br> YP = ' . round($py, 5) . ' == ' . round($py2, 5) ;
							}
					// jesli punktu nie ma w zalaczonym pliku:		
}
?>