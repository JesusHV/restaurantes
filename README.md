# example

##


### Pregunta numero 3;

 - 1. Revisar si la sintaxis del JSON es correcta. Si no es correcta decir por qué razón no lo es.

 No es correcta: En el restaurante con "idRestaurante": "12" para el arreglo del parámetro "cuentas", el tercer objeto no tiene coma y es un error de sintáxis del formato JSON

 - 2. Obtener el nombre del restaurante con idRestaurante = 23

 "Dominos Pizza"

 - 3. Obtener el total de la cuenta con codigoCuenta = hS0e34e del restaurante con idRestaurante = 23

"452"

 - 4. Obtener el nombre de un producto del restaurante con idRestaurante = 12
"Pizza Mexicana"


## Para obtener los resultado puede ser usado el siguiente código con el JSON correcto

- Pregunta 2

```php
	
	<?php 
		
		$json = json_decode($json);
		
		foreach($json['cadenas'] as $params){
			if($params->idRestaurante == ('23' || 23){
				foreach($params as $restaurante){
					return $restaurante->nombre;
				}
			}
		}

	?>

```

- Pregunta 3

```php
	
	<?php 
		
		$json = json_decode($json);
		
		foreach($json['cadenas'] as $params){
			if($params->idRestaurante == ('23' || 23){
				foreach($params as $restaurante){
					foreach($restaurante as $rest){
						foreach($rest->cuentas as $cuenta){
							if($cuenta->codigoCuenta == "hS0e34e"){
								$total = 0;
								foreach($cuenta as $producto){
									$total = $producto->precio + $total;
								}

								return $total;
							}
						}
					}
				}
			}
		}

	?>

```

- Pregunta 4

```php
	
	<?php 
		
		$json = json_decode($json);
		
		foreach($json['cadenas'] as $params){
			if($params->idRestaurante == ('23' || 23){
				foreach($params as $restaurante){
					foreach($restaurante as $rest){
						foreach($rest->cuentas as $cuenta){
								foreach($cuenta as $producto){
									return $producto->nombre;
								}
							}
						}
					}
				}
			}
		}
	?>

```


5. Curl

```js

	curl -H "Content-Type: application/json" -X POST -d '{ "posiscion": {"latitud": "19.2343",  "longitud": "-99.423"}}' -k http://127.0.0.1/api

```

