<?php
    require "phpqrcode/qrlib.php";

    $dir="imagen/";

    if(!file_exists($dir))
        mkdir($dir);

        $filename=$dir.'imgqr.png';

        $tam=10;
        $precision='L';
        $frameSize=3;
        $contenido="http://www.youtube.com.mx";

        QRcode::png($contenido, $filename, $precision, $tam, $frameSize);

        echo '<img src="'.$dir.basename($filename).'"/><hr/>';

?>