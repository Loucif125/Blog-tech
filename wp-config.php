<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Zc~:oZg&5b8koabLCMehg+TMD)Itdu(xt$6Xl:O0N89nY]>BYu-/,LrB>96<S`c1' );
define( 'SECURE_AUTH_KEY',  '+FZ>AX0SWcy^K0=%9^3e$lh$]3ZE(?WB2gUFEU{?~#SWOt54-2*i2F;&Mr^M+lW|' );
define( 'LOGGED_IN_KEY',    '`f$!d$Z%W,NY[/+IS<%r~`hdG0dV-`a<c.b&j$(e2bU{^qoW=U^&^=G{>Pk>@YC{' );
define( 'NONCE_KEY',        'qe9Wtm-D/qIZ(msCvI9v*{.uHev^3E{q(xB|U9aHFx#nod/Z+1qyq:G|und*XYOR' );
define( 'AUTH_SALT',        'juD|lfY<@]lPL,d<AL/<9[&.KL3FOK^8H!PMVhELX?}4$]CvpCtsAd$:xB1FTJ(K' );
define( 'SECURE_AUTH_SALT', 'UV2?$C.O:VMD_zrv7]i{X9eonLW{O$&j+e4P@UZ,8@X?e2Uns7Ktdv^+OO7_WP 5' );
define( 'LOGGED_IN_SALT',   '=i#^$^C8jO%&KioR2TVR6GwW9!vz^c8y8J>fEL7HgP0S*rz[nIpu]]90G:)[][Bi' );
define( 'NONCE_SALT',       '2:$ 1(SNKx(o>?DM%<kd2ze/(~e AjO<W1&z@nOt+PCeJo1_.]AnF[gD{j4|+Zq1' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
