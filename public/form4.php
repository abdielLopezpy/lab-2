<!DOCTYPE html>
<html lang="es">
<head>
    <title>Programa 4: Área y Perímetro de un Círculo</title>
    <?php include('head.html'); ?>
</head>
<?php include('header.html'); ?>
<body class="bg-gray-900 text-white">
<div class="max-w-2xl mx-auto py-8">
    <h1 class="text-3xl mb-4">Programa 4: Área y Perímetro de un Círculo</h1>
    <form class="bg-gray-800 rounded-md p-8" action="" method="POST">
        <div class="mb-4">
            <label class="block text-gray-400 font-bold mb-2" for="radio">
                Radio
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="radio" name="radio" type="number" step="0.01" placeholder="Ingrese el radio del círculo">
        </div>
        <div class="mb-4">
            <button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Calcular
            </button>
        </div>
    </form>

    <?php
    if(isset($_POST['radio'])) {
        $radio = $_POST['radio'];
        $pi = pi();
        $area = round(pow($radio, 2) * $pi, 2);
        $perimetro = round(2 * $pi * $radio, 2);
    ?>
    <br>
    <div class="bg-gray-800 rounded-md p-8">
        <h2 class="text-xl mb-4">Resultados:</h2>
        <p class="mb-2"><strong>Área:</strong> <?php echo $area; ?> unidades cuadradas</p>
        <p><strong>Perímetro:</strong> <?php echo $perimetro; ?> unidades</p>
    </div>
    <?php } ?>
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

