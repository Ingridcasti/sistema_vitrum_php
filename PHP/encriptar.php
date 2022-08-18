<?php
    define('METHOD','AES-256-CBC');
    define('SECRET_KEY','$VITRUMHN@2016');
    define('SECRET_IV','101712');
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

?>
<!DOCTYPE html>
<html>
<head>
	<title>Encriptar</title>
</head>
<body>
	<?php
		$enc='Contra123';
		$encrip=encrip::encriptar($enc);
		echo '<p>'.$encrip.'</p>';
		$dencrip=encrip::desencriptar($encrip);
		echo '<p>'.$dencrip.'</p>';
	?>
</body>
</html>