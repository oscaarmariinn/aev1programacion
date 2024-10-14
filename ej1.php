<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
        

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $paquetes = $_POST["paquetes"];
        $tamano = 0;
        $ancho = $_POST["ancho"];
        $largo = $_POST["largo"];
        $alto = $_POST["alto"];
        $peso = $_POST["peso"];
        $zona = $_POST["zona"];

        $tamano = $ancho * $alto * $largo;
        
        if ($tamano <= 0.5) {
            $precio = $tamano * 50;
        } elseif ($tamano <= 1) {
            $precio = $tamano * 75;
        } else {
            $precio = $tamano * 100;
        }
        
        
        if ($peso <= 5) {
            $precio = $precio;
        } elseif ($peso < 10) {
            $precio = $precio * 1.25;
        } elseif ($peso < 15) {
            $precio = $precio * 1.25;
        } else {
            echo "Me la suda el envio";
        }

       

        if ($zona = 0) {
            $precio = $precio;
        } elseif ($zona = 1) {
            $precio = $precio * 1.1;
        } elseif ( $zona = 2) {
            $precio = $precio * 1.1;
        }

        echo "El precio de envio es: $precio €";
    }
    

    ?>

    <form method="POST" action="">
        <label for="paquetes">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">

        <label for="alto">ALTO:</label>
        <input type="number" id="alto" name="alto" value="">

        <label for="ancho">ANCHO:</label>
        <input type="number" id="ancho" name="ancho" value="">

        <label for="largo">LARGO:</label>
        <input type="number" id="largo" name="largo" value="">

        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">

        <label for="zona">ZONA:</label>
        <input type="number" id="zona" name="zona" value="">

        <input type="submit" value="Calcular">
    </form>
    <br>
        <div> Peninsula = 0 </div>
        <div> Baleares = 1 </div>
        <div> Canarias = 2 </div>

</body>
</html>