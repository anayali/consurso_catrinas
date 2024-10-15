<?php
  require 'conexion.php';
  $sql = "SELECT * FROM participantes";
  $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENERA DIPLOMAS</title>
</head>
<body>
    <h3>Genera diplomas </h3>
    <form action= 'diploma.php' method='get'>
        <p>
            <label for= "participantes">Participantes:</label>
</p>
<p>
    <select name="participante" id="participante" required>
        <option value= "">Seleccionar participante</option>
        <?php  while($row=$resultado->fetch_assoc())
        {
            ?> <option value="<?php echo $row ['idParticipante']; ?>" >
            <?php echo $row['nombre']; ?></option>
            <?php  }  ?>
</select>
</p>
<button type="submit">Generar</button>
</form>
</body>
</html>