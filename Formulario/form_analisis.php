<?php
// define variables and set to empty values
$nombre = $email = $apellido = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = test_input($_POST["nombre"]);
  $email = test_input($_POST["email"]);
  $apellido = test_input($_POST["apellido"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html>
<head> 
<title>Agradecimiento </title> </head>
<body>

<?php
// define variables and set to empty values
$nombre = $email = $apellido = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = test_input($_POST["nombre"]);
  $email = test_input($_POST["email"]);
  $apellido = test_input($_POST["apellido"]);
}

?>


<?php
echo "<h2>Gracias </h2>";
echo $nombre;
echo "<h2>por registrarte</h2>";
?>

</body>
</html>