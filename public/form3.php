<!DOCTYPE html>
<html lang="es">
<head>
    <title>Programa 3: Promedio de Ventas</title>
    <?php include('head.html'); ?>
</head>
<?php include('header.html'); ?>
<body class="bg-gray-900 text-white">
<div class="max-w-2xl mx-auto py-8">
    <h1 class="text-3xl mb-4">Programa 3: Promedio de Ventas</h1>
    <form class="bg-gray-800 rounded-md p-8" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="mb-4">
            <label class="block text-gray-400 font-bold mb-2" for="venta1">
                Venta de enero
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="venta1" name="ventas[]" type="number" placeholder="Ingrese la venta de enero">
        </div>
        <div class="mb-4">
            <label class="block text-gray-400 font-bold mb-2" for="venta2">
                Venta de febrero
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="venta2" name="ventas[]" type="number" placeholder="Ingrese la venta de febrero">
        </div>
        <div class="mb-4">
            <label class="block text-gray-400 font-bold mb-2" for="venta3">
                Venta de marzo
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="venta3" name="ventas[]" type="number" placeholder="Ingrese la venta de marzo">
        </div>
        <div class="mb-4">
            <button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Calcular Promedio
            </button>
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ventas = $_POST["ventas"];
        $num_ventas = count($ventas);
        $total_ventas = array_sum($ventas);
        $promedio_ventas = $total_ventas / $num_ventas;

        echo "<br><div class='bg-gray-800 rounded-md p-8'>";
        echo "<p class='text-gray-400 font-bold mb-2'>Ventas ingresadas:</p>";
        echo "<ul class='list-disc pl-8'>";
        foreach ($ventas as $venta) {
            echo "<li class='text-gray-400'>$" . number_format($venta, 2, '.', ',') . "</li>";
        }
        echo "</ul>";
        echo "<p class='text-gray-400 font-bold mb-2'>Promedio de ventas:</p>";
        echo "<p class='text-2xl font-bold'>$" . number_format($promedio_ventas, 2, '.', ',') . "</p>";
        echo "</div>";
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
