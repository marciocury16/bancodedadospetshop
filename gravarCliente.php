<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastro de Clientes</title>
	</head>

	<body>
		<h1>Clientes</h1>
		<hr>
		<h3>Cadastrando...</h3>
<?php



$nomeCliente   =  $_GET["nomeCliente"];
$nascimento    =  $_GET["nascimento"];
$sexo          =  $_GET["sexo"];
$estadoCivil   =  $_GET["estadoCivil"];
$email         =  $_GET["email"];
$receberEmail  =  $_GET["receberEmail"];
$ddd1          =  $_GET["ddd1"];
$telefone1     =  $_GET["telefone1"];
$tipo1         =  $_GET["tipo1"];
$ddd2          =  $_GET["ddd2"];
$telefone2     =  $_GET["telefone2"];
$tipo2         =  $_GET["tipo2"];
$ddd3          =  $_GET["ddd3"];
$telefone3     =  $_GET["telefone3"];
$tipo3         =  $_GET["tipo3"];
$observacao    =  $_GET["observacao"];



if($nomeCliente=="")
{
die("<b>Nome do cliente</b> deve ser informado.");
}
if($nascimento=="")
{
die("<b>Data de nascimento </b> deve ser informado.");
}
if($estadoCivil=="")
{
die("<b>Estado Civil  </b> deve ser informado.");
}
if($email=="")
{
die("<b>Email </b> deve ser informado.");

}


			echo "Nome do cliente: <b>$nomeCliente</b> <br>";
			echo "data de nascimento:  <b>$nascimento</b> <br>";
			echo "Sexo:  <b>$sexo</b> <br>";
			echo "estadoCivil: <b>$estadoCivil</b> <br>";
			echo "email : <b>$email</b> <hr>";


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "conectado";


$db = mysqli_select_db($conn, "cadastro") or
die("Erro na abertura do banco de dados: " . mysqli_error($conn) );

$sql = "INSERT INTO cliente (nomeCliente       	  ,
	nascimento                   				  ,
	sexo                         				  ,
	estadoCivil                   				  ,
	email                		        		  ,
	receberEmail                                  ,
	ddd1                    	      			  ,
	telefone1                        			  ,
	tipo1                        				  ,
	ddd2                      					  ,
	telefone2                    				  ,
	tipo2                        				  ,
	ddd3                     					  ,
	telefone3                   				  ,
	tipo3           	         				  ,
	observacao
	) values('$nomeCliente','$nascimento','$sexo','$estadoCivil','$email','$receberEmail','$ddd1','$telefone1','$tipo1','$ddd2','$telefone2','$tipo2','$ddd3','$telefone3','$tipo3','$observacao')";

mysqli_query($conn, $sql) or
die("Erro na inserção de registro de cliente: " . mysqli_error($conn) );


?>	
<hr>
		Clique <a href="cadastro.html">aqui</a> para cadastrar um novo cliente.
	</body>
</html>