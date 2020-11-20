<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de conversión de unidades de medidas con POO y herencia en php</title>
</head>
<body>

    <h1>Conversor de medidas</h1>
    <p>Ingresa una medida y luego selecciona la medida de destino</p>
    <br>
    <form name="form1" method="POST" action="calcular.php">

        <p>Valor a convertir:<input type="text" id="txtvalor" name="txtvalor">
        <select name="selmedidas">
            <option value="">Seleccione...</option>
            <option value="kilo">Kilometros</option>
            <option value="metros">Metros</option>
            <option value="centi">Centímetros</option>
            <option value="mili">Milímetros</option>
        </select>
        </p> 
        <p>Convertir a la medida de: </p>
        <p>
                <input type="radio" name="medidas" value="kilometros">Kilometros
            <br><input type="radio" name="medidas" value="metros">Metros
            <br><input type="radio" name="medidas" value="centimetros">Centímetros
            <br><input type="radio" name="medidas" value="milimetros">Milímetros
        </p>
        <p><input type="submit" name="btncalcular" value="Calcular"></p>


    </form>

    
</body>
</html>