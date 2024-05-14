<?php

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'test' );
define( 'DB_PASSWORD', '12345' );
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('AUTH_KEY',        'gLu-Sed3FC-so_Qb#]-{atkX(Z+e]T>o?^L5w4UU9P_r-}+tqBzu<,$K]7#g2wv>');
define('SECURE_AUTH_KEY', 'i=OV0-yM(izX5POz91HU&lZ,<VUNw/{<%oJL-ABcXCYk?4s$X9[$Z|XOKoy(F|s)');
define('LOGGED_IN_KEY',   '6#&bc3(KhJ-|eJcCsd&n#andxOh=W]Z293L$>LhRrAL^&f43x6zQbw`<-wdt01aa');
define('NONCE_KEY',       ' b R]5,~Z /%WXjdYIGKs|u@l72)X&$orO|(.jn7BCqK%fJY<j6N 00ATg)M-n)}');
define('AUTH_SALT',        'Z-c+g:h)g)SXlbHr=QeBuvZd9l%-alvE``<W5lF2WJRWjG|1 sUq!c-(c4*B%+1)');
define('SECURE_AUTH_SALT', 'wC_e-Oje+va|*m|$N4Z-Uth+O2]q=|,g/;~ITx3xcX(4q^:+|_>G?ml+JaUoF^zF');
define('LOGGED_IN_SALT',   'VOC#($4@.{KVk-}#0#w70dW,;O5{7aK-,|+i|j7sDys|PmW^L?Q(ulmh.PpO!4vy');
define('NONCE_SALT',       'a-HDZ]IR&v2<Gg;{ZC)ZA.J<Cx%cyZ&e]rp[gE]:3Ml(]-OBLMs1_TltWBZ{QV}{');
$table_prefix = 'wp_';
define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

require_once ABSPATH . 'wp-settings.php';
