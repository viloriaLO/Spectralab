<?php 
function mostrarErrores($errores, $campo){
	$alert = '':
	if(isset($errores[$campo]) && !empty($campo)){
		alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
	}
	return $alerta;
}
 ?>