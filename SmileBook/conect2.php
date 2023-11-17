<?php

$conexion = new mysqli("localhost", "oscar2", "oscar123", "smilebook");

if (!$conexion) {
    die("No se realizó la conexión a la base de datos, el error fue: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

if (isset($_POST['register'])) {
    $fecha_elaboracion = mysqli_real_escape_string($conexion, $_POST['fecha_elaboracion']);
    $numero_expediente = mysqli_real_escape_string($conexion, $_POST['numero_expediente']);
    
    // Campos adicionales para "Ficha de identificación"
    $nombres = mysqli_real_escape_string($conexion, $_POST['nombres']);
    $apellido_paterno = mysqli_real_escape_string($conexion, $_POST['apellido_paterno']);
    $apellido_materno = mysqli_real_escape_string($conexion, $_POST['apellido_materno']);
    $fecha_nacimiento = mysqli_real_escape_string($conexion, $_POST['fecha_nacimiento']);
    $genero = mysqli_real_escape_string($conexion, $_POST['genero']);
    $telefono_fijo = mysqli_real_escape_string($conexion, $_POST['telefono_fijo']);
    $telefono_movil = mysqli_real_escape_string($conexion, $_POST['telefono_movil']);
    $domicilio = mysqli_real_escape_string($conexion, $_POST['domicilio']);
    $codigo_postal = mysqli_real_escape_string($conexion, $_POST['codigo_postal']);
    $estado_civil = mysqli_real_escape_string($conexion, $_POST['estado_civil']);
    $tipo_sanguineo = mysqli_real_escape_string($conexion, $_POST['tipo_sanguineo']);
    $nombre_emergencia = mysqli_real_escape_string($conexion, $_POST['nombre_emergencia']);
    $contacto_emergencia = mysqli_real_escape_string($conexion, $_POST['contacto_emergencia']);

    // Campos adicionales para "Antecedentes Personales No Patológicos"
    $bcg = mysqli_real_escape_string($conexion, $_POST['bcg']);
    $hepatitis_cc = mysqli_real_escape_string($conexion, $_POST['hepatitis_cc']);
    $pentavalente = mysqli_real_escape_string($conexion, $_POST['pentavalente']);
    $rotavirus = mysqli_real_escape_string($conexion, $_POST['rotavirus']);
    $neumococcica = mysqli_real_escape_string($conexion, $_POST['neumococcica']);
    $influenzaa = mysqli_real_escape_string($conexion, $_POST['influenzaa']);
    $papiloma = mysqli_real_escape_string($conexion, $_POST['papiloma']);
    $sabin = mysqli_real_escape_string($conexion, $_POST['sabin']);
    $rs = mysqli_real_escape_string($conexion, $_POST['rs']);
    $dpt = mysqli_real_escape_string($conexion, $_POST['dpt']);
    $srp = mysqli_real_escape_string($conexion, $_POST['srp']);
    $otra_vacuna = mysqli_real_escape_string($conexion, $_POST['otra_vacuna']);

    // Campos adicionales para "Hábitos tóxicos"
    $alcohol = mysqli_real_escape_string($conexion, $_POST['alcohol']);
    $anios_uso_alcohol = mysqli_real_escape_string($conexion, $_POST['anios_uso_alcohol']);
    $fecha_ultimo_uso_alcohol = mysqli_real_escape_string($conexion, $_POST['fecha_ultimo_uso_alcohol']);
    $tabaco = mysqli_real_escape_string($conexion, $_POST['tabaco']);
    $anios_uso_tabaco = mysqli_real_escape_string($conexion, $_POST['anios_uso_tabaco']);
    $fecha_ultimo_uso_tabaco = mysqli_real_escape_string($conexion, $_POST['fecha_ultimo_uso_tabaco']);
    $estupefacientes = mysqli_real_escape_string($conexion, $_POST['estupefacientes']);
    $anios_uso_estupefacientes = mysqli_real_escape_string($conexion, $_POST['anios_uso_estupefacientes']);
    $fecha_ultimo_uso_estupefacientes = mysqli_real_escape_string($conexion, $_POST['fecha_ultimo_uso_estupefacientes']);

    // Campos adicionales para "Alergias"
    $alergias = mysqli_real_escape_string($conexion, $_POST['alergias']);

    // Campos adicionales para "Medicamento fijo"
    $medicamentos = mysqli_real_escape_string($conexion, $_POST['medicamentos']);

    // Campos adicionales para "Antecedentes Heredo Familiares"
    $antecedentes_familiares = mysqli_real_escape_string($conexion, $_POST['antecedentes_familiares']);
    $parentesco = mysqli_real_escape_string($conexion, $_POST['parentesco']);

    // Campos adicionales para "Antecedentes Personales Patológicos"
    $enfermedad_patologica = mysqli_real_escape_string($conexion, $_POST['enfermedad_patologica']);
    $tiempo_evolucion = mysqli_real_escape_string($conexion, $_POST['tiempo_evolucion']);

    // Construir la consulta SQL
    $consulta = "INSERT INTO historia_clinica_dental (fecha_elaboracion, numero_expediente, nombres, apellido_paterno, apellido_materno, fecha_nacimiento, genero, telefono_fijo, telefono_movil, domicilio, codigo_postal, estado_civil, tipo_sanguineo, nombre_emergencia, contacto_emergencia) VALUES ('$fecha_elaboracion', '$numero_expediente', '$nombres', '$apellido_paterno', '$apellido_materno', '$fecha_nacimiento', '$genero', '$telefono_fijo', '$telefono_movil', '$domicilio', '$codigo_postal', '$estado_civil', '$tipo_sanguineo', '$nombre_emergencia', '$contacto_emergencia')";

    // Ejecuta la consulta
    if (mysqli_query($conexion, $consulta)) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>
