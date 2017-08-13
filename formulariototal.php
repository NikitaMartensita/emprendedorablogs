<!DOCTYPE HTML>  
<html>
<head>
      <meta charset="UTF-8">
</head>
<body>  
<?php
// definimos la variable sin error y con error y les asignamos el valor cadena vacía
$errNombre = $errApellidos = $errContra = $errEdad = $errSitioWeb = $errChConocer = $errRaPrevios = $errRango = $errPreguntas = $errEmail ="";
$nombre = $apellidos = $contra = $edad = $sitioWeb =  $raPrevios = $rango = $preguntas = $email ="";
$chConocer =array();
$titulo="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$titulo="Tus datos";
  if(empty($_POST["nombre"])){
    $errNombre = "El nombre es obligatorio";
  }
  else{
    $nombre = filtro($_POST["nombre"]);
  }
  if(empty($_POST["apellidos"])){
    $errApellidos = "Los apellidos son obligatorios";
  }
  else{
    $apellidos = filtro($_POST["apellidos"]);
  }
  if(empty($_POST["contrasena"])){
    $errContra = "La contrase&ntilde;a es obligatoria";
  }
  else{
    $contra = filtro($_POST["contrasena"]);
  }
  if(empty($_POST["edad"])){
    $errEdad = "La edad es obligatoria";
  }
  else{
    $edad = filtro($_POST["edad"]);
  }
  if(empty($_POST["sitioweb"])){
    $errSitioWeb = "";
  }
  else{
    $sitioWeb = filtro($_POST["sitioweb"]);
  }
  if(empty($_POST["chconocer"])){
    $errChConocer = "El campo es obligatorio";
  }
  else{
    $chConocer = $_POST["chconocer"];
  }
  if(empty($_POST["raprevios"])){
    $errRaPrevios = "El campo es obligatorio";
  }
  else{
    $raPrevios = filtro($_POST["raprevios"]);
  }
  if(empty($_POST["rango"])){
    $errRango = "El campo es obligatorio";
  }
  else{
    $rango = filtro($_POST["rango"]);
  }
  if(empty($_POST["preguntas"])){
    $errPreguntas = "El campo es obligatorio";
  }
  else{
    $preguntas = filtro($_POST["preguntas"]);
  }
  if(empty($_POST["email"])){
    $errEmail = "El email es obligatorio";
  }
  else{
    $email = filtro($_POST["email"]);
  }
}

function filtro($entrada) {
  $entrada= trim($entrada);
  $entrada= stripslashes($entrada);
  $entrada= htmlspecialchars($entrada);
  return $entrada;
}
?>
<blockquote>
<h2>Formulario</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Nombre: <input type="text" name = "nombre"> <?php echo $errNombre;?>
  <br><br>
  Apellidos:<input  type="text" name="apellidos"/> <?php echo $errApellidos;?>
  <br><br>
  Contrase&ntilde;a:<input  type="password" name="contrasena"/> <?php echo $errContra;?>
  <br><br>
  Edad:<input  type="text" name="edad"/> <?php echo $errEdad;?>
  <br><br>
  Página web:<input  type="text" name="sitioweb"/> <?php echo $errSitioWeb;?>
  <br><br>
  Cómo conoció nuestra página:
  <br>
  <input id="checkbox1" type="checkbox" name="chconocer[]" value="Google" />
  Búsqueda de Google
  <br>
  <input id="checkbox2" type="checkbox" name="chconocer[]" value="DuckDuckGo"/>
  Búsqueda de DuckDuckGo
  <br>
  <input id="checkbox3" type="checkbox" name="chconocer[]" value="Facebook"/>
  Facebook
  <br>
  <input id="checkbox4" type="checkbox" name="chconocer[]" value="Instagram" />
  Instagram
  <br>
  <input id="checkbox5" type="checkbox" name="chconocer[]" value="otra forma" />
  Otra forma
  <br><?php echo $errChConocer;?>
  <br><br>
  Conocimientos previos de HTML5:
  <br>
  <input id="muyBajo"  type="radio" name="raprevios" value= "muy bajo"/> <?php echo $errRaPrevios;?>
  1 - Nivel Muy Bajo
  <br>
  <input id="bajo"  type="radio" name="raprevios" value= "bajo"/>
  2 - Nivel Bajo 
  <br>
  <input id="intermedioBajo"  type="radio" name="raprevios" value= "intermedio bajo"/>
  3 - Nivel Intermedio bajo 
  <br>
  <input id="intermedioAlto"  type="radio" name="raprevios" value= "intermedio alto"/>
  4 - Nivel Intermedio Alto
  <br>
  <input id="avanzado" checked="checked"  type="radio" name="raprevios" value= "avanzado"/>
  5 - Nivel Avanzado
  <br><?php echo $errRango;?><br><br>
  Código promocional
  <br>
  <input readonly="readonly" type="text" value="C937-YVVS4Z-XR73" />
  <br><br>
  Tiempo en horas que va a dedicar a la semana a aprender HTML5:
  <br>
  <input max="10" min="1" type="range" value="20" name="rango"/>
  <br><br>
  Sugerencias, comentarios, preguntas:
  <br>
  <textarea id="quejas" spellcheck="true" cols="20" rows="5" name="preguntas"> </textarea><?php echo $errPreguntas;?>
  <br><br>
  Email:<br>
  <input type="email" placeholder="alguien@gmail.com" name="email"/><?php echo $errEmail;?>
  <br><br>
  <input type="submit" name="enviar" value="Enviar">  
</form>

<br>
<br>
<?php
echo "<p style = 'color:green;border: 1px solid green;border-radius: 5px;width:80px; padding:2px;'>";
echo $titulo;
echo "</p>";
echo "<br>";
echo $nombre;
echo "<br>";
echo $apellidos;
echo "<br>";
echo $edad;
echo "<br>";
echo $sitioWeb;
echo "<br>";

$arrlength=count($chConocer);

for($x=0;$x<$arrlength;$x++)
  {
  echo $chConocer[$x];
  echo "<br>";
  }
echo "<br>";
echo $raPrevios;
echo "<br>";
echo $rango;
echo "<br>";
echo $preguntas;
echo "<br>";
echo $email;
?>
</blockquote>
</body>
</html>
