<?php 
/*
******************************************************
por: luis erasmos suarez rondon
url: http://ejercicios.lesframework.com/secuencias/index.php
fecha: 13-06-2016

******************************************************
este codigo ejecuta dos secuencias con barios parametros de filtro
el onjetivo es que la secuensia pueda relizar una seria de 
impresiones para obtener una secuencia de numeros despues el ingreso
de de algnos valores dependiendo de los valores canbia la impresion los valores ejemplo son 
2
4
5
4
23
--
1
esta secuensia debe realizar una impresion de 
4
4
27
--
0
1
1
terminado la jecucion de las dos secuencias
******************************************************
*/
?>

<input id="url" type="hidden" value="<?php echo $miHojaPhp ?>">
<div id="procesaInfo">
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="jqs.js"></script>

<form action="/ajax.php" method="post" id="formulario" style="display:none;">
<input name="limiteB" type="text" id="limite" placeholder="Ingrese el limite" size="40">
<br><br>
<input name="p222B" type="text" id="p222B" placeholder="ingrese la pocicion (2,2,2)" size="40">
<br><br>
<input name="envio" type="submit" id="envio" form="formulario" value="Calcular">
<input name="muestra" type="hidden" id="muestra" value="0">
<br><br>
</form>
