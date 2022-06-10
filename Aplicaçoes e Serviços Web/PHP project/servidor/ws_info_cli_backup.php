<?php
$id = $_POST["id"];
echo $id;

require_once "lib/nusoap.php";
$client = new nusoap_client(
	'http://appserver-01.alunos.di.fc.ul.pt/~asw14/projeto2/servidor/ws_info_serv.php'
);
$error = $client->getError();
$result = $client->call('getInfoInst', array('id' => $id));	//handle errors
// var_dump($result);
// echo $result;


if ($client->fault)
{	//check faults
}
else
{	$error = $client->getError();	//handle errors
	$stringSeparada = explode("-", $result);
	$disps = explode("!", $stringSeparada[0]);
	echo "<h2>Informação sobre a instituição: </h2>".$stringSeparada[1];
	// echo "<h2>Dias em que é preciso voluntários: </h2>".$stringSeparada[1];
	echo "<h2>Dias em que é preciso voluntários: </h2>";

	for ($i = 0; $i < count($disps); $i++) {
		$indice = $i + 1; 
		echo "<p>".$indice. " - " .$disps[$i]."<p>";
	}
	// echo "<p>".print_r($stringSeparada)."<p>";
	// echo "<p>".print_r($result)."<p>";
}


// echo "<h2>Pedido</h2>";
// echo "<pre>" . htmlspecialchars($client->request, ENT_QUOTES) . "</pre>";
// echo "<h2>Resposta</h2>";
// echo "<pre>" . htmlspecialchars($client->response, ENT_QUOTES) . "</pre>";
?>