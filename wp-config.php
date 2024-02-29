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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L92r21iFa.jQkUz-IBko?@O=&66+ XQQ5A{r %*@7ngJG;V~PO9HOdx^4ST8BwIZ' );
define( 'SECURE_AUTH_KEY',  'pdH#Wn=s$I@2E{w8qHhhtn?*&6Xqj83wgUEztrY!336<=KJ{$GrI32.w~C#LaBE#' );
define( 'LOGGED_IN_KEY',    '9O/FIam%i>X`#7|wAlvPTD*G`k4E/$V,AtA{7bV48=Df>DqQrKXE+t?:BHQc]qrz' );
define( 'NONCE_KEY',        'SG3W[^n[:0|$9wk~F@Dbn678S;#P3u=g&NRK)I&-X}@75M2^7+fgJdmgwTF^|WcV' );
define( 'AUTH_SALT',        'h?PA*CFrSlAT:+WT{: 9!&d29~uR?ld4hJ]8YV[tj^Un@@wFNz1fNUTFVRxuh#4;' );
define( 'SECURE_AUTH_SALT', '$t^}}U$9Y~8^UqQ6`gM95T`AZcwN)WtVVK$iFUE9i1Jf7N5q:.p7?{nb<0M)M=H7' );
define( 'LOGGED_IN_SALT',   ',Xn0jQH:^DF[|88Fm(@VPH6_+qeq]q0*ah.ZLrTf$=[C4fP#BJpe_K a{gI_`mJm' );
define( 'NONCE_SALT',       '~Zs/M-#x@ertC|AloAgk{f6;{XW8<6PNonVr*5g$UMS(];<Is~qFBZZ$+V)>ZT1?' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
