<?php
    require ('dbTrivia.php');

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

    $consulta = 'SELECT * FROM rankingMusica order by puntos DESC LIMIT 10';
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

    //cerrar conexion
    mysqli_close($conexion);

?>