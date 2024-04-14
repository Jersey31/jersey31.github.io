<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		textarea{
			max-height: 300px;
			min-height: 100px;
			max-width: 300px;
			min-width: 300px;
		}
		body{
			background-color: #f0f3f8;
			font-family: Arial, sans-serif;
	        margin: 0;
	        padding: 0;
		}
		.container{
			width: 100%;
			max-width: 350px;
			margin: 250px auto;
			padding: 30px;
			border-radius: 15px;
			background-color: #ffffff;
		}

	</style>
	<title>zi</title>
</head>
<body>

<div class="container">
	<form method="post">

		<h1>Enviame un Gmail</h1>

		Tu nombre: <br>
		<input type="text" name="name" placeholder="Nombre" required=""><br>

		Direccion de email: <br>
		<input type="text" name="email" placeholder="Email" required=""><br>

		Tu asunto: <br>
		<input type="text" name="asunto" placeholder="Atunto" required=""><br>

		Tu comentario: <br>
		<textarea name="msg" placeholder="Escribe tu comentario"></textarea><br>

		<input type="submit" name="enviar" value="Enviar">
	</form>
</div>
<?php
if(isset($_POST['enviar'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['msg'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$asunto = $_POST['asunto'];
		$msg = $_POST['msg'];
		$header = "From: buss.jersey@gmail.com" . "\r\n";
		$header.= "Reply-to: buss.jersey@gmail.com" . "\r\n";
		$header.= "X-Mailer: PHP/" . phpversion();
		$mail=mail($email, $asunto, $msg);
		echo $header;
		if($mail){
			echo "Enviado Exitosamente";
		}else{
			echo "Ha ocurrido un error";
		}
	}
}
?>
</body>
</html>