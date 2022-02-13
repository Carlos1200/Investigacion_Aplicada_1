<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/additional.css">
    <script src="dist/addjs.js"></script>
    <title>Administrador de usuarios</title>
</head>

<body class="w-screen h-screen bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500">
    <a class="float" onclick="openFormAgregar()">
        <i class="fa fa-plus my-float">+</i>
    </a>

    <div class="form-popup" id="formAgregar" style="font-size:0.75em;">
        <form action="/action_page.php" class="form-container">
            <label for="nombre"><b>Nombre</b></label>
            <input type="text" placeholder="Ingresar nombre" name="nombre" required>

            <label for="apellido"><b>Apellido</b></label>
            <input type="text" placeholder="Ingresar apellido" name="apellido" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Ingresar correo electrónico" name="email" required>

            <label for="genero"><b>Género</b></label>
            <select name="genero">
                <option value="m">M</option>
                <option value="f">F</option>
            </select>
            <br><br>
            <label for="ciudad"><b>Ciudad</b></label>
            <input type="text" placeholder="Ingresar ciudad" name="ciudad" required>

            <button type="submit" class="btn">Agregar</button>
            <button type="button" class="btn cancel" onclick="closeFormAgregar()">Cerrar</button>
        </form>
    </div>