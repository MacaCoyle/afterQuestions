<?php
require_once("functions.php");
 if($_POST){
    $errores = validarDatos($_POST);
    //var_dump($errores);
    if(count($errores) == 0){
        $usuario = crearUsuario($_POST);
        //var_dump($usuario);
        guardarUsuario($usuario);
        header("Location: bienvenido.php");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Register</title>

</head>
<body>
<main>
    <form id="register" action="" method="post">
    <div>
        <label for="name">Email</label> <br/>
        <input type="text" name="email">
    </div>
    <div>
        <label for="password">Password</label> <br/>
        <input type="password" name="password">
    </div>
    <div>
        <label for="password">Confirm Password</label> <br/>
        <input type="password" name="password2">
    </div>
        <input type="submit" name="" value="Enviar">
    </div>

    </form>
</main>

</body>
</html>
