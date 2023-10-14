<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de origen de visitas</title>
    <style>
        body {
            background: url('santiago.jpeg') no-repeat center center fixed;
            background-size: cover;
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .container {
            margin: 100px auto;
            max-width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #FFD700;
            font-size: 36px;
        }

        p {
            color: #333;
        }

        a {
            display: inline-block;
            background-color: #00FFFF;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #00BFFF;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Encuesta de origen de visitas</h1>
        <h2>Por favor, dinos cómo te enteraste de nuestro sitio:</h2>
        <form action="encuesta.php" method="post">
            <label>
                <input type="radio" name="origen" value="Redes sociales">
                Redes Sociales
            </label><br>
            <label>
                <input type="radio" name="origen" value="Buscador Web">
                Buscador Web
            </label><br>
            <label>
                <input type="radio" name="origen" value="Referencia de un amigo">
                Referencia de un amigo
            </label><br>
            <label>
                <input type="radio" name="origen" value="Otros">
                Otros
            </label><br>
            <input type="submit" value="Enviar">
        </form>

        <!-- contador de visitas -->
        <?php
        $contador_archivo = 'contador.txt';
        if (file_exists($contador_archivo)) {
            $contador = (int) file_get_contents($contador_archivo);
        } else {
            $contador = 0;
        }
        $contador++;
        file_put_contents($contador_archivo, $contador);
        echo "<p>Esta página ha sido visitada $contador veces.</p>";
        ?>
    </div>
</body>

</html>