<?php 
	function getModulosArray(){
		$a = [
			'1' => 'Tipo documento',
			'2' => 'Sexo',
			'3' => 'Estado civil',
			'4' => 'Grado Instrucción',
			'5' => 'Área',
			'6' => 'Puesto',
			'7' => 'Resultado',
			'8' => 'Escala del Dolor',
			'9' => 'Tipo Evaluación',
			'10' => 'Grado',
			'11' => 'Altitud Labor'
		];
		return $a;
	}
	function getMeses(){
		$m = [
			'01' => 'Enero',
			'02' => 'Febrero',
			'03' => 'Marzo',
			'04' => 'Abril',
			'05' => 'Mayo',
			'06' => 'Junio',
			'07' => 'Julio',
			'08' => 'Agosto',
			'09' => 'Septiembre',
			'10' => 'Octubre',
			'11' => 'Noviembre',
			'12' => 'Diciembre',
		];
		return $m;
	}

	function getOrina(){
		$m = [
			'1' => 'Cantidad',
			'2' => 'Aspecto',
			'3' => 'Cristales',
			'4' => 'Otros',
		];
		return $m;
	}

	function getHeces(){
		$m = [
			'1' => 'Muestra',
			'2' => 'Parásitos',
			'3' => 'Detalle',
			'4' => 'Germen Aislado',
			'5' => 'Antibiograma'
		];
		return $m;
	}

	//Key Value From JSon
	function kvfj($json, $key){
		if($json == null):
			return null;
		else:
			$json = $json;
			$json = json_decode($json, true);
			if(array_key_exists($key, $json)):
				return $json[$key];
			else:
				return null;
			endif;
		endif;
	}
	//Key Value From JSon - Radio Boton Si/No
	function kvfjsn($json, $key){
		if($json == null):
			return 2;
		else:
			$json = $json;
			$json = json_decode($json, true);
			if(array_key_exists($key, $json)):
				return $json[$key];
			else:
				return 2;
			endif;
		endif;
	}
	function kvfjns($json, $key){
		if($json == null):
			return 1;
		else:
			$json = $json;
			$json = json_decode($json, true);
			if(array_key_exists($key, $json)):
				return $json[$key];
			else:
				return 2;
			endif;
		endif;
	}

	//Key Value From Array
	function kvfa($arr, $key){
		if($arr == null):
			return null;
		else:
			$arr = $arr;
			$arr = json_decode($arr, true);
			if(in_array($key, $arr)):
				return true;
			else:
				return false;
			endif;
		endif;
	}

	//Key Value From Array2
	function kvfa2($arr, $key){
		if($arr == null):
			return null;
		else:
			if(in_array($key, $arr)):
				return true;
			else:
				return false;
			endif;
		endif;
	}

	function priesgos($riesgos){
		$cto = 0;
		$respuesta = '';
        if(kvfj($riesgos, 'prbiologico')){
            $respuesta = $respuesta . 'Biológicos';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prcancerigenos')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Cancerígenos';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prcargas')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Cargas';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prmetpesado')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Metales pesados';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prmovrep')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Mov. Repet.';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prmutagenico')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Mutagénicos';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prpolvo')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Polvo';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prpostura')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Posturas';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prpvd')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'PVD';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prruido')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Ruido';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prsolvente')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Solventes';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prtemperaturas')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Temperaturas';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prturno')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Turnos';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prvibseg')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Vib. Segmentaria';
			$cto = 1;
        }
        if(kvfj($riesgos, 'prvibtot')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . 'Vib. Total';
			$cto = 1;
        }
        if(kvfj($riesgos, 'protros')){
			if($cto == 1){
				$respuesta = $respuesta . ', ';
			}
            $respuesta = $respuesta . kvfj($riesgos, 'protros');
        }
		return mb_strtoupper($respuesta);
	}

	function valreferencial($tipo, $edad, $sexo, $val1, $val2){
		switch($tipo){
			case 1:
				return $val1;
			case 2:
				if($sexo == 'M'){
					return $val1;
				}else{
					return $val2;
				}
			case 3:
				if($edad >= 18){
					return $val1;
				}else{
					return $val2;
				}				
		}
	}

	function preProm($cant, $pant, $cnue, $pnue){
		$pre = round((($cant * $pant) + ($cnue * $pnue)) / ($cant + $cnue), 4);
		return($pre);
	}

	function prePromE($cant, $pant, $cnue, $pnue){
		if($cant - $cnue == 0){
			$pre = 0.00;
		}else{
			$pre = round((($cant * $pant) - ($cnue* $pnue)) / ($cant - $cnue), 4);
		}		
		return($pre);
	}

	function numDoc($serie,$numero){
		if(strlen(trim($serie))==0){
			return(trim($numero));
		}else{
			return(trim($serie).'-'.trim($numero));
		}
	}

	function pAnterior($periodo){
		$mes = substr($periodo, 0,2);
		$anio = substr($periodo, 2);
		if($mes == '01'){
			$n = '12'.strval(intval($anio)-1);
		}else{
			$n = str_pad(intval($mes)-1, 2, '0', STR_PAD_LEFT).$anio;
		}
		return $n;
	}
	
	function pSiguiente($periodo){
		$mes = substr($periodo, 0,2);
		$anio = substr($periodo, 2);
		if($mes == '12'){
			$n = '01'.strval(intval($anio)+1);
		}else{
			$n = str_pad(intval($mes)+1, 2, '0', STR_PAD_LEFT).$anio;
		}
		return $n;
	}

	function periodo(){
		$dia = \Carbon\Carbon::now();
		$periodo = substr($dia,5,2).substr($dia,0,4);
		return $periodo;
	}


?>