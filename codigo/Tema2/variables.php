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
            echo "<br/>La variable con punto es: ", gettype($pruebafloat), " tiene el valor de ", $pruebafloat;
            echo "<br/> Le pregunto con is_float() ";
            echo is_float($pruebafloat);

            $numbaseCientifica=2.52e10;
            echo "<br/>",$numbaseCientifica," ", is_float($numbaseCientifica);

            $hex=0xFE;
            echo"La variable hexadecimal es ",  gettype($hex), "y su valor es ", $hex; 

            // el valor, la base en la que está y a cual la quieres convertir 
            echo "<br/>",base_convert($hex,10,16);

            echo"<br/>Si el hexadecimal es numérico: ",is_numeric($hex);


            echo"<br><h2>String</h2>";

            $cadena="8.324";
            echo "la variable cadena es", gettype($cadena), " tiene el valor de ", $cadena;
            echo "<br> le pregunto con is_string() ", is_string($cadena);
            echo "<br> Si la cadena es numerico ", is_numeric($cadena);


            echo "<h1>NULO</h1>";
            $nulo=null;
            echo "<br>la variable nulo es: ", gettype($nulo), "tiene el valor de ";
            echo var_dump($nulo);
            echo "<br>",is_null($nulo);

            //Cambiar tipo de dato
            echo "<h1>CONVERSIONES</h1>";
            echo gettype($hex), " pasa a ";
            settype($hex, "float");
            echo gettype($hex);
            echo"<br>";

            //convertir variantes

            $a=4;
            $b=2.5;
            $s= $a +$b;
            echo "valor ", $s, " y tipo ", gettype($s);

            //cast 

            $casting= $a + (int) $b;

            echo "<br>Valor ", $casting, " y tipo ", gettype($casting);


            // VARIABLES DE VARIABLES
            echo "<h2>Variables de Variables</h2>";

            /*
            $var = "uno";
            $($var) => $uno
            */

            // Ejemplo        
            $var = "uno"; 
            $$var = "dos"; // Se crea una variable nueva (dinámicamente) que se va a llamar lo que contiene var

            echo $var . "<br>";
            echo $$var . "<br>";
            echo $$var . " es lo mismo que " . $uno;


            //Variables por referencia
            echo"<h1>Variables por referencia</h1>";
            $d=5;
            $e=&$d;
            //Sigue valiendo 5
            $d=$d +1;
            echo $e;


            // VARIABLES ESPECIALES o (SUPERGLOBALES o PREDEFINIDAS)
            echo "<h2>Variables Especiales (Superglobales)</h2>";

            print_r ($_POST);
            echo "<br>";

            //?nombre=david&apellido=vicente
            print_r ($_GET);

            print_r($_REQUEST);
            
            echo "SESSION";
            print_r($_SESSION);

            echo "SERVER";
            print_r($_SERVER);


            //PASO DE VARIABLES
            echo"PASO DE VARIABLES POR GET";
            if(isset($_GET['nombre']) && $_GET('nombre')=='David')
                echo $_GET ['nombre'];
            else
                echo"No hay nombre";    
            





        ?>
    </main>
    <footer>Footer de David</footer>
</body>
</html>