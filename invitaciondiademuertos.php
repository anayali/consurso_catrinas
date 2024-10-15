<?php
// Configuración de la invitación
$titulo = "Invitación Día de Muertos";
$fecha_y_hora = "2 de noviembre, 3:00 pm";
$lugar = "PARQUE MUNICIPAL";
$objetivo = "Honrar y recordar a nuestros seres queridos que ya no están con nosotros.";
$url_qr = "https://maps.app.goo.gl/RkLptKFrfWWkeRVp8"; // reemplaza con la URL que deseas codificar en el código QR

// Generar código QR
require_once 'phpqrcode/qrlib.php';
QRcode::png($url_qr, 'qrcode.png', 'H', 4, 4);

// Mostrar la invitación
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap');

        body {
            font-family: 'Raleway', sans-serif;
            background-color: hsl(22, 83%, 42%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('fondo_dia_de_muertos.jpg'); /* Añade una imagen de fondo si tienes una */
            background-size: cover;
            background-position: center;
        }

        .container {
            width: 90%;
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            color: #ad1207;
            font-family: 'Great Vibes', cursive;
            font-size: 36px;
            margin-bottom: 10px;
        }

        h2 {
            color: #7e0e0e;
            font-size: 18px;
            margin-bottom: 20px;
        }

        p {
            color: #000000;
            font-size: 16px;
            margin-bottom: 30px;
        }

        .qr-code img {
            width: 150px;
            height: 150px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .footer {
            margin-top: 20px;
            color: #ad1207;
            font-size: 14px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $titulo; ?></h1>
        <h2>Fecha y Hora: <?php echo $fecha_y_hora; ?></h2>
        <h2>Lugar: <?php echo $lugar; ?></h2>
        <p><?php echo $objetivo; ?></p>
        <div class="qr-code">
            <img src="qrcode.png" alt="Código QR">
        </div>
        <div class="footer">
            ¡Te esperamos con alegría y mucho respeto!
        </div>
    </div>
</body>
</html>
