<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web-root/css/style.css"/>
    <title>Temas Desarrollo en Entorno Servidor</title>
</head>
<body>
    <header>
        <h1>Pagina de David</h1>
        <h2>Index principal del Tema 2</h2>
    </header>
    <!-- echo para escribir texto normal o texto con etiquetas HTML -->
    <main>
        <?php
            echo"Hola Claseee!!", " Mundooo";//se separa con comas para mostrar por pantalla
            print "<br>Hola " . "Buenos dias<br>";
        ?>

        <?php
            printf("%d", "17.999");//%d - Firmado número decimal
            echo"<br/>";
            printf("%f", "17.999");//%f - número de coma flotante
            echo"<br/>";
            printf("%.3f", "17.9993453");//%.3f - pone hasta 3 decimales en el valor 
            echo"<br/>";
            printf("%s", "17.999");//%s Lo convierte a string
        ?>

        <?php
            echo"<br/>";
            var_dump("maria", 3.14);//var_dump devuelve que tipo de dato es el valor que le hemos pasado
        ?>
        <h2>Heredoc</h2>
        
        <?php
        /*El texto heredoc se comporta como un string entre comillas dobles, pero sin tener comillas dobles, esto significa que no es necesario escapar las comillas en un heredoc*/
            echo <<< MITEXTO
                Aquí estamos todos pa' cantarte tu canción
                estamos apiñados como balas de cañón
                y es que no hay quien pueda con esta afición
                y aunque último estuvieras siempre te ven campeón.
                Beeeeeetis, Beeeeeetis, Beeeeeetis.
                Ahora Betis, ahora, no dejes de atacar
                ahora Betis, ahora porque el gol ya va a llegar.
                Beeeeeetis, Beeeeeetis, Beeeeeetis.
                    
                Hay una leyenda que recorre el mundo entero,
                verde y blanco sus colores,
                blanco y verde es el sendero,
                luz en la mañana y en la noche quejío y quiebro.
                Betis musho Betis, en el mundo lo que más quiero.
                Luz en la mañana y en la noche quejío y quiebro.
                Betis musho Betis, en este mundo lo que más quiero.

                Beeeeeetis, Beeeeeetis, Beeeeeetis
                Ahora Betis, ahora, no dejes de atacar,
                ahora Betis ahora porque el gol ya va a llegar.
                Beeeeeetis, Beeeeeetis, Beeeeeetis, Beeeeeetis, Beeeeeetis.
            MITEXTO;    
        ?>

    </main>
    <footer>Footer de David</footer>
</body>
</html>