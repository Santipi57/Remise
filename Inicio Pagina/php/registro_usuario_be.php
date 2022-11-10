<?php

    include 'conexion_be.php';  

    $nombre_completo = $_POST ['nombre_completo'];
    $correo = $_POST ['email'];
    $contraseña = $_POST ['contraseña'];
    $telefono = $_POST ['telefono'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, contraseña, telefono) 
                 VALUES('$nombre_completo', '$correo', '$contraseña', '$telefono')";
    //Verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
        <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../sing up.html";
        </script>
        ';
        exit();
    }

    //Verificar que el nombre de usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_completo='$nombre_completo'");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo'
        <script>
                alert("Este nombre ya esta registrado, intenta con otro diferente");
                window.location = "../sing up.html";
        </script>
        ';
        exit();
    }
    
    $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar){
        echo '
        <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.html";
        </script>
        ';   
    }else{
        echo '
        <script>
                alert("Intentalo de nuevo,usuario no almacenado");
                window.location = "../sing up.html";
        </script>
        ';  
    }
    mysqli_close($conexion);
?>