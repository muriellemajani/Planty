<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4phbdkncD/QsBhVWBFjujY$5hp1}ec#rll.2=UDF@ VsS*%Ii LJne7l|fNe#(`(' );
define( 'SECURE_AUTH_KEY',  '0A{*}.AM !cwBMk%,O@=f.tx @QaV|cfG8MS{{Q-8-3YZVm|959cA3j@; LS<_ri' );
define( 'LOGGED_IN_KEY',    'q+&- 4%w%^USc4 DSQ4c*~{.uB@G&+xqbokT(BNH^S;BvSWdP#feO^ z~xyrMOT`' );
define( 'NONCE_KEY',        'uqv7Xv+@Q<XM[x;RV}Pwot1tp8/(@v5FNG[uwmBQm?Rv4<9rY={PB3_`Th8U)%_^' );
define( 'AUTH_SALT',        '7!woh$*G,hHRxe]#voU!NJi+IgCes.439p}Tj]A?Hh]E2u/_HK7vWJ9|?<H$.^s,' );
define( 'SECURE_AUTH_SALT', 'BZ9lz=q% {Rlyb>N}jT!!*,nkA]x^km~^{aORw0l63Zl*_iTxgyuucw$4>JDGY%u' );
define( 'LOGGED_IN_SALT',   '~`$4Vv=FdXdK!yGAd(tbT*Gy,OJB$f|@Qe^owtkyCc]WA= S0c*aYk8=#vV~Y^%@' );
define( 'NONCE_SALT',       'h40&oTp)<I2pf2|#0#CA|{)at-dlaz4IR^w1t*ZUKl!M(aZRI=Hn}r:qhw0jnY=:' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
