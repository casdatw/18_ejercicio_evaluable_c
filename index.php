<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: blue;
        }
        
    </style>
</head>
<body>
    

<?php
$curso = "Desarrollo de aplicaciones con tecnologia web";

function datosCurso(){
    global $curso;
    $fecha = "21 de septiembre";
    $empresa = "CAS TRAINING";
    
    echo "El curso llamado " . $curso . " de la empresa " . $empresa . ", finaliza el día " . $fecha . ".";
    return;
}
datosCurso();
?>
</body>
</html>