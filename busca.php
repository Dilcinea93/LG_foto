
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/validacion.js"></script>

    <title>Tablero - Control de visitas</title>
</head>
<body>
     


                            <form accept-charset="utf-8" method="POST">
                                <center><h1><i class="fa fa-search" aria-hidden="true"></i>
                                 <input type="text" name="busqueda" id="busqueda" 
    maxlength="30" autocomplete="off" onKeyUp="buscar();" style=" font-size: 1em;">
</h1></center>
                            </form>
                        
                        <div id="resultadoBusqueda"></div>
                        </div>

                            <script>
                                $(document).ready(function() {
                                    $("#resultadoBusqueda").html('<center><p>Sin instrucciones de busqueda</p></center>');
                                });

                                function buscar() {
                                    var textoBusqueda = $("input#busqueda").val();
 
                                    if (textoBusqueda != "") {
                                        $.post("buscarpersona.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
                                            $("#resultadoBusqueda").html(mensaje);
                                        }); 
                                    } else { 
                                         $("#resultadoBusqueda").html('<center><p>Sin instrucciones de busqueda</p></center>');
                                        };
                                };
                            </script>
                            


                        <!--Seccion para el registro (formulario de registro)-->
              

</body>
</html>
