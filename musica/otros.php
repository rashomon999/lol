<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title>
</head>
<body>
    <!-- Contador de veces solucionadas -->
    <div id="contador">Veces solucionadas: 0</div>

    <!-- Formulario con tres preguntas -->
    <form id="cuestionario">
        <label for="pregunta1">1. pulsa la sexta del acorde:</label>
        <input type="text" id="pregunta1" name="pregunta1"><br><br>
        
        <label for="pregunta2">2. pulsa la quinta del acorde:</label>
        <input type="text" id="pregunta2" name="pregunta2"><br><br>
        
        <label for="pregunta3">3. pulsa la cuarta del acorde:</label>
        <input type="text" id="pregunta3" name="pregunta3"><br><br>

        <button type="button" onclick="verificarRespuestas()">Verificar respuestas</button>
    </form>

    <!-- Texto para mostrar el resultado -->
    <div id="resultado"></div>

    <script>
        // Contador de veces solucionadas
        var vecesSolucionadas = 0;

        function verificarRespuestas() {
            // Obtener las respuestas ingresadas
            var respuesta1 = document.getElementById('pregunta1').value.trim();
            var respuesta2 = document.getElementById('pregunta2').value.trim();
            var respuesta3 = document.getElementById('pregunta3').value.trim();

            // Verificar si las respuestas son correctas
            if (respuesta1 === '1' && respuesta2 === '2' && respuesta3 === '3') {
                // Incrementar el contador y mostrar el resultado
                vecesSolucionadas++;
                document.getElementById('resultado').textContent = '¡Todas las respuestas son correctas!';
                document.getElementById('contador').textContent = 'Veces solucionadas: ' + vecesSolucionadas;
            } else {
                // Mostrar un mensaje de error si alguna respuesta es incorrecta
                document.getElementById('resultado').textContent = 'Alguna respuesta es incorrecta. Por favor, intenta de nuevo.';
            }
        }
    </script>
</body>
</html>