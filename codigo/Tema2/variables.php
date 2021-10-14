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
        <?php
            //Declaración de variable
            $miVariable=7;
            //Imprimiendo la variable
            echo $miVariable;
            echo "<br/><h2>Ejemplo de var_dump()</h2>";
            var_dump($miVariable);//muestra el tipo de dato que se le pasa y el valor que tiene la variable

            //Tipo de datos boolean
            $bolean=true;
            echo "<br/><h2>Ejemplo de variable de tipo boolean</h2>";
            echo "<br/>La variable boolean es: ", gettype($bolean), " tiene el valor de ", $bolean;
            //gettype devuelve el tipo de dato que es la variable
            $bolean2=false;
            echo "<br/>La variable boolean2 es: ", gettype($bolean2), " tiene el valor de ", $bolean2;
            echo "<br/>";
            var_dump($bolean2);

            echo"<br> le pregunto a isbool ", is_bool($bolean2);
            // is_bool comprueba si el tipo de dato es un booleano devuelve true o false
            
            //el tipo de datos float
            $pruebafloat=12.567;
            echo "<br/><h2>Ejemplo de variable de tipo float</h2>";
            echo "<br/>La variable con punto es: ", gettype($pruebafloat), " tiene el valor de ", $pruebafloat;
            echo "<br/> Le pregunto con is_float() ";
            echo is_float($pruebafloat);
            // is_float comprueba si el tipo de dato es un float devuelve true o false


            $numbaseCientifica=2.52e10;
            //muestra el numero completo en base decimal
            echo "<br/>",$numbaseCientifica," ", is_float($numbaseCientifica);
            //y lo cuenta como float

            $hex=0xFE;
            echo"<br/>La variable hexadecimal es ",  gettype($hex), " y su valor es ", $hex; 
            //Los valores hexadecimales los calcula como enteros

            // el valor, la base en la que está y a cual la quieres convertir 
            echo "<br/> se convierte del valor de origen en este caso decimal a hexadecimal: ",base_convert($hex,10,16);

            echo"<br/>Si el hexadecimal es numérico: ",is_numeric($hex);


            echo "<br/><h2>Ejemplo de variable de tipo string</h2>";

            $cadena="8.324";
            echo "la variable cadena es ", gettype($cadena), " tiene el valor de ", $cadena;
            echo "<br> le pregunto con is_string() ", is_string($cadena);
            //is_string comprueba si el tipo de dato es un string devuelve true o false
            echo "<br> Si la cadena es numerico ", is_numeric($cadena);


            echo "<br/><h2>Ejemplo de variable de tipo null</h2>";
            $nulo=null;
            echo "<br>la variable nulo es: ", gettype($nulo), " tiene el valor de ";
            echo var_dump($nulo);
            echo "<br>",is_null($nulo);

            //Cambiar tipo de dato
            echo "<br/><h2>Ejemplo de conversiones</h2>";
            echo "La variable hex anteriormente declarada es ",gettype($hex), " y pasa a ";
            settype($hex, "float");
            //En el primer paramentro de la función se le pasa la variable a convertir y en el segundo se le pasa el tipo de dato al que se va a convertir
            echo gettype($hex), " con el uso de la función settype()";
            echo"<br>";

            //convertir variables

            $a=4;
            $b=2.5;
            $s= $a +$b;
            echo "La variable a con valor ",$a," y tipo ",gettype($a)," se le suma la variable b con valor ",$b
            ," y tipo ",gettype($b)," y el resultado se almacena en s ", $s, " que es un tipo "
            , gettype($s);

            //cast 

            $casting= $a + (int) $b;

            echo "<br>El ejemplo se realiza con cast y se almacena el resultado en la variable casting con valor ",
            $casting, " y es un tipo ", gettype($casting), ". Se suma la variable a con valor ",$a," y a la varaible b de valor ",
            $b," se le hace un casting para convertirla a entero '(int)$ b' para que el resultado sea un ",
            gettype($casting);


            // VARIABLES DE VARIABLES
            echo "<h2>Variables de Variables</h2>";

            /*
            $var = "uno";
            $($var) => $uno
            */

            // Ejemplo        
            $var = "uno"; 
            $$var = "dos"; 
            // Se crea una variable nueva (dinámicamente) que se va a llamar lo que contiene var

            echo $var . "<br>";
            echo $$var . "<br>";
            echo $$var . " es lo mismo que " . $uno;


            //Variables por referencia
            echo"<h2>Variables por referencia</h2>";
            $d=5;
            $e=&$d;
            echo "La variable d se inicia con valor ",$d," y se crea la variable e para que su valor cambie aunque no se hagan cambios en la propia variable con (&$ d) con valor ", $e,
            " Ahora se intenta sumar desde la varaible d y tambien se verá afectada la variable e <br/>";
            //Sigue valiendo 5
            $d=$d +1;
            echo "<br/>Valor de e despues de la suma ",$e,". Valor de d despues de la suma ",$d;


            // VARIABLES ESPECIALES o (SUPERGLOBALES o PREDEFINIDAS)
            echo "<h2>Variables Especiales (Superglobales)</h2>";

            print_r ($_POST);
            echo "<br>";

            // ?nombre=david&apellido=vicente
            print_r ($_GET);

            print_r($_REQUEST);
            
            echo "<br/>SESSION <br/>";
            print_r($_SESSION);

            echo "SERVER <br/>";
            //print_r($_SERVER);


            //PASO DE VARIABLES
            //echo"PASO DE VARIABLES POR GET";
            if(isset($_GET['nombre']) && $_GET('nombre')=='David')
                echo $_GET ['nombre'];
            else
                echo"No hay nombre";
                
            //Prueba de variables globales locales y estaticas   
            echo "<h2>Prueba de variables globales locales y estaticas</h2>";
            $a =1;
            function ambito()
            {
                global $a;
                echo "Prueba con variable global ", $a;
            }    
            
            
            function contador()
            {
                static $c=0;
                $c++;
                echo "<br>Prueba con variables estaticas ",$c;
            }

            ambito();
            contador();
            contador();    
            //En la segunda llamada a la función contador al ser $c una variable estatica esta se incrementará siempre una vez cada vez que sea llamada la función
            //Constante, booleanos, entero, float y cadena
            
            echo "<h2>Ejemplo de constantes</h2>";

            define("USUARIO", "David");
            //forma de declarar una constante funcion define el primer argumento para el nombre de la función el segundo para el valor que contendrá
            echo USUARIO;
            //Otra forma de declarar una constante, es una forma menos usada    
            const NOMBRE="Juan";
            echo "<br/>",NOMBRE;

            echo "<h2>incluir ficheros</h2>";
            
            include("Saludo.php");
            //Cuando lafunciom require no encuentra el fichero que se le pasa se detiene la ejecución
            //En cambio si se le pasa el fichero por medio de la funcion include si este no se encuentra le ejecución del fichero no se detendrá
            //require("/var/www/seguro/misConstantes.php");
            //echo "<br>", USER,"<br>";
            //var_dump($_SERVER);
            
            
        ?>

        <h2>Ejemplo de como mostrar el codigo del fichero variables.php</h2>
        <!--echo "Saludo desde ".basename($_SERVER['SCRIPT_FILENAME']); EL NOMBRE DEL FICHERO QUE SE ESTA EJECUTANDO EN ESE MOMENTO-->

        <a href="codigo.php?ficheroPHP=<?php            
        $pagina=basename($_SERVER['SCRIPT_FILENAME']);
        echo $pagina;
        ?>">Ver Codigo PHP</a>

        <?php

            //FECHAS

            echo "<br>", "<h2>FECHAAAAAS</h2>","<br>";
            $fecha=time();//Segundos desde 1970

            echo "Segundos transcurridos desde el 1/1/1970 hasta la actualidad ",$fecha,"<br>";

            //ZONA HORARIA SERVIDOR

            
            echo "<br> función para modificar la hora del servidor", date_default_timezone_set("Europe/Sarajevo");
            echo "<br> Función para saber la hora del servidor", date_default_timezone_get();
            echo "<br> Función date para poner una fecha con formato ", date ('d-m-y h:i:s', time());

            //strtotime
            echo "<br>","Cumpleaños de Ismael","<br>";

            $cumple2= strtotime('07-27-01');
            //m-d-y
            $cumple= strtotime('01-07-27');
            //establece la fecha en segundos
            
            echo "<br>",$cumple,"<br>";
            echo date('d-m-y h:i:s',$cumple);

            $hoy=time();//Función time() devuelve el dia de hoy 
            echo "<p>";
            echo date ('d-m-y h:i:s', strtotime("+ 1 week 2 hours")), "<br>";
            echo date ('d-m-y h:i:s', strtotime("next Monday")), "<br>";  
            //echo date_diff(time, strtotime("last Thursday"));  
            $diaObjeto=new DateTime();
            $diaObjeto2=new DateTime('2021-01-01');
            echo ($diaObjeto2->diff($diaObjeto))->format('%R%a days');
           
            $diaMKtime= mktime(5,42,50,10,6,2021);
            echo "<br/>", date ('d-m-y h:i:s', $diaMKtime);

            echo "<br>";
            print_r (getdate());
            $pruebaDia=getdate();
            echo "<br>",$pruebaDia['wday'];
        ?>
    </main>
    <footer>Footer de David</footer>
</body>
</html>