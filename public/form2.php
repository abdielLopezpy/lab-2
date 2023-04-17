<!DOCTYPE html>
<html>
<head>
    <title>Programa 2: Cálculo de Área y Perímetro de un Rectángulo</title>
    <?php include('head.html'); ?>
</head>
<?php include('header.html'); ?>
<body class="bg-gray-900 text-white">
<div class="max-w-2xl mx-auto py-8">
    <h1 class="text-3xl mb-4">Operación matemática R=X+2XY+B2 </h1>
    <form class="bg-gray-800 rounded-md p-8" action="" method="POST">
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-2" for="valorX">
                Valor de X
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-900" id="valorX" name="valorX" type="number" step="0.01" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-2" for="valorY">
                Valor de Y
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-900" id="valorY" name="valorY" type="number" step="0.01" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-2" for="valorB">
                Valor de B
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-900" id="valorB" name="valorB" type="number" step="0.01" required>
        </div>
        <button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Calcular
        </button>
        </button>
    </form>
    <?php
    if(isset($_POST['valorX']) && isset($_POST['valorY']) && isset($_POST['valorB'])){
        $valorX = $_POST['valorX'];
        $valorY = $_POST['valorY'];
        $valorB = $_POST['valorB'];
        $resultado = $valorX + (2 * $valorX * $valorY) + pow($valorB, 2);
        echo "<br><p class='bg-gray-700 rounded-md p-2'>El resultado es: $resultado</p>";
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

