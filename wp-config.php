<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'atelier_numerique');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '270395thomas');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Y1l~;x )Z$nYMog:QT%(er>j9%i!D-X|y<>=O`yPttLI>_B&p_TEBgN_bK-7K$]a');
define('SECURE_AUTH_KEY',  '8rMxa4rY=PA0qPwsw)jx&Vg1]-{=yjGy{nKD#W.k!@[J|u3o2&>6qa>xabC!(!(]');
define('LOGGED_IN_KEY',    'kUWk}<U[mgepQ!=6[V$Q7,N]rk[Q&vKB(dy9X0uB9Ua%OZ5P{X/`KrRPPWT&YhL6');
define('NONCE_KEY',        'Vj`6pT/)wuKlB]41N69X|D0Q{R;lJabgAAvI:!r;E{.neLYM%=R>w(NSkSZ;?tms');
define('AUTH_SALT',        ' V]],$l;ugl{8:KB|y@Cr4w^;,/j[uR}qy19h1b^$y`b|a|~[4@Pb<nWiY(HHg!6');
define('SECURE_AUTH_SALT', '`6:`nMAAiISsk!e@EyJ}rJAq3r!2b2-4.CdM01<])Py01mOJqZQ(<mxDy=Gt&t,1');
define('LOGGED_IN_SALT',   'amw}XJd/WP:v{1D&LTJiArxklYhRCt__.N`jyu^)Rpwahq{LqCEYF.;5~WxT^az^');
define('NONCE_SALT',       'A8hrHCQZR[+jh_6~J4lT~K4FsQmSDR[/8a~gRJ;c#?vgyRrtc #^># bs~KzJl,]');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
