<?php
  require 'conexion.php';
  $sql = "SELECT * FROM cursos";
  $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENERA DIPLOMAS MASIVOS </title>
</head>
<body>
    <h3>Genera diplomas masivos</h3>
    <form action= 'diplomas.php' method='get'>
        <p>
            <label for= "cursos">cursos:</label>
</p>
<p>
    <select name="curso" id="curso" required>
        <option value= "">Seleccionar curso</option>
        <?php  while($row=$resultado->fetch_assoc())
        {
            ?> <option value="<?php echo $row ['idCurso']; ?>" >
            <?php echo $row['nombre']; ?></option>
            <?php  }  ?>
</select>
</p>
<button type="submit">Generar</button>
</form>
</body>
</html>