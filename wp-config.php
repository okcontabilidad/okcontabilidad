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
define( 'DB_NAME', 'okcontabilidad_db' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', ';;kY`P2jzcFgq]5RnMNmC}<c$rEUvs3bqS[5gQu$.>lUv8Zzxm=b@r5D_??E-]lN' );
define( 'SECURE_AUTH_KEY', '[5H;y]<|9FrCfya>`Zov}5)yH68Kc1.|L7Usk4vWIhAq!u!oie5p_K}[?Z`+^2u:' );
define( 'LOGGED_IN_KEY', 'G7a,T<~cffDWSt(@NK$g@#J2FjuG*:Nrd%^qw+KnMBrAL_t>bsbHO*0 y1=,m&ND' );
define( 'NONCE_KEY', 'sP*^=Xp-+XhdmubrPBRAT@bw_)?,!4RA5eb~.br( GAL{#<&U$8[3B($AzoH]8qt' );
define( 'AUTH_SALT', '5>?@MUQykjk$dw&Ua<UYa^CXmsp4w?W)*6/,u=Eb)v|95N1#zwv9!Z~pph80@GMa' );
define( 'SECURE_AUTH_SALT', 'j3nthCSMrO#.^Mg2;:(y0*xG0?aIa&ixzxiZX;_RgrkImT/XL=u/(jM0O?a8A&sF' );
define( 'LOGGED_IN_SALT', 'tb[u|M9kV>aGNtu,9FilN!)qq_8fqJ*f&{A0w>2jo!@Lm}8=@7PL2KY=z(9M}_0V' );
define( 'NONCE_SALT', '~T401^9T69wUltH#H;1u{Ey{fpmBSnP6!`bH`@dKsq&7FM<^~Lkw=KhJRk-_A}b`' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

