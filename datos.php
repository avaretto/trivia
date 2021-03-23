<link href="css/estilo.css" type="text/css" rel="stylesheet">

<?php

require ("dbTrivia.php");

 //establecer conexion a servidor
 $conexion = mysqli_connect($db_host, $db_user, $db_pass);
 if(mysqli_connect_errno()) {
     //notifica algo en caso de error
     echo "fallo de conexion<br>";
     //salir para liberar conexion
     exit();
 }else{
     //echo "conexion establecida<br>";
 }

 //validar existencia de la base de datos
 mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la base de datos<br>");
 //establecer codificacion
 mysqli_set_charset($conexion, 'utf8');

$nombre = $_POST['nombre'];
$puntos = $_POST['puntos'];
$categoria = $_POST['categoria'];

    //echo $nombre;
    //echo $puntos;
    //echo $categoria;

//evaluar categoria de trivia
if ($categoria === 'naturaleza'){
    //consulta naturaleza
    $consulta = "INSERT INTO rankingnaturaleza (nombre,puntos)
    VALUES (?,?)";

    //validar consulta
    $resultado = mysqli_prepare($conexion, $consulta);

    //acceder a resultados, si la variable guarda resultados
    if(!$resultado) {
        echo "Error: " . mysqli_error($conexion);   
    }
    //prepara sentencia
    $ok = mysqli_stmt_bind_param($resultado, "si", $nombre, $puntos);
    $ok = mysqli_stmt_execute($resultado);

    //validar variable ok
    if($ok == false){
        echo "Error:";
        
    }else{
        //si se ingresa correctamente
        //echo "se ha ingresado correctamente\n";
    }
    //mostrar ranking
    $consulta = 'SELECT * FROM rankingnaturaleza order by puntos DESC LIMIT 10';
                $resultado = mysqli_query($conexion, $consulta);
            
                //acceder a resultados
                //registros de todo el ranking
                echo "<br>";
                echo "<h1 class= h1Titulo >Ranking Naturaleza</h1>";
                echo "<br>";

                echo "<table id=tabla>";
                echo "  <tr>";
                echo "      <td> Nombre</td>";     
                echo "      <td> Puntos</td>";             
                echo "  </tr>";
                echo "</table>";

                while($fila = mysqli_fetch_row($resultado)){
                    
                    /*
                    echo "<table id='tabla' > <tr><td>";

                    echo $fila[0] . "</td><td>";
                    echo $fila[1] . "</td>";
                    
                    echo "</tr></table>";
                    */

                    echo "<table id=tabla>";

                    echo "  <tr>";
                    echo "      <td>$fila[0]</td>";     
                    echo "      <td>$fila[1]</td>";             
                    echo "  </tr>";

                    echo "</table>";        
                }
}

if ($categoria === 'musica'){
    //consulta musica
    $consulta = "INSERT INTO rankingmusica (nombre,puntos)
    VALUES (?,?)";

    //validar consulta
    $resultado = mysqli_prepare($conexion, $consulta);

    //acceder a resultados, si la variable guarda resultados
    if(!$resultado) {
        echo "Error: " . mysqli_error($conexion);   
    }
    //prepara sentencia
    $ok = mysqli_stmt_bind_param($resultado, "si", $nombre, $puntos);
    $ok = mysqli_stmt_execute($resultado);

    //validar variable ok
    if($ok == false){
        echo "Error:";
        
    }else{
        //si se ingresa correctamente
        //echo "se ha ingresado correctamente\n";
    }


    //mostrar ranking
    $consulta = 'SELECT * FROM rankingmusica order by puntos DESC LIMIT 10';
                $resultado = mysqli_query($conexion, $consulta);
            
                //acceder a resultados
                //registros de todo el ranking
                echo "<br>";
                echo "<h1 class= h1Titulo >Ranking Música</h1>";
                echo "<br>";

                echo "<table id=tabla>";
                echo "  <tr>";
                echo "      <td> Nombre</td>";     
                echo "      <td> Puntos</td>";             
                echo "  </tr>";
                echo "</table>";

                while($fila = mysqli_fetch_row($resultado)){
                    
                    /*
                    echo "<table id='tabla' > <tr><td>";

                    echo $fila[0] . "</td><td>";
                    echo $fila[1] . "</td>";
                    
                    echo "</tr></table>";
                    */

                    echo "<table id=tabla>";

                    echo "  <tr>";
                    echo "      <td>$fila[0]</td>";     
                    echo "      <td>$fila[1]</td>";             
                    echo "  </tr>";

                    echo "</table>";        
                }
}

if ($categoria === 'historia'){
    //consulta historia
    $consulta = "INSERT INTO rankinghistoria (nombre,puntos)
    VALUES (?,?)";

    //validar consulta
    $resultado = mysqli_prepare($conexion, $consulta);

    //acceder a resultados, si la variable guarda resultados
    if(!$resultado) {
        echo "Error: " . mysqli_error($conexion);   
    }
    //prepara sentencia
    $ok = mysqli_stmt_bind_param($resultado, "si", $nombre, $puntos);
    $ok = mysqli_stmt_execute($resultado);

    //validar variable ok
    if($ok == false){
        echo "Error:";
        
    }else{
        //si se ingresa correctamente
        //echo "se ha ingresado correctamente\n";
    }


    //mostrar ranking
    $consulta = 'SELECT * FROM rankinghistoria order by puntos DESC LIMIT 10';
                $resultado = mysqli_query($conexion, $consulta);
            
                //acceder a resultados
                //registros de todo el ranking
                echo "<br>";
                echo "<h1 class= h1Titulo >Ranking Historia</h1>";
                echo "<br>";

                echo "<table id=tabla>";
                echo "  <tr>";
                echo "      <td> Nombre</td>";     
                echo "      <td> Puntos</td>";             
                echo "  </tr>";
                echo "</table>";

                while($fila = mysqli_fetch_row($resultado)){
                    
                    /*
                    echo "<table id='tabla' > <tr><td>";

                    echo $fila[0] . "</td><td>";
                    echo $fila[1] . "</td>";
                    
                    echo "</tr></table>";
                    */

                    echo "<table id=tabla>";

                    echo "  <tr>";
                    echo "      <td id=nombre>$fila[0]</td>";     
                    echo "      <td id=puntos>$fila[1]</td>";             
                    echo "  </tr>";

                    echo "</table>";        
                }
}

//cerrar conexion
mysqli_close($conexion);
?>