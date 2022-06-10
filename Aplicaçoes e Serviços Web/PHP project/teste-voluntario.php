<?php
// get the q parameter from URL
$q = $_REQUEST["q"];
$dbhost = "appserver-01.alunos.di.fc.ul.pt";
$dbuser = "asw14";
$dbpass = "grupo14asw";
$dbname = "asw14";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_error()) {
die("Database connection failed:".mysqli_connect_error());
}
// linhas de cima -> include include "auxiliares/abreconexao.php";

$query = "SELECT cc , nome, nascimento, carta, genero, email, telefone, concelho, freguesia, distrito, foto
FROM voluntario";


$dados_voluntario = array();
$res = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_assoc($res)) {
        $a['nome'] = $row["nome"];
        $a['cc'] = $row["cc"];
        $a['nascimento'] = $row["nascimento"];
        $a['carta'] = $row["carta"];
        $a['genero'] = $row["genero"];
        $a['email'] = $row["email"];
        $a['telefone'] = $row["telefone"];
        $a['concelho'] = $row["concelho"];
        $a['freguesia'] = $row["freguesia"];
        $a['distrito'] = $row["distrito"];
        $a['foto'] = $row["foto"];

        $dados_voluntario[] = $a;
    }

if ($res) {
// echo "sucesso";
} else {
echo "Erro: failed" . $query . "<br>" . mysqli_error($conn);
}
// Termina a ligação com a base de dados
mysqli_close($conn);

$json_data['voluntario'] = $dados_voluntario;
// $json_data['instituicao'] = $dados_instituicao;

echo json_encode($json_data, JSON_UNESCAPED_UNICODE);
?>