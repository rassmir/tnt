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
define('DB_NAME', 'tnt');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/* Desactivar el uso de FTP para actualizar Plugins y Themes en WordPress */
define('FS_METHOD','direct');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '6N:}FmXgp4A1]E}u(Va1b`[yYXI~!~%Acx)DzgL<KB5;f-aow%JTCwjB_kyi7pZz');
define('SECURE_AUTH_KEY', 'odY]SiHJKZrr8RO#0(,bk= 5MKidvcBKK6emNJur^n3g:{)@#zy/Ch!eI{d++y.Z');
define('LOGGED_IN_KEY', 'PCP*ig8Q(zl7Q=<F EdY-zMs1115@.Ik-oow+>8ya1L0!G5v#*#;ukFzXO.;B(}L');
define('NONCE_KEY', '+&tHt(yfuS,amudxb#yy%*:zZMbemUl9JZ-N_:!!ho{bVwd(;enRkh/|A(r;b0/F');
define('AUTH_SALT', 'GJw-B^!1pU?=`G^8(3up;B7];l;jt9L;T]{zHRGr+Z=Msf0(5a. f#p:5NO:^{}&');
define('SECURE_AUTH_SALT', '9^r-ElSAdke6^!x6AAx N%n9Cc|gOSyp<H7qu`vcTu [K}Zw1hTc$:XOo[ip4,jT');
define('LOGGED_IN_SALT', 'H~j0.#Q=XjphWDH<C>9_J$[f=;k{Ch(xT`:9j$TW%b!p<x;FrbKG[}<E(aS-5=|Q');
define('NONCE_SALT', '05EYG(pxJ^60/lV[>97FK2+]w(O0FT5;dt?[X)Q>vd fFI;ntrX6TluhEZ:LsRMo');

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
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

