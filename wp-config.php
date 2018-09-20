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
define('DB_NAME', 'wordpress_bootstrap');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')CCbEcx<urNR[aG6#<:=Y8o$Q7sA[{P`b;{SJRZ,stnt4UVW{v x`,nm|XP% i02');
define('SECURE_AUTH_KEY',  '8Gfd+scQ;sgfp#q7e>ZlV*<}o>~)dz;EjfJp(1*xj.A%sYoI.%:01I?{!WP8R}M ');
define('LOGGED_IN_KEY',    'NzRh[<*YRF?ZC=`**Zh43I?Vmz+28/GZBa[vLq)q01pORG2Fi?R/R7k<^fc2cqMr');
define('NONCE_KEY',        'm]Govsf<uqJqC6y}#p7q~P;`,figHA(jZP,gu_n<[B5J~n0r_5<Hik@H8IZE)iF0');
define('AUTH_SALT',        'Uw<cM]+{C9eR`a3R6Hn8@:M.<%Y6oF<(=I8h~my[bkT%?f?uW{r(ajVIo:C4MzH%');
define('SECURE_AUTH_SALT', 'x.8B-B:l/+*|z@|0*,n`_7LLbt27q>@{7>tD!]{T-?we%,=x!RX+Z,!~`xzl,dq_');
define('LOGGED_IN_SALT',   '.&iL%;R.#au.;=>+>G_!A&78WLl?8$#-P@eB|Ka:e@-v9T6wS|*iIay< 9N7C[-u');
define('NONCE_SALT',       'zv/rgy- ;;Q3cmFDfrLrr>IlACDwo57N]uR#|p KVjL6^@L}~o^9zKf2j241 Sb%');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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