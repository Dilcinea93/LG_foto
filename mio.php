<?php 
    $conexion=new mysqli('localhost','root','1234','l_g_fotografia2');
 ?>

<?php

$consultaBusqueda = $_POST['valorBusqueda'];

$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

$mensaje = "";

$dia = date("d");
$mes = date("m");
$año = date("Y");
$hoy = $dia.'/'.$mes.'/'.$año;


if (isset($consultaBusqueda)) {

    //Selecciona todo de la tabla mmv001 
    //donde el nombre sea igual a $consultaBusqueda, 
    //o el apellido sea igual a $consultaBusqueda, 
    //o $consultaBusqueda sea igual a nombre + (espacio) + apellido
    $consulta = $conexion->query("SELECT * FROM clients 
    WHERE id_c LIKE '%$consultaBusqueda%' 
    OR nombre_c LIKE '%$consultaBusqueda%'
    ");



    //Obtiene la cantidad de filas que hay en la consulta
    $filas = $conexion->fetch_assoc();

    //Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
    if ($filas === 0) {

            ?>
        <br><br><br>
        <center><p>No se ha encontrado ninguna persona relacionada con estos datos</p>
         <button type="button" id="ClickMostrarRegistro2" class="btn btn-danger">Agregar Usuario</button></center>

            <?php

    } else {
        //Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
        echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';

        //La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
        while($resultados = $consulta->fetch_assoc()) {
            $ci = $resultados['ci_c'];
            $nombre = $resultados['nombre_c'];
            $razon = $resultados['razon_s_c'];

            //Output
            $mensaje .= '  
            <tr><td><div>'.$ci.'</div></td><td>'.$nombre.'</td><td>'.$razon.'</td></td>
            </tr>
            ';
}
            ?>

            <table class="table table-condensed">
                <tr bgcolor= "#8299af" style="color:white;">
                    <td><strong>Cédula</strong></td>
                    <td><strong>Nombres</strong></td>
                    <td><strong>razon</strong></td>
                </tr>
                    <?php
                        echo $mensaje;
                    ?>
            </table>

            <?php

        };

    }; 

?>

<script type="text/javascript">
            $('document').ready(function(){
                $('#visitado').click(function(){
                var visita = 1;
                var idUsuario = $('#idUsuario').val();
                var funcionario = $('#funcionario').val();

                    jQuery.post("nuevavisita.php", {
                    visita:visita,
                    idUsuario:idUsuario,
                    funcionario: funcionario

                }, function(data, textStatus){
                        buscar();
                    });
                });
            });
</script>

<script>
    $("#ClickMostrarRegistro2").click(function(){
            $('.MostrarRegistro').show();
            $('.MostrarHistorial').hide();
            $('.MostrarInicio').hide();
         });
</script>