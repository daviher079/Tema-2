<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <title>Temas Desarrollo en Entorno Servidor</title>
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

        .variables
        {
            padding: 0px 100px;
        }

        .variables h2
        {
            margin-top: 30px;
            padding: 30px;
            color: #d02b4d;
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 2.2em;
        }

        .variables p
        {
            
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.1em;
            margin-bottom: 10px;
        }

        a
        {
            color: #d02b4d;
            text-decoration: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.1em;
            cursor: pointer;
            font-weight: 400;
        }
        a:hover
        {
            color: #d02b4c91;
            
        }
    </style>
</head>
<body>
    <header>
        <img class="logo"src="../web-root/img/LogotipoDavidVicente.png">
        <h1>Declaración de variables</h1>
    </header>
    
    <main class="variables">
        <h2>Declariación de variables</h2>
    <?
            //Declaración de variable
            $miVariable=7;
            //Imprimiendo la variable
            echo "<p> imprimiendo el valor de la variable \$miVariable: ".$miVariable.".</p>";
            
            
            echo "<h2>Ejemplo de var_dump()</h2>";
            var_dump($miVariable);//muestra el tipo de dato que se le pasa y el valor que tiene la variable
            //Tipo de datos boolean
            $bolean=true;
            echo "<h2>Ejemplo de variable de tipo boolean</h2>";
            echo "<p>La variable boolean es: ", gettype($bolean), " tiene el valor de ", $bolean."</p>";
            //gettype devuelve el tipo de dato que es la variable
            $bolean2=false;
            echo "<p>La variable boolean2 es: ", gettype($bolean2), " tiene el valor de ", $bolean2."</p>";
            echo "<br/>";
            var_dump($bolean2);

            echo"<p> le pregunto a isbool ", is_bool($bolean2)."</p>";
            // is_bool comprueba si el tipo de dato es un booleano devuelve true o false
            
            //el tipo de datos float
            $pruebafloat=12.567;
            echo "<h2>Ejemplo de variable de tipo float</h2>";
            echo "<p>La variable con punto es: ", gettype($pruebafloat), " tiene el valor de ", $pruebafloat."</p>";
            echo "<p> Le pregunto con is_float() ".is_float($pruebafloat)."</p>";
            // is_float comprueba si el tipo de dato es un float devuelve true o false

            $numbaseCientifica=2.52e10;
            //muestra el numero completo en base decimal
            echo "<p>Imprimiendo el valor de la variable \$numbaseCientifica",$numbaseCientifica," que es una variable de tipo float", is_float($numbaseCientifica)."</p>";
            //y lo cuenta como float

            $hex=0xFE;
            echo"<p>La variable hexadecimal es ",  gettype($hex), " y su valor es ", $hex."</p>"; 
            //Los valores hexadecimales los calcula como enteros

            // el valor, la base en la que está y a cual la quieres convertir 
            echo "<p> se convierte del valor de origen en este caso decimal a hexadecimal: ",base_convert($hex,10,16)."</p>";

            echo"<p>Si el hexadecimal es numérico: ",is_numeric($hex)."</p>";

            echo "<h2>Ejemplo de variable de tipo string</h2>";

            $cadena="8.324";
            echo "<p>la variable \$cadena es ", gettype($cadena), " tiene el valor de ", $cadena."</p>";
            echo "<p>le pregunto con is_string() ", is_string($cadena)."</p>";
            //is_string comprueba si el tipo de dato es un string devuelve true o false
            echo "<p> Si la cadena es numerico ", is_numeric($cadena)."</p>";


            echo "<h2>Ejemplo de variable de tipo null</h2>";
            $nulo=null;
            echo "<p>La variable nulo es: ", gettype($nulo), " tiene el valor de </p>";
            echo var_dump($nulo);
            echo "<p>La variable \$nulo devuelve true cuando se le pasa como parametro a la función is_null()",is_null($nulo)."</p>";

            //Cambiar tipo de dato
            echo "<h2>Ejemplo de conversiones</h2>";
            echo "<p>La variable hex anteriormente declarada es ",gettype($hex), " y pasa a ";
            settype($hex, "float");
            //En el primer paramentro de la función se le pasa la variable a convertir y en el segundo se le pasa el tipo de dato al que se va a convertir
            echo gettype($hex), " con el uso de la función settype().</p>";
            

            //convertir variables

            $a=4;
            $b=2.5;
            $s= $a +$b;
            echo "<p>La variable a con valor ",$a," y tipo ",gettype($a)," se le suma la variable b con valor ",$b
            ," y tipo ",gettype($b)," y el resultado se almacena en s ", $s, " que es un tipo "
            , gettype($s).".</p>";

            //cast 

            $casting= $a + (int) $b;

            echo "<p>El ejemplo se realiza con cast y se almacena el resultado en la variable casting con valor ",
            $casting, " y es un tipo ", gettype($casting), ". Se suma la variable a con valor ",$a," y a la varaible b de valor ",
            $b," se le hace un casting para convertirla a entero '(int)$ b' para que el resultado sea un ",
            gettype($casting).".</p>";


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

            echo"<p>".$var."</p>";
            echo "<p>".$$var . "</p>";
            echo "<p>". $$var . " es lo mismo que " . $uno."</p>";


            //Variables por referencia
            echo"<h2>Variables por referencia</h2>";
            $d=5;
            $e=&$d;
            echo "<p>La variable d se inicia con valor ",$d," y se crea la variable e para que su valor cambie aunque no se hagan cambios en la propia variable con (&$ d) con valor ", $e,
            " Ahora se intenta sumar desde la varaible d y tambien se verá afectada la variable e </p>";
            //Sigue valiendo 5
            $d=$d +1;
            echo "<p>Valor de e despues de la suma ",$e,". Valor de d despues de la suma ",$d."</p>";


            // VARIABLES ESPECIALES o (SUPERGLOBALES o PREDEFINIDAS)
            echo "<h2>Variables Especiales (Superglobales)</h2>";
            echo"<p>Imprimiento la variable superglobal \$_POST ";
            print_r ($_POST);
            echo "</p>";

            // ?nombre=david&apellido=vicente
            echo"<p>Imprimiento la variable superglobal \$_GET ";
            print_r ($_GET);
            echo "</p>";

            echo"<p>Imprimiento la variable superglobal \$_REQUEST ";
            print_r($_REQUEST);
            echo "</p>";
            
            echo"<p>Imprimiento la variable superglobal \$_SESSION ";
                //print_r($_SESSION);
            echo "</p>";
            
            echo "<p>Imprimiento la variable superglobal \$_SERVER ";
            //print_r($_SERVER);
            echo "</p>";

            //PASO DE VARIABLES
            //echo"PASO DE VARIABLES POR GET";
            if(isset($_GET['nombre']) && $_GET('nombre')=='David')
                echo "<p>".$_GET ['nombre']."</p>";
            else
                echo"<p>No hay nombre<p>";
                
            //Prueba de variables globales locales y estaticas   
            echo "<h2>Prueba de variables globales locales y estaticas</h2>";
            $a =1;
            function ambito()
            {
                global $a;
                echo "<p>Prueba con variable global ", $a."</p>";
            }    
            
            
            function contador()
            {
                static $c=0;
                $c++;
                echo "<p>Prueba con variables estaticas ",$c."</p>";
            }

            ambito();
            contador();
            contador();    
            //En la segunda llamada a la función contador al ser $c una variable estatica esta se incrementará siempre una vez cada vez que sea llamada la función
            //Constante, booleanos, entero, float y cadena
            
            echo "<h2>Ejemplo de constantes</h2>";

            define("USUARIO", "David");
            //forma de declarar una constante funcion define el primer argumento para el nombre de la función el segundo para el valor que contendrá
            echo "<p>".USUARIO."</p>";
            //Otra forma de declarar una constante, es una forma menos usada    
            const NOMBRE="Juan";
            echo "<p>".NOMBRE."</p>";

            echo "<h2>Incluir ficheros</h2>";
            
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

        <?

            //FECHAS

            echo "<br>", "<h2>FECHAAAAAS</h2>","<br>";
            $fecha=time();//Segundos desde 1970

            echo "<p>Segundos transcurridos desde el 1/1/1970 hasta la actualidad ",$fecha,"</p>";

            //ZONA HORARIA SERVIDOR

            
            echo "<p> función para modificar la hora del servidor", date_default_timezone_set("Europe/Sarajevo")."</p>";
            echo "<p> Función para saber la hora del servidor", date_default_timezone_get()."</p>";
            echo "<p> Función date para poner una fecha con formato ", date ('d-m-y h:i:s', time())."</p>";

            //strtotime
            echo "<p>","Cumpleaños de Ismael","</p>";

            $cumple2= strtotime('07-27-01');
            //m-d-y
            $cumple= strtotime('01-07-27');
            //establece la fecha en segundos
            
            echo "<p>",$cumple,"</p>";
            echo "<p>". date('d-m-y h:i:s',$cumple)."</p>";

            $hoy=time();//Función time() devuelve el dia de hoy 
            
            echo "<p>".date ('d-m-y h:i:s', strtotime("+ 1 week 2 hours")), "</p>";
            echo "<p>".date ('d-m-y h:i:s', strtotime("next Monday")), "</p>";  
            //echo date_diff(time, strtotime("last Thursday"));  
            $diaObjeto=new DateTime();
            $diaObjeto2=new DateTime('2021-01-01');
            echo "<p>".($diaObjeto2->diff($diaObjeto))->format('%R%a days')."</p>";
           
            $diaMKtime= mktime(5,42,50,10,6,2021);
            echo "<p>", date ('d-m-y h:i:s', $diaMKtime)."</p>";

            echo "<p>";
            print_r (getdate());
            echo "<p>";
            $pruebaDia=getdate();
            echo "<p>",$pruebaDia['wday']."</p>";
        ?>
    </main>

    <footer>
        <p>Footer de David</p>
        <a href="../index.html"><img src="../web-root/img/volver.png" height="20px"></a>
    </footer>
</body>
</html>