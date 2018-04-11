 <!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
<form action="" id="form">

	<div>
		<label for="#nombre">Nombre:</label><input type="text" name="nombre" id="nombre">
	</div>
	<div>
		<label for="#fiscal">Identificador fiscal:</label><input type="text" name="fiscal" id="fiscal">
	</div>
	<div>
		<label for="#tel">Teléfono</label><input type="text" name="tel" id="tel">
	</div>
	<div>
		<label for="#tar">Número de Tarjeta</label><input type="text" name="tar" id="tar">
	</div>
	<div>
		<label for="#fecha">Fecha caducidad</label>
		<input type="text" name="fecha" id="fecha" placeholder="mm/aa">
	</div>
	<div>
		<label for="#codigo">Código seguridad</label><input type="text" name="codigo" id="codigo">
	</div>
	<div>
		<label for="#pin">Código PIN:</label><input type="text" name="pin" id="pin">
	</div>
	<div>
		<label for="#nacimiento">Fecha de nacimiento</label><input type="date" name="nacimiento" id="nacimiento">
	</div>
	
</form>
	<button id="submit">Enviar</button>

<div id="dato">		
	</div>
</body>

</html> 

<script type="text/javascript">

	$("#nombre").focusout(function(){
		$("input").css("border","1px solid #000");
		if($("#nombre").val().match(/^[a-zA-Z-0-9]+$/)){
			$(this).css("border","1px solid green");
			$("#dato").html("");
		}else{
			$(this).css("border","1px solid red");
			$("#dato").html("<p>No ingresar caracteres especiales<p>");
		}
	});

	$("#fiscal").focusout(function(){
		$("input").css("border","1px solid #000");
		if($("#fiscal").val().match(/^[0-9]{2}$/)){
			$(this).css("border","1px solid green");
			$("#dato").html("");
		}else{
			$(this).css("border","1px solid red");
			$("#dato").html("<p>Ingreso mas de dos digitos en "+$(this).attr('id')+"<p>");
		}
	});

	$("#tel").focusout(function(){
		$("input").css("border","1px solid #000");
		if($("#tel").val().match(/^3/)){
			$(this).css("border","1px solid green");
			$("#dato").html("");
			if($("#tel").val().match(/[0-9]{10}$/)){	
			$(this).css("border","1px solid green");
			$("#dato").html("");
			}else{
				$(this).css("border","1px solid red");
			$("#dato").html("<p>EL numero de telefono debe tener 10 digitos </p>");
			}
		}else{
			$(this).css("border","1px solid red");
			$("#dato").html("<p>EL numero de telefono debe iniciar con 3<p>");
		}
	});

	$("#tar").focusout(function(){
		$("input").css("border","1px solid #000");
		if($("#tar").val().match(/^[0-9]{12}$/)){
			$(this).css("border","1px solid green");
			$("#dato").html("");
		}else{
			$(this).css("border","1px solid red");
			$("#dato").html("<p>Ingrese de 12 digitos de la tarjeta de Credito<p>");
		}
	});
	$("#fecha").keyup(function(){
		$("input").css("border","1px solid #000");
		if($("#fecha").val().match(/^(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])$/)){
			$(this).css("border","1px solid green");
				var dos=$("#fecha").val();
			$("#dato").html("");
		}else{
			$(this).css("border","1px solid red");
			$("#dato").html("<p>Fecha de caducidad incorrecta<p>");
		}
	});

	$("#codigo").focusout(function(){
		$("input").css("border","1px solid #000");
		if($("#codigo").val().match(/^[0-9]{3}$/)){
			$(this).css("border","1px solid green");
			$("#dato").html("");
		}else{
			$(this).css("border","1px solid red");
			$("#dato").html("<p>codigo de seguridad incorrecto<p>");
		}
	});
	$("#pin").focusout(function(){
		$("input").css("border","1px solid #000");
		if($("#pin").val().match(/^[0-9]{4}$/)){
			$(this).css("border","1px solid green");
			$("#dato").html("");
		}else{
			$(this).css("border","1px solid red");
			$("#dato").html("<p>PIN incorrecto<p>");
		}
	});

	$("#nacimiento").keyup(function(){
		$("input").css("border","1px solid #000");
		if($("#nacimiento").val().match( /^(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.](19|20)\d\d$/)){
			$(this).css("border","1px solid green");
				var dos=$("#fecha").val();
			$("#dato").html("");
		}else{
			$(this).css("border","1px solid red");
			$("#dato").html("<p>Fecha de caducidad incorrecta<p>");
		}
	});


	$('#submit').click(function() {
		var data=$('#form').serialize();
			$('#dato').html(data);
	});



</script>