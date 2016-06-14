$(document).ready(function() {
	
	var nombreInput = "Caja";
	var idInput = "caja";
	
	for(var i = 0; i<=2 ; i++){
		$('#procesaInfo').append('<input name="'+nombreInput+i+'" type="hidden" id="'+idInput+i+'" value="0" >');
	}
	
});

$(document).ready(function() {
	var capturaA = '';
	    for(var i=0; i<=2; i++){	
		capturaA = prompt("ingrse limite", "");
		$('#caja0').val(capturaA);
		}
		capturaA = prompt("valor para la celda (2,2,2)", "4");
		$('#caja1').val(capturaA);
		
		capturaA = prompt("valor para la celda (1,1,1)", "23");
		$('#caja2').val(capturaA);
});

$(document).ready(function() {
	
    var valorA = $('#caja0').val();
	var valorB = $('#caja1').val();
	var valorC = $('#caja2').val();
	/*var url = $('#url').val();*/
	/*alert(valorA);*/
	$.ajax({
		url: '/ajax.php',
		type:'POST',
		data: 'limite='+valorA+'&p222='+valorB+'&p111='+valorC
		}).done(
		function(e){
			$('#procesaInfo').append(e);	
		}
		);
		$('#formulario').show('slow');
});


