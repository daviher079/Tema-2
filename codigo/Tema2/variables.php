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
        <h2>Declaración de variables</h2>
    </header>
    
    <main>
        <?
            //Declaración de variable
            $miVariable=7;
            //Imprimiendo la variable
            echo $miVariable;
            var_dump($miVariable);

            //Tipo de datos boolean
            $bolean=true;
            echo "<br/>La variable boolean es: ", gettype($bolean), " tiene el valor de ", $bolean;

            $bolean2=false;
            echo "<br/>La variable boolean2 es: ", gettype($bolean2), " tiene el valor de ", $bolean2;
            echo "<br/>";
            var_dump($bolean2);

            echo"<br> le pregunto a isbool ", is_bool($bolean2);

            //el tipo de datos float

            $pruebafloat=12.567;
            echo "<br/>La variable boolean2 es: ", gettype($bolean2), " tiene el valor de ", $bolean2;

        ?>
    </main>
    <footer>Footer de David</footer>
</body>
</html>