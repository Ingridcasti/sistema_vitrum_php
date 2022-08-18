<?php
error_reporting(E_PARSE);
    const USER = "root";
    const SERVER = "localhost"; 
    const BD = "vitrumhn";
    const PASS = "";
    const BACKUP_PATH =  "../backup/";
    date_default_timezone_set('America/tegucigalpa');
        class SGBD
        {
        public static function sql($query)
        {
            $con=mysqli_connect(SERVER, USER, PASS, BD);
            mysqli_set_charset($con, "utf8_general_ci");
            if (mysqli_connect_errno()) 
            {
                printf("Conexion fallida: %s\n", mysqli_connect_error());
                exit();
            }
        else
        {
            mysqli_autocommit($con, false);
            mysqli_begin_transaction($con, MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
            if($consul=mysqli_query($con, $query))
            {
                if (!mysqli_commit($con)) 
                {
                    print("Falló la consignación de la transacción\n");
                    exit();
                }
            }
            else
            {
                mysqli_rollback($con);
                echo "Falló la transacción";
                exit();
            }
            return $consul;
        }
    }  
    public static function limpiarCadena($valor) {
        $valor=addslashes($valor);
        $valor = str_ireplace("<script>", "", $valor);
        $valor = str_ireplace("</script>", "", $valor);
        $valor = str_ireplace("SELECT * FROM", "", $valor);
        $valor = str_ireplace("DELETE FROM", "", $valor);
        $valor = str_ireplace("UPDATE", "", $valor);
        $valor = str_ireplace("INSERT INTO", "", $valor);
        $valor = str_ireplace("DROP TABLE", "", $valor);
        $valor = str_ireplace("TRUNCATE TABLE", "", $valor);
        $valor = str_ireplace("--", "", $valor);
        $valor = str_ireplace("^", "", $valor);
        $valor = str_ireplace("[", "", $valor);
        $valor = str_ireplace("]", "", $valor);
        $valor = str_ireplace("\\", "", $valor);
        $valor = str_ireplace("=", "", $valor);
        return $valor;
    }
}