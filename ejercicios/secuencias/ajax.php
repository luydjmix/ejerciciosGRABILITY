<?php
//$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
/* valor uno es 2*/

//$varA = $_POST['valorUno'];
//$varA += '4';
//
//$varB = $_POST['valorDos'];
//$varB += '23';
//
//$myMatrix[1][1][1] = '';
//$myMatrix[2][2][2] = '';
//$myMatrix[3][3][3] = '';
//
///*carga la informacion poscion (2,2,2)*/
//$myMatrix[2][2][2] = $varA;
///*consulta la matrix de 1 a 3*/
//foreach($myMatrix as $key => $sumaM):
//	if($key >= '1' && $key <= '3'){		
//		$indece[] = $myMatrix[$key][$key][$key];	
//	}
//	$suma = array_sum($indece);
//endforeach;
//echo $suma . '<br>';
///*carga la informacion poscion (1,1,1)*/
//$myMatrix[1][1][1] = $varB;
///*consulta la matrix de 2 a 4*/
//foreach($myMatrix as $keyB => $sumaMb):
//	if($keyB >= '2' && $keyB <= '4'){		
//		$indeceB[] = $myMatrix[$keyB][$keyB][$keyB];	
//	}
//	$sumaB = array_sum($indeceB);
//endforeach;
//echo $sumaB. '<br>';
///*consulta la matrix de 1 a 3*/
//foreach($myMatrix as $keyC => $sumaMC):
//	if($keyC >= '1' && $keyC <= '4'){		
//		$indeceC[] = $myMatrix[$keyC][$keyC][$keyC];	
//	}
//	$sumaC = array_sum($indeceC);
//endforeach;
//echo $sumaC. '<br>';

$miHojaPhp = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

/*echo $miHojaPhp;*/

if($_POST['p222']){
$varA = $_POST['p222'];
/*$varA += '4';*/
}else{
/*echo 'hola no hay valor';	*/
}
if($_POST['p111']):
$varB = $_POST['p111'];
/*$varB += '23';*/
else:
/*echo 'hola no hay valor';*/	
endif;
if($_POST['p222B']){
$varC = $_POST['p222B'];
/*$varC = '1';*/
}else{
/*echo 'hola no hay valor';*/	
}
$limConsulta = $_POST['limite'];
/*echo $limConsulta.'<br>';*/
$myMatrix[1][1][1] = '';
$myMatrix[2][2][2] = '';
$myMatrix[3][3][3] = '';


foreach($myMatrix as $keyBorra => $SumaBorra):
	unset($myMatrix[$keyBorra][$keyBorra][$keyBorra]);
endforeach;
echo '<br>';
if($varA && $varB && $limConsulta):
/*realiza un ciclo para per cuantas consultas puede realizar */
for($i = 0; $i <= $limConsulta; $i++ ):
/*en este ocacion solo se ejecutan 4 consultas pero el limite de consultas es 5 qe viene de la varible($limConsulta)*/
	switch($i):
		case 1:
			/*carga la informacion poscion (2,2,2)*/
			$myMatrix[2][2][2] = $varA;
			/*consulta la matrix de 1 a 3*/
			foreach($myMatrix as $key => $sumaM):
				if($key >= '1' && $key <= '3'){		
					$indece[] = $myMatrix[$key][$key][$key];	
				}
				$suma = array_sum($indece);
			endforeach;
			echo $suma . '<br>';
		break;
		case 2:
			/*carga la informacion poscion (1,1,1)*/
			$myMatrix[1][1][1] = $varB;
			/*consulta la matrix de 2 a 4*/
			foreach($myMatrix as $keyB => $sumaMb):
				if($keyB >= '2' && $keyB <= '4'){		
					$indeceB[] = $myMatrix[$keyB][$keyB][$keyB];	
				}
				$sumaB = array_sum($indeceB);
			endforeach;
			echo $sumaB. '<br>';
		break;
		case 3:	
			/*consulta la matrix de 1 a 3*/
			foreach($myMatrix as $keyC => $sumaMC):
				if($keyC >= '1' && $keyC <= '4'){		
					$indeceC[] = $myMatrix[$keyC][$keyC][$keyC];	
				}
				$sumaC = array_sum($indeceC);
			endforeach;
			echo $sumaC. '<br>';
		break;
	endswitch;
endfor;
endif;
foreach($myMatrix as $keyBorra => $SumaBorra):
	unset($myMatrix[$keyBorra][$keyBorra][$keyBorra]);
endforeach;

/*echo 'hole mundo<br>'.$_POST['limiteB'].' - '.$_POST['p222B'];*/
/*realiza un ciclo para per cuantas consultas puede realizar */
if(isset($_POST['limiteB']) && isset($_POST['p222B'])){
/*echo 'hole mundo 2<br>'.$_POST['limiteB'].' - '.$_POST['p222B'];*/
$limConsulta = $_POST['limiteB'];
for($i = 0; $i <= $limConsulta; $i++ ):
/*en este ocacion solo se ejecutan 3 consultas pero el limite de consultas es 4 qe viene de la varible($limConsulta)*/
	switch($i):
		case 1:
			/*carga la informacion poscion (2,2,2)*/
			$myMatrix[2][2][2] = $varC;
			/*consulta la matrix de 1 a 3*/
			foreach($myMatrix as $keyD => $sumaMD):
				if($keyD = '1'){		
					$indece[0	] = $myMatrix[$keyD][$keyD][$keyD];	
				}
				if($keyD = '1'){		
					$indeceD[0] = $myMatrix[$keyD][$keyD][$keyD];	
				}
				$sumaD = array_sum($indeceD);
			endforeach;
			echo $sumaD . '<br>';
		  break;
		  case 2:
			/*consulta la matrix de 1 a 3*/
			foreach($myMatrix as $keyE => $sumaME):
				if($keyE >= '1' && $keyE <= '2'){		
					$indeceE[] = $myMatrix[$keyE][$keyE][$keyE];	
				}
				$sumaE = array_sum($indeceE);
			endforeach;
			echo $sumaE. '<br>';
		  break;
		  case 3:	
			/*consulta la matrix de 1 a 3*/
			foreach($myMatrix as $keyF => $sumaMF):
				if($keyF == '2'){		
					$indeceF[0] = $myMatrix[$keyF][$keyF][$keyF];	
				}
				$sumaF = array_sum($indeceF);
				if($keyF == '2'){		
					$indeceF[0] = $myMatrix[$keyF][$keyF][$keyF];	
				}
				$sumaF = array_sum($indeceF);
			endforeach;
			echo $sumaF . '<br>';
		  break;
	endswitch;
endfor;
echo'<a href="index.php">Calcular de nuevo</a>';
}/*else{
echo 'hole mundo 3<br>'.$_POST['limiteB'].' - '.$_POST['p222B'];	
}*/

?>

