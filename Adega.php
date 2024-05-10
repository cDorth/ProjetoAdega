<?php



$conn = new PDO("mysql:dbname=adegaa1;host=localhost","root","");

$stmt = $conn->prepare("INSERT INTO cliente(nome, dt_nasc, logradouro, bairro, cidade, estado, cep, celular, rg, cpf)
 VALUES(:NOME, :DT_NASC, :LOGRADOURO, :BAIRRO, :CIDADE, :ESTADO, :CEP, :CELULAR, :RG, :CPF)");

$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":DT_NASC", $data);
$stmt->bindParam(":LOGRADOURO", $logradouro);
$stmt->bindParam(":BAIRRO", $bairro);
$stmt->bindParam(":CIDADE",  $cidade);
$stmt->bindParam(":ESTADO", $estado);
$stmt->bindParam(":CEP", $cep );
$stmt->bindParam(":CELULAR", $celular);
$stmt->bindParam(":RG", $rg);
$stmt->bindParam(":CPF", $cpf);


$nome = $_GET['nome'];
$data = $_GET['data'];
$logradouro =$_GET['logradouro'];
$bairro = $_GET['bairro'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];
$cep = $_GET['cep'];
$celular = $_GET['celular'];
$rg = $_GET['rg'];
$cpf = $_GET['cpf'];

$stmt->execute();

echo"<h2>DADOS REALIZADOS COM SUCESSO!</h2>";

echo"Nome: ".$nome."<br/>";
echo"Data: ".$data."<br/>";
echo"Logradouro".$logradouro."<br/>";
echo"Bairro: ".$bairro."<br/>";
echo"Cidade: ".$cidade."<br/>";
echo"Estado: ".$estado."<br/>";
echo"CEP: ".$cep."<br/>";
echo"RG: ".$rg."<br/>";
echo"CPF: ".$cpf."<br/>";




?>