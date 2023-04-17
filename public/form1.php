<!DOCTYPE html>
<html lang="es">
<head>
    <title>Programa 1: Suma de Tres Valores</title>
    <?php include('head.html'); ?>
</head>
<?php include('header.html'); ?>
<body class="bg-gray-900 text-white">
<div class="max-w-2xl mx-auto py-8">
    <h1 class="text-3xl mb-4">Programa 1: Suma de Tres Valores</h1>
    <form class="bg-gray-800 rounded-md p-8" action="" method="POST">
        <div class="mb-4">
            <label class="block text-gray-400 font-bold mb-2" for="valor1">
                Valor 1
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="valor1" name="valor1" type="number" placeholder="Ingrese el primer valor">
        </div>
        <div class="mb-4">
            <label class="block text-gray-400 font-bold mb-2" for="valor2">
                Valor 2
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="valor2" name="valor2" type="number" placeholder="Ingrese el segundo valor">
        </div>
        <div class="mb-4">
            <label class="block text-gray-400 font-bold mb-2" for="valor3">
                Valor 3
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="valor3" name="valor3" type="number" placeholder="Ingrese el tercer valor">
        </div>
        <div class="mb-4">
            <button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Calcular
            </button>
        </div>
    </form>
    <?php
    if(isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['valor3'])){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

        $resultado = $valor1 + $valor2 + $valor3;
        echo "<br><p class='bg-gray-700 rounded-md p-2'>Los valores proporcionados son: $valor1, $valor2, $valor3 <br>El resultado es: $resultado</p>";

    }
    ?>
    <div class="flex justify-between mt-4">
        <button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="window.history.back();">
            Regresar
        </button>
        <a class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="../public/index.php">
            Menu Principal
        </a>
    </div>


</div>
</body>
</html>





