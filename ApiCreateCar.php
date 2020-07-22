<?php

class ApiCreateCar{

  // MUDE OS NOMES NA VARIAVEL $JsonDataEncoded PARA MUDAR OS DADOS DESEJADOS

	public function createCar()
		{
			echo '<pre>';

			$url = 'http://157.230.213.199:3000/api/cars';
			$ch = curl_init($url);
			
			// ************* MUDAR AQUI SE QUISER
			$jsonData = array("title" => "Uno teste 25", "brand" => "Fiat teste 25","price" => "100","age" => "15");
			// *************

			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data)));

			$jsonDataEncoded = json_encode($jsonData);

			echo "Cadastro adicionado com sucesso!!!<br/>";
			print_r($jsonData);


			curl_setopt($ch, CURLOPT_POST, 1);

			curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

			$result = curl_exec($ch);
			curl_close($ch);

			// ***************** CRIACAO DOS LOGS
			$url_aux = "http://157.230.213.199:3000/api/cars";
			$json_aux = file_get_contents($url_aux);
			$data_aux = json_decode($json_aux);
		
			$ultimo = count($data_aux) -1;
			$id_car = $data_aux[$ultimo]->_id;
			$id_log = count(file('log.txt'));

			$quebra = chr(13).chr(10);
			$hora = date('d/m/y - H:i:s');
			$arquivo = fopen('log.txt','a+');
		
			if ($arquivo) {
				if (!fwrite($arquivo, "$id_log | $hora | $id_car $quebra")) die('Não foi possível atualizar o arquivo.');
					fclose($arquivo);
				}
		}
};

$obj = new ApiCreateCar();
$obj->createCar();