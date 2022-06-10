<?php
// $id = $_POST["id"];
// $id_user = $_POST["id_user"];
// echo $id;
// echo $id_user;
$dados = $_POST["dados"];
print_r($dados);

require_once "lib/nusoap.php";
$client = new nusoap_client(
	'http://appserver-01.alunos.di.fc.ul.pt/~asw14/projeto2/servidor3/ws_recolha_serv.php'
);
$error = $client->getError();
$result = $client->call('VolRecolhaDoacao', array('id' => $dados[0], 'id_user' => $dados[1], 'id_doacao' => $dados[2]));	//handle errors
// var_dump($result);
// print_r($result);


if ($client->fault)
{	//check faults
}
else
{	$error = $client->getError();	//handle errors
	echo "<h2>O resultado é: </h2>".$result;
	// foreach(explode(" ",$result) as $d){
	// 	echo  "".$d."<br>";
	// }
	// echo "<h2>O resultado 2 é: </h2>".$result[1];
}


// echo "<h2>Pedido</h2>";
// echo "<pre>" . htmlspecialchars($client->request, ENT_QUOTES) . "</pre>";
// echo "<h2>Resposta</h2>";
// echo "<pre>" . htmlspecialchars($client->response, ENT_QUOTES) . "</pre>";
?>