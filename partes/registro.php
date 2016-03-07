<div id="divImagen">
    <img src="imagenes/auto.png">
</div>
<div id="divForm">
<form  onsubmit="RegistrarUsuario();return false;">  
  <input type="text" id="nombre" name="nombre" maxlength=30 size=20 placeholder="Ingrese nombre" required>
  <input type="text" id="apellido" name="apellido" maxlength=30 size=20 placeholder="Ingrese apellido" required>
  <input type="date" id="fechanac" name="fechanac" required>
  <input type="email" id="email" name="email" maxlength=30 size=20 placeholder="Ingrese Email" required>
  <input type="text" id="direccion" name="direccion" maxlength=30 size=20 placeholder="Ingrese Direccion" required>
  <input type="text" id="localidad" name="localidad" maxlength=30 size=20 placeholder="Ingrese Localidad" required>
  <input type="text" id="provincia" name="provincia" maxlength=30 size=20 placeholder="Ingrese Provincia" required>
  <input type="text" id="usuario" name="usuario" maxlength=30 size=20 placeholder="Ingrese Usuario" required>
  <input type="password" id="password" name="password" maxlength=30 size=20 placeholder="Ingrese Password" required>
  <input type="password" id="cpassword" name="cpassword" maxlength=30 size=20 placeholder="Confirme Password" required>

  <input type="submit" value="Registrar">
</form>
</div>