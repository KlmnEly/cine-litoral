<?php
include 'conexion.php';
include 'mostrar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturacion</title>
    <link rel="stylesheet" href="../styles/styles-boletas.css">
</head>
<body>
    <div id="container">

<header>
        <h2 class="logo">CineLandia</h2>

        <nav>
        <a href="../index.html">Inicio</a>
        <a href="#footer">Contactanos</a>
        <a href="../reserva.html">Reserva</a>
        <a href="#footer">Nosotros</a>
        </nav>

        <div class="redes">
            <a href="https://youtube.com"><img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Youtube_logo.png" alt=""></a>
            <a href="https://facebook.com"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" alt=""></a>
            <a href="https://instagram.com"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/2048px-Instagram_logo_2022.svg.png" alt=""></a>
        </div>
    </header>

    <div class="banner"><img src="https://pbs.twimg.com/media/GPJ7yBxXYAE9sPS.jpg:large" alt=""></div>



<?php
    if($_POST) {
        $documento = $_POST['documento'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $pelicula = $_POST['pelicula'];
        $dia = $_POST['dia'];
        $entradas = $_POST['entradas'];

        $lunes = 7000;
        $martes = 8500;
        $miercoles = 8500;
        $jueves = 9500;
        $viernes = 9500;
        $sabado = 12000;
        $domingo = 12000;

        $valorEntrada = match ($dia) {
            "lunes" => $lunes,
            'martes' => $martes,
            'miercoles' => $miercoles,
            'jueves' => $jueves,
            'viernes' => $viernes,
            'sabado' => $sabado,
            'domingo' => $domingo,
            default => 0
        };

        if ($pelicula == 'Aladdin' || $pelicula == 'Guason') {
            $subtotal = $valorEntrada * $entradas;
            $total = $subtotal - ($subtotal * 10 / 100);
        }else {
            $total = $valorEntrada * $entradas;
        }


        $registrar = "INSERT INTO boletas(documento, nombre, telefono, correo, pelicula, dia, entradas, valor_entrada, total) VALUES ('$documento', '$nombre', '$telefono', '$correo', '$pelicula', '$dia', '$entradas', '$valorEntrada', '$total')";

        $resultado = mysqli_query($conexion, $registrar);

        if ($registrar) {
            ?>
            <script>
                alert("Compra Exitosa!");
                window.location.href="boletas.php";
            </script>
            <?php
        }

    }
    ?>



    <div class="tabla-entradas">
    <h2>Entradas</h2>

    <table>
        <tr>
            <th>Codigo</th>
            <th>Documento</th>
            <th>Cliente</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Pelicula</th>
            <th>Dia de la semana</th>
            <th>Cantidad</th>
            <th>Valor Unitario</th>
            <th>Valor a pagar</th>
        </tr>
        <?php foreach ($resultado_bd as $datos) { ?>
        <tr>
            <td><?= $datos['codigo']; ?></td>
            <td><?= $datos['documento']; ?></td>
            <td><?= $datos['nombre']; ?></td>
            <td><?= $datos['telefono']; ?></td>
            <td><?= $datos['correo']; ?></td>
            <td><?= $datos['pelicula']; ?></td>
            <td><?= $datos['dia']; ?></td>
            <td><?= $datos['entradas']; ?></td>
            <td><?= $datos['valor_entrada']; ?></td>
            <td><?= $datos['total']; ?></td>
        </tr>
        <?php }; ?>
    </table>

        <button>Imprimir <img src="../img/printer.png" alt=""></button>
    </div>
    
    <footer id="footer">
        <div class="footer">
            <section class="encuentranos">
                <h2 class="logo">CineLandia</h2>
                <span class="logo-encuentranos"><img src="../img/phone.png" alt=""> <p>+57 304416237</p></span>
                <span class="logo-encuentranos"><img src="../img/mail.png" alt=""> <p>mirandakelmin@litoral.edu.co</p></span><span class="logo-encuentranos"><img src="../img/map-pin.png" alt=""> <p>Calle 79 #42F 110</p></span>
            </section>
            <section class="footerNav">
                <h2>Enlances</h2>
                    <a href="../index.html">Inicio</a>
                    <a href="#footer">Contactanos</a>
                    <a href="../reserva.html">Reserva</a>
                    <a href="#footer">Nosotros</a>
                    
            </section>
            <section class="footerRedes">
                <h2>Redes Sociales</h2>
                <a href="https://youtube.com"><img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Youtube_logo.png" alt=""></a>
                <a href="https://facebook.com"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" alt=""></a>
                <a href="https://instagram.com"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/2048px-Instagram_logo_2022.svg.png" alt=""></a>
            </section>
            <section class="footerRegistro">
                <form action="">
                    <h2>Unete a Nosotros!</h2>
                    <span>Usuario</span>
                    <input type="text">
                    <span>Correo Electronico</span>
                    <input type="email">
                    <span>Contraseña</span>
                    <input type="password">

                    <button type="submit">Registrar</button>
                </form>
            </section>
        </div>
    </footer>
    
    </div>

</body>
</html>