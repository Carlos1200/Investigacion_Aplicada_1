<?php
include __DIR__ . "\plantilla.php";
?>
<main class="mx-5 h-screen">
    <h1 class="text-center text-3xl font-bold py-5 text-white">Administrador de usuarios</h1>

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
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
            <br><br>
            <label for="ciudad"><b>Ciudad</b></label>
            <input class="w-full p-4 mx-0 mt-1 mb-6 border-0 bg-slate-200" type="text" placeholder="Ingresar ciudad" name="ciudad" required>

            <button type="submit" class="btn bg-emerald-600 hover:bg-emerald-700">Agregar</button>
            <button type="button" class="btn bg-red-600 hover:bg-red-800" onclick="closeFormAgregar()">Cerrar</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="border-separate table-auto w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
            <thead class="bg-slate-50 dark:bg-slate-700">
                <tr>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">ID</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Nombre</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Apellido</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Email</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Genero</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Ciudad</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Eliminar</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['id'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['first_name'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['last_name'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['email'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['gender'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['city'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 cursor-pointer'><a href='" . $_ENV['HOST'] . "/delete?id=" . $user['id'] . "'>Eliminar</a></td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 cursor-pointer'><a href='" . $_ENV['HOST'] . "/edit?id=" . $user['id'] . "'>Editar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
</body>

</html>