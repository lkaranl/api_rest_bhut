<?php
   
class ApiListCars{

	public function listCars()
	{
		echo '<pre>';
		$url = "http://157.230.213.199:3000/api/cars";
		$json = file_get_contents($url);
		$data = json_decode($json);

	    //crie uma variável para receber o código da tabela
	    $tabela = '<table border="1">';//abre table
	    $tabela .='<thead>';//abre cabeçalho
	    $tabela .= '<tr>';//abre uma linha
	    $tabela .= '<th>ID</th>';
	    $tabela .= '<th>Titulo</th>';
	    $tabela .= '<th>Marca</th>';
	    $tabela .= '<th>Preco</th>';
	    $tabela .= '<th>Idade</th>';
	    $tabela .= '</tr>';//fecha linha
	    $tabela .='</thead>'; //fecha cabeçalho
	    $tabela .='<tbody>';//abre corpo da tabela

		for ($i = 0; $i < count($data); $i++){
			//echo "<div>Carro: ".$data[$i]->title. "</div>";
			$tabela .= '<tr>'; // abre uma linha
			//$tabela .= '<td></td>'; // coluna Alvara
			$tabela .= '<td>'.$data[$i]->_id.'</td>'; //
			$tabela .= '<td>'.$data[$i]->title.'</td>';
			$tabela .= '<td>'.$data[$i]->brand.'</td>';
			$tabela .= '<td>'.$data[$i]->price.'</td>';
			$tabela .= '<td>'.$data[$i]->age.'</td>';

		}

		$tabela .='</tbody>'; //fecha corpo
    	$tabela .= '</table>';//fecha tabela
		echo $tabela;
	}	
};

$obj = new ApiListCars();
$obj->listCars();



