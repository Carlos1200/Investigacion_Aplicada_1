<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="src/style/additional.css">
    <script src="src/style/addjs.js"></script>
    <title>Administrador de usuarios</title>
</head>

<body class="w-screen h-screen bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500">
    <a class="absolute w-14 h-14 bottom-10 right-10 bg-green-500 text-white rounded-full text-center shadow" onclick="openFormAgregar()">
        <i class="fa fa-plus text-5xl font-bold">+</i>
    </a>

    <div class="hidden fixed bottom-0 right-4 border-2 border-white z-50 text-2 rounded-lg" id="formAgregar" style="font-size:0.75em;">
        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" class="max-w-xs p-3 bg-white ">
            <label for="nombre"><b>Nombre</b></label>
            <input class="w-full p-4 mx-0 mt-1 mb-6 border-0 bg-slate-200" type="text" placeholder="Ingresar nombre" name="nombre" required>

            <label for="apellido"><b>Apellido</b></label>
            <input class="w-full p-4 mx-0 mt-1 mb-6 border-0 bg-slate-200" type="text" placeholder="Ingresar apellido" name="apellido" required>

            <label for="email"><b>Email</b></label>
            <input class="w-full p-4 mx-0 mt-1 mb-6 border-0 bg-slate-200" type="text" placeholder="Ingresar correo electrónico" name="email" required>

            <label for="genero"><b>Género</b></label>
            <select name="genero">
                <option value="m">M</option>
                <option value="f">F</option>
            </select>
            <br><br>
            <label for="ciudad"><b>Ciudad</b></label>
            <input class="w-full p-4 mx-0 mt-1 mb-6 border-0 bg-slate-200" type="text" placeholder="Ingresar ciudad" name="ciudad" required>

            <button type="submit" class="btn bg-emerald-600 hover:bg-emerald-700">Agregar</button>
            <button type="button" class="btn bg-red-600 hover:bg-red-800" onclick="closeFormAgregar()">Cerrar</button>
        </form>
    </div>