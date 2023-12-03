<?php 

    include("conexion.php")

    if (isset($_POST['registrar'])) {
        if(
            strlen($_POST["name"]) >= 1 &&
            strlen($_POST["email"]) >= 1 &&
            strlen($_POST["cedula"]) >= 1 &&
            strlen($_POST["phone"]) >= 1 &&
            strlen($_POST["password"]) >= 1 
            ) {
                &name = trim($_POST["name"]);
                &name = trim($_POST["email"]);
                &name = trim($_POST["cedula"]);
                &name = trim($_POST["phone"]);
                &name = trim($_POST["passwod"]);
                $fecha = date("d/m/y");
                $consulta = "INSTERT INTO datos(nombre, email, cedula, telefono, contrasena, fecha)
                    Values("$name", "$email", "$cedula", "$phone", "$password", "$fecha" )";
                $resultado = mysqli_connect($conex, $consulta)
                if ($resultado) {
                ?>
                <h3 class="succes" > Tu registro se ha completado </h3>
                <?php
                } else {
                ?> <h3 class="error">ocurrio un error </h3>
                <?php
                }
        } else {
            ?>
            <h3 class="error">Llena todos los campos</h3>
            <?php
        }
    }

?>