<?php
/**
 * Baskonfiguration f�r WordPress.
 *
 * Denna fil inneh�ller f�ljande konfigurationer: Inst�llningar f�r MySQL,
 * Tabellprefix, S�kerhetsnycklar, WordPress-spr�k, och ABSPATH.
 * Mer information p� {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter f�r du fr�n ditt webbhotell.
 *
 * Denna fil anv�nds av wp-config.php-genereringsskript under installationen.
 * Du beh�ver inte anv�nda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i v�rdena.
 *
 * @package WordPress
 */

// ** MySQL-inst�llningar - MySQL-uppgifter f�r du fr�n ditt webbhotell ** //
/** Namnet p� databasen du vill anv�nda f�r WordPress */
define('DB_NAME', 'grey');

/** MySQL-databasens anv�ndarnamn */
define('DB_USER', 'root');

/** MySQL-databasens l�senord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning f�r tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp f�r databasen. �ndra inte om du �r os�ker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * �ndra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan n�r som helst �ndra dessa nycklar f�r att g�ra aktiva cookies obrukbara, vilket tvingar alla anv�ndare att logga in p� nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Kl{`aV^^T=d4G?2iHUtn_M=;A0#W/:s=J^VC{{?w>Rw%%qlfxIs%BPV,B&lz_Jeq');
define('SECURE_AUTH_KEY',  '6;.of[+sF6|CS{h-_}EgW%O u/hi<zlzaQ(W8v23|#eEt,T1b&-Or|bLwj?ziz]L');
define('LOGGED_IN_KEY',    'U#_Q$|{j^A5|R|A`2/G?(]oW!iHztT-AI8KW Iaho<2T>R+D$W%AyRO=TdCBJ|.-');
define('NONCE_KEY',        'u7y-j+l#9!Kc4|}qBu-O`I`!y_U{{lC5?v`=CI|Xb|S${Ul8tqp-2(q/^a k::(-');
define('AUTH_SALT',        'c8;jq]=*+E|Lwa$)kN]j(iU!S:P70DYqO$x(<DD%#26nYt|FiLB5aWpwbF~KAB)b');
define('SECURE_AUTH_SALT', ' 1$?Dg6p58n|M6.r UHP{YsyE!;@FbE${A-f<0 b-fE8=HD g/pQIw`5qG7Iv8?4');
define('LOGGED_IN_SALT',   '*Dv N7/|)eEpf]ZJxC1JP{ps(3,.qqCBJ_`=iGxAI{~x4&u{UO,zS/[xbHVc0e!$');
define('NONCE_SALT',       '>]%zf,%uey*9=?p4IUh1~73p!L: yDelrLcKb>%T1/pzo#z?,Jx+-=SmH)d/hxpC');

/**#@-*/

/**
 * Tabellprefix f�r WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokst�ver och understreck!
 */
$table_prefix  = 'wp_';

/**
 * WordPress-spr�k, f�rinst�llt f�r svenska.
 *
 * Du kan �ndra detta f�r att �ndra spr�k f�r WordPress.  En motsvarande .mo-fil
 * f�r det valda spr�ket m�ste finnas i wp-content/languages. Exempel, l�gg till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' f�r att f� sidan
 * p� svenska.
 */
define('WPLANG', 'sv_SE');

/** 
 * F�r utvecklare: WordPress fels�kningsl�ge. 
 * 
 * �ndra detta till true f�r att aktivera meddelanden under utveckling. 
 * Det �r rekommderat att man som till�ggsskapare och temaskapare anv�nder WP_DEBUG 
 * i sin utvecklingsmilj�. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera h�r! Blogga p�. */

/** Absoluta s�kv�g till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-v�rden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');