<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/micss.css">
    <title>form</title>
</head>

<body>
    <form method="post" action="./src/POST.php" class="Form">
        <label>
            Nombre
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        <label>
            Apellido
            <br>
            <input type="text" name="apellido">
        </label>
        <br>
        <label>
            cedula
            <br>
            <input type="number" name="cedula">
        </label>
        <br>
        <label>
            edad
            <br>
            <input type="text" name="edad">
        </label>
        <br>
        <button>Registrar</button>
    </form>
    <table>
        <thead>
            <tr>
                <td>nombre</td>
                <td>Apellido</td>
                <td>Cedula</td>
                <td>edad</td>
                <td>Acción</td>
            </tr>
        </thead>

        <tbody>
            <form action="./src/functions.php" method="post">
                <?php
                session_start();
                if (isset($_SESSION["personas"])) {
                    define("data", $_SESSION["personas"]);

                    foreach (data as $index => $value) {
                        echo "<tr> 
                        <td>{$value['name']}</td>
                        <td>{$value['apellido']}</td>    
                        <td>{$value['cedula']}</td> 
                        <td>{$value['edad']} </td> 
                        <td><button name='DeleteOne' value='$index'>X</button></td> 
                    </tr>";
                    }
                };
                ?>
            </form>
        </tbody>
    </table>
    <form action="./src/functions.php" method="post">
        <button name="DeleteAll">Borrar todo</button>

    </form>
</body>

</html>