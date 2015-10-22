<?php 
	require '../connection/connection.php';

	$app->group('/api', function () use ($app)	{

		// =============================================================
		//
		//  POST / Obtiene restaurantes
		//   
		// =============================================================
		$app->post('/', function () use ($app) {
			
			$query = new Connection();
			// Definir SP a consultar en la BD
			$sp = 'SP_ObtenRestaurante';
			// Hacer la llamada
			$query->callSp($sp);
			// Preparar araray para almacenar la respuesta
			$responserestarants = array();
			foreach ($query as $param) {
				$res = array(
					'idSucursal' => $param->idSucursal, 
					'idStatus' => $param->idStatus, 
					'nombre' => $param->nombre, 
					'direccion' => $param->direccion, 
					'latitud' => $param->latitud, 
					'longitud' => $param->longitud, 
					'distancia' => $param->distancia
				);

				$restarants[] = $res;
			}

			$response = ('restaurante' => $response);

			$app->response->setStatus(200);
			$app->response->setBody(json_encode($response));

				
		});
		
		$app->options('/', function () use ($app) {
			$app->response->setStatus(204);
			$app->response->setBody(json_encode(array('message' => 'ok')));
		});
		
	});

 ?>

