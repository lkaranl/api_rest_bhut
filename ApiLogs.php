<?php

class ApiLogs{

	public function logs()
	{
		$arquivo = fopen ('log.txt', 'r');
		while( !feof($arquivo))
		{
			$linha = fgets($arquivo);
			echo $linha ."<br>";
		}
		fclose($arquivo);
	}
};

$obj = new ApiLogs();
$obj->logs();