<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/> 
    <title>indexTema2</title>
    <style>
        .logo
        {

            left: 0;
            height: 90px;
        }

        header h1
        {
            padding: 30px;
            color: #d02b4d;
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 3.2em;
        }

        header
        {
            background-color: white;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer
        {
            position: fixed;
            bottom: 0;
            background-color: #d02b4d;
        }

        footer p
        {
            padding: 5px;
            color: white;
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 16px;
        }

        .indexTema2
        {
            padding: 0px 100px;
        }

        .indexTema2 h2
        {
            margin-top: 50px;
            padding: 30px;
            color: #d02b4d;
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 2.2em;
        }

        .indexTema2 p
        {   
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <header>
        <img class="logo"src="../web-root/img/LogotipoDavidVicente.png">
        <h1>Index Tema 2</h1>
    </header>
    <!-- echo para escribir texto normal o texto con etiquetas HTML -->
    <main class="indexTema2">
        <h2>Primeras Pruebas </h2>
        <p>
            <?
                echo"Hola Claseee!!", " Mundooo";
                print "<br>Hola " . "Buenos dias<br>";
            ?>
        </p>

        <p>
            <?
                printf("%d", "17.999");
                echo"<br/>";
                printf("%f", "17.999");
                echo"<br/>";
                printf("%.3f", "17.999");
                echo"<br/>";
                printf("%s", "17.999");
            ?>
        </p>

        <p>
            <?
                var_dump("maria", 3.14);
            ?>
        </p>

        

        <h2>Hedoc</h2>
        
        <p>
            <?
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
        </p>

    </main>
    <footer>
        <p>Footer de David</p>
        <a href="../index.html"><img src="../web-root/img/volver.png" height="20px"></a>
    </footer>
</body>
</html>