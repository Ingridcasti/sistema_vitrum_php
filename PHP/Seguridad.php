<?php
    header("Content-Type: text/html;charset=utf-8");
    session_start();
    define('METHOD','AES-256-CBC');
    define('SECRET_KEY','$VITRUMHN@2016');
    define('SECRET_IV','101712');
    require("Conexion.php");
@    $n_usuario=$_POST['nombre_u'];
@    $contra=$_POST['contra'];
@    $n_contra=$_POST['n_contra'];
@    $confirmar=$_POST['confirmar'];
@    $nombreusu=$_POST['nombreusu'];
@    $correo=$_POST['correo'];

    $n_usuario = trim($n_usuario);
    $contra = trim($contra);
    $n_contra = trim($n_contra);
    $confirmar = trim($confirmar);
    $nombreusu = trim($nombreusu);
    $corre = trim($correo);
    class encrip 
        {
        public static function encriptar($string){
            $output=FALSE;
            $key=hash('sha256', SECRET_KEY);
            $iv=substr(hash('sha256', SECRET_IV), 0, 16);
            $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
            $output=base64_encode($output);
            return $output;
        }
        public static function desencriptar($string)
        {
            $key=hash('sha256', SECRET_KEY);
            $iv=substr(hash('sha256', SECRET_IV), 0, 16);
            $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
            return $output;
        }
    }
    if ($nombreusu && $correo)
    {
    $sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE nombre_usuario='$nombreusu'");
    if($f3=mysqli_fetch_assoc($sql))
        {
        if ($correo==$f3['correo_electronico']) 
            {
                echo '<script>alert("Correo Enviado con éxito")</script>';
                header("Location: login.php");
            }
        else
            {
                echo '<script>alert("Correo no coincide")</script>';
                header("Location: recuperar_contraseña.php");
            }   
        }
        else
        {
            echo '<script>alert("Nombre de usuario no existe")</script>';
            header("Location: recuperar_contraseña.php");
        }
    }
    $sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE nombre_usuario='$n_usuario'");
    if($f=mysqli_fetch_assoc($sql))
    {
        $claved=encrip::desencriptar($f['contras']);  
        if($contra==$claved && $n_usuario==$f['nombre_usuario']) 
        {
            $_SESSION['id_usuario']=$f['id_usuario'];
            $_SESSION['nombre_u']=$f['nombre_usuario'];
            $_SESSION['dir_img']=$f['dir_imagen'];
            $_SESSION['estado']=$f['id_estado'];
            $_SESSION['tipo_u']=$f['id_tipo_usuario'];
                 if ( $_SESSION['estado'] == '1') 
                {
                    echo "<script> alert('Debe actualizar su Contraseña'); window.location= 'actualizar_contra.php'</script>";
                }
                elseif( $_SESSION['estado'] == '2') 
                    {
                        echo "<script> alert('Bienvenido'); window.location= 'mdi_vitrumhn.php'</script>";
                    }
                    if( $_SESSION['estado'] == '3')
                    {
                         echo "<script> alert('Usuario Inactivo'); window.location= 'login.php'</script>";
                    }
        }
        else
            {
                echo "<script> alert('Contraseña incorrecta'); window.location= 'login.php'</script>";
            }
    }
    elseif($n_usuario!=$f['nombre_usuario'])
        {
            echo "<script> alert('El Usuario no existe'); window.location= 'login.php'</script>";
        }
    $clavee=encrip::encriptar($n_contra); 
    if ($n_contra && $confirmar)
    {
        $sql=mysqli_query($mysqli, "UPDATE usuarios SET contras = '$clavee', id_estado ='2' WHERE id_usuario = '$_SESSION[id_usuario]'");
        $sql1=mysqli_query($mysqli, "UPDATE empleados SET id_estado ='2' WHERE id_empleado = '$_SESSION[id_usuario]'");
        echo "<script> alert('Contraseña Actualizada'); window.location= 'login.php'</script>";
    }
?>