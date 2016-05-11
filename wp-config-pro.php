<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'bufetebendodo_com');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'bufetebendodo_com');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'DMyh8ZWY');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'bufetebendodo.com.mysql');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '.l<k%(kA1{9(qdQbz+S|?UuBv|tVy.CJqGY-^-*2aq8Rr8YO^@fC+qAEpK:8ZB`#');
define('SECURE_AUTH_KEY', 'aEc{,ZJfpA<P=Jp?)]9p<X-34~VAg(n-B%oG>cGK`WFq;iea+b](BM0RqQ?+$xd2');
define('LOGGED_IN_KEY', '|XDRnv5|v%Y!AP=M]FqW>$Y*|mBG*LIF}Y;P1e(9;&;#0E^/aZ!OZ#@Rk+8S~%~J');
define('NONCE_KEY', 's#ctB1qk5=M<-&{Li+heM=tJ{s:W|$<XI4|p)T-x/Q8q1n^B,:3HB%I`BhD@F;xB');
define('AUTH_SALT', 'E NLdv$694[39-),ksPi!Nhtn}fGX@%[ob-SO~R4g|4=QS})G)LnV!OU]FzwS[>+');
define('SECURE_AUTH_SALT', 'ero^D#(2Q>8;eFn2x obAz-)YBEi`~<dXbMNK-gCI`Bt(+c(#4%K6VL>2R+g[D;T');
define('LOGGED_IN_SALT', 'UGO+etMNp/Y]bRLd<buzc|F_dQ[3+|pjHuzA[*t%<u/<7py+5[J5I/ENM%W1#g9W');
define('NONCE_SALT', '1|$_.tP*zal?MHN{hcK+;6:|XJ$JKD%p%;BI-dS/0%{YOP.z(lW1nW3e?lQ |ha>');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

