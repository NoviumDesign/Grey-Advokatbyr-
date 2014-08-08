<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil innehåller följande konfigurationer: Inställningar för MySQL,
 * Tabellprefix, Säkerhetsnycklar, WordPress-språk, och ABSPATH.
 * Mer information på {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter får du från ditt webbhotell.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'grey');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
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
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/**
 * WordPress-språk, förinställt för svenska.
 *
 * Du kan ändra detta för att ändra språk för WordPress.  En motsvarande .mo-fil
 * för det valda språket måste finnas i wp-content/languages. Exempel, lägg till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' för att få sidan
 * på svenska.
 */
define('WPLANG', 'sv_SE');

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');