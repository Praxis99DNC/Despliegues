<?php
$resultado = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  require_once __DIR__ . '/src/procesar.php';
  $inputTexto = $_POST['texto'] ?? '';
  $resultado = procesarTexto($inputTexto);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenida</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form method="POST">
    <div class="recuadro">
      <h1 id="mensaje">Mi página web</h1><br>
      <input type="text" id="texto" name="texto" placeholder="Escribe algo">
      <button id="cambiar">Aceptar</button><br>

      <?php if ($resultado): ?>
        <p><?php echo htmlspecialchars($resultado); ?></p>
        <img src="imagenes/pabloenmoto.jpeg" alt="Imagen añadida" style="width:200px; border: 3px solid azure;">
      <?php endif; ?>
    </div>
  </form>
</body>

</html>