<?php
/**
 * Setările de bază pentru WordPress.
 *
 * Acest fișier este folosit la crearea wp-config.php în timpul procesului de instalare.
 * Folosirea interfeței web nu este obligatorie, acest fișier poate fi copiat
 * sub numele de "wp-config.php", iar apoi populate toate detaliile.
 * 
 * Acest fișier conține următoarele configurări:
 *
 * * setările MySQL
 * * cheile secrete
 * * prefixul pentru tabele
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 *
 * @package WordPress
 */

// ** Setările MySQL: aceste informații pot fi obținute de la serviciile de găzduire ** //
/** Numele bazei de date pentru WordPress */
define('DB_NAME', 'test1');

/** Numele de utilizator MySQL */
define('DB_USER', 'root');

/** Parola utilizatorului MySQL */
define('DB_PASSWORD', '');

/** Adresa serverului MySQL */
define('DB_HOST', 'localhost');

/** Setul de caractere pentru tabelele din baza de date. */
define('DB_CHARSET', 'utf8mb4');

/** Schema pentru unificare. Nu faceți modificări dacă nu sunteți siguri. */
define('DB_COLLATE', '');

/**#@+
 * Cheile unice pentru autentificare
 *
 * Modificați conținutul fiecărei chei pentru o frază unică.
 * Acestea pot fi generate folosind {@link https://api.wordpress.org/secret-key/1.1/salt/ serviciul pentru chei de pe WordPress.org}
 * Pentru a invalida toate cookie-urile poți schimba aceste valori în orice moment. Aceasta va forța toți utilizatorii să se autentifice din nou. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O*m;&jaWv11v[F0Hp(S0Yn5U:mZL7VBwr%;c,K}I52dgV]9^fE7/D$Z+_)u]}# S');
define('SECURE_AUTH_KEY',  'TDxgpa;JOh[kqi[Zeuu!+=ILAq)l`jYo~2&~L98J-6b3G[==?}yGJ>NaVt4@J[#a');
define('LOGGED_IN_KEY',    'J6cb) ph$o:Ijz+tb&>qd4K8&%+?D#qWzr;%2y)Pcfk8])]W?A.6L- eRn.KbE/v');
define('NONCE_KEY',        '$^Y^x6KJ{!z^#J&5N$4E?N2W957i:&:KCi6w{ I^_^z~?L{ibL410t#q1mg3cf9N');
define('AUTH_SALT',        '/ab?EmW_!Bst}KB7J:YHeVq=Gb&ls#$[;RSbsf>NbTDaT]CT%@!@et-1wCIPXoTi');
define('SECURE_AUTH_SALT', '` 8MI{Yrq?/,|zzhEcnW,t|j[>%V>w23PclfVZ,>sf|/%(}ju<oWRvptnL5m: mI');
define('LOGGED_IN_SALT',   '/xr:^MMiZ`!jI_x-k]{QwA|ztQ<wQ+R0NGW$+>BpP>L)BRv-$MEHi.ef2!!]W[=|');
define('NONCE_SALT',       'ns1hO,+`o+=OB}9Yh]+A4,IEOV2i/-4!_d~;dK}o>/q-4=~v,)OOXkz[%LnixEUs');

/**#@-*/

/**
 * Prefixul tabelelor din MySQL
 *
 * Acest lucru permite instalarea mai multor instanțe WordPress folosind aceeași bază de date
 * dacă prefixul este diferit pentru fiecare instanță. Sunt permise doar cifre, litere și caracterul liniuță de subliniere.
 */
$table_prefix  = 'wp_';

/**
 * Pentru dezvoltatori: WordPress în mod de depanare.
 *
 * Setează cu true pentru a permite afișarea notificărilor în timpul dezvoltării.
 * Este recomadată folosirea modului WP_DEBUG în timpul dezvoltării modulelor și
 * a șabloanelor/temelor în mediile personale de dezvoltare.
 *
 * Pentru detalii despre alte constante ce pot fi utilizate în timpul depanării,
 * vizitează Codex-ul.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* Asta e tot, am terminat cu editarea. Spor! */

/** Calea absolută spre directorul WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Setează variabilele WordPress și fișierele incluse. */
require_once(ABSPATH . 'wp-settings.php');