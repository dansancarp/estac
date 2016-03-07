<?php
if(isset($_SESSION['UsuarioActual']))
 {
?>
<div id="divImagen">
    <img src="imagenes/auto.png">
</div>
<div id="divForm">
<form method="post" enctype="multipart/form-data" onsubmit="Guardar();return false;">
    <input type="text" id="patente" name="patente" maxlength=6 size=20 placeholder="Ingrese patente" required>
     <select name="color" id="color" required>
            <option value="Rojo">Rojo
            <option value="Verda">Verde
            <option value="Azul">Azul
            <option value="Negro">Negro
            <option value="Violeta">Violeta
            <option value="Blanco">Blanco
            <option value="Gris">Gris
            <option value="Celeste">Celeste
     </select>
    
    <input type="radio" id="tamanio" name="tamanio" value="G" checked/>Grande
    <input type="radio" id="tamanio" name="tamanio" value="M"/>Mediano
    <input type="radio" id="tamanio" name="tamanio" value="C"/>Chico
    
    <input type="file" name="foto" id="foto" required>
    <input type="submit" value="Asignar Espacio">
                 
</form>
</div>
<?php
}
else
{
   echo "<h1>Tiene que estar logeado</h1>";
}
?>