<?session_start(); /*login para el administrador, porque esto va a consultar en la tabla del administrador.. donde ya hay un usuario registrado porque lo registre yo*/





function verificar_login($user,$password) {
   $conexion= new mysqli('localhost','root','','l_g_fotografia2');
  $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$user' and contrasena = '$password'"; /*selecciona de la tabla usuario que guarda al administrador*/
    $rec = $conexion->query($sql); 
   $count = 0;   while($row = $rec->fetch_array())   {
        $count++;      
        $result = $row;     }

    if($count == 1)  {
        return 1;
    }

    else
    {
        return 0;
    }
    
    
}

if(!isset($_SESSION['user'])){
       if(isset($_POST['login']))   { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        {
            $_SESSION['user'] = $result->nombre_usuario; 
        ?>    <script>location.href="../../index2.php"</script>

            <?
        } 
            else
        {
            ?><script>alert('El registro no existe')</script>
            <script>location.href="../../index.php"</script><?
        }   }}
        else {
            ?>
            <script>location.href="../../index2.php"</script>

            <?
        }

?>