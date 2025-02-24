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
