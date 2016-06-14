<?php 
/*
******************************************************
por: luis erasmos suarez rondon
url: http://ejercicios.lesframework.com/
fecha: 13-06-2016

******************************************************
en esta parte encontrara la informacion que trascribi del codigo ejemplo
despues encontrara el codigo que me parese a loque e logrado entender 
seria una solucion biable al problema, relizando algunas optimizaciones.
******************************************************
*/

//public function post_confirm(){
//	$id = $_POST['id'];
//	$servicio = $_POST['service_id'];
//	if($servicio != NULL){
//		if($servicio->status_id == '6'){
//			return respuesta(json_encode(array('error'=>'2')));
//		}
//		if($servicio->driver_id == NULL && $servicio->status_id == '1'){
//			$servicio = service(update($id,
//			array('driver_id'=>$_POST['driver_id'],'status_id'=>'2'
//			//Up Carro
//			//,'pwd'=>md5($_POST['pwd'])	
//			)));
//			
//			driver(update($_POST['driver_id'], array('available'=>'0')));
//			
//			$diverTmp = driver($_POST['driver_id']);
//			
//			service(update($id,
//			array('car_id'=> $diverTmp->car_id
//			//Up Carro
//			//,'pwd'=>md5($_POST['pwd'])	
//			)));
//			//notificar a usuario
//			$pushMessager = 'Tu servicio esta confirmado!';
//			/* $servicio = service($_POST[$id]);
//			$push = push(make());
//			if($servicio->user->type ==){//iphone
//				$pushAns = $push->ios($servicio->user->uuid, $pushMessager);
//			}else{
//				$pushAns = $push->android($servicio->user->uuid, $pushMessager);
//			}
//			*/
//			$servicio = service($id);
//			$push = Push(make());
//			if($servicio->user->uuid == ''){
//				return Response(json_encode(array('error'=>'0')));	
//			}
//			if($servicio->user->type == '1'){
//				//iphone
//				$resul = $push->ios($servicio->user->uuid, $pushMessager, 1, 'honk.wav', 'Open', array('serviceId'=> $servicio->id));
//				
//			}else{
//				$resul = $push->android2($servicio->user->uuid, $pushMessager, 1, 'default', 'Open', array('serviceId'=> $servicio->id));
//			}
//			return Response(json_encode(array('error'=>'0')));	
//		}else{
//			return Response(json_encode(array('error'=>'1')));	
//		}		
//	}else{
//		return Response(json_encode(array('error'=>'3')));	
//	}
//}





public function post_confirm(){
	// segun la informacion del ejercicio indica que ingresar son valores por el metodo post
	// toma el id del conductor 
	$id = $_POST['conductor_id']; 
	// toma el id del servicio
	$servicio = $_POST['service_id'];
	// verifica que el id del conductor y el servicio tengan un valor a mi pareser se deberia verificar lo dos valores 
	if($id != NULL && $servicio != NULL){
		
		// en esta parte asumo que el valor 6 es un indice para identificar que un servicio ya esta enrtado o solicitado con el mismo servicio
		//en este caso veo que esto tien dos posibles costantes pero si el caso fuera para varias costantes para mi seria mas funcional un switch
		
		switch($servicio->status_id):
			case 6:
			    // en este caso y dando mejora al proble de los return lo cambio por una varible para que tome el valor la cual consultare al final 
				// para que se genere el retorno mas favorble
				$mesajeRespuestas = respuesta(json_encode(array('error'=>'2')));
			break;
			case 1:
				//verifico qe el estatus del servicio sea = a null para crear un nuevo estatus de lo contrario cambiar informacion de respuestaa
				if($servicio->driver_id == NULL){
					// cargo toda la informacion del servicio para poner lo en estado activo prticular mente en el codigo anterior primero
					// carga una parte de la informacion y reliza unas consultas para posterior mente cargar todo yo creo que lo mejor es 
					// consultar todo y realizar una sola conslta 
					driver(update($_POST['driver_id'], array('available'=>'0')));
			
					$diverTmp = driver($_POST['driver_id']);
					
					$servicio = service(update($id,
					array('driver_id'=>$_POST['driver_id'],'status_id'=>'2','car_id'=> $diverTmp->car_id
					//Up Carro
					//,'pwd'=>md5($_POST['pwd'])	
					)));
					//notificar a usuario
					$pushMessager = 'Tu servicio esta confirmado!';
					// en este caso no reconosco el opjetibo en los procesos sientes y la necesidad de 
					/*$servicio = service($id);*/
					$push = Push(make());
					
				}else{
					// informacion de respuesta de para el suario cuando el servio ya esta enrutado
					$pushMessager = 'ya esta enrutado tu servio prondo aribara a tu direccion';
				}
				if($servicio->user->uuid == ''){
						 $mesajeRespuestas = Response(json_encode(array('error'=>'0')));	
				}else{
					if($servicio->user->type == '1'){
					
						$resul = $push->ios($servicio->user->uuid, $pushMessager, 1, 'honk.wav', 'Open', array('serviceId'=> $servicio->id));
							
					}else{
						
						$resul = $push->android2($servicio->user->uuid, $pushMessager, 1, 'default', 'Open', array('serviceId'=> $servicio->id));
						
					}
					// en el codigo anterior no se mestra una forma de enviar la informacion en este caso lo manejo con una funcion que envia la 
					// informacion dependiendo de la plataforma
					muestraAppMovil($resul);
				}
			break;
			default:
				$mesajeRespuestas = Response(json_encode(array('error'=>'1')));
			break;
		endswitch;
		
				
	}else{
		$mesajeRespuestas = Response(json_encode(array('error'=>'3')));	
	}
	// en este caso como lo comentaba solo retornaria una de los posibles mensajes que retornat
	return $mesajeRespuestas;
}

?>