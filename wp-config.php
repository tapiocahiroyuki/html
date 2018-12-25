<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'vagrant_wp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'vagrant');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '!lc7W)^{,dZ@');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g:$yQ;U4<Ii_e3;$R;~?u=IgKq~6s?<}(moHQ@g{CFfA)AB>&W+/#w4]z7`WxVGI');
define('SECURE_AUTH_KEY',  'zAE+r-aTv/{*?Z*8vdFWW&w92gd_kDyjEKDzRKlMZC1FJ!DHZy5]YndQ)<}bLuz1');
define('LOGGED_IN_KEY',    '^rs^`/N|2&DBDi%x#Yd|P,,NZDOl}RgSp2x94WcF[L3mg^b@1`}h(<Qmi|@TK]LE');
define('NONCE_KEY',        '=y%Jt<?_#LE7$&I,&xQyo^tVr_VK  P&JD}/~R`hh!sj,gP5GX;b}Ml|Ug~YyolD');
define('AUTH_SALT',        '~wDJ[-a5V[^1Zr{NUUaW5RbL,hx|_%fb&F`pcNI}msn5@4qb`*@ly$Od)FH%r(WJ');
define('SECURE_AUTH_SALT', '+>R{Vbg:CQG.phIT3x!SEX[BTcD#pwH>N_isIi#>d6hG)8.[-.B8p)|j@<6nMoVd');
define('LOGGED_IN_SALT',   'k|4@erBEg[O@l []M*[]#G:%1iF7{T C~`<o1?[_L@6k3=:)0@p3.Yi-?Ph`NXP}');
define('NONCE_SALT',       's{4v#B4-hNT-hpJE*=B&A0r2UMMWeqOk,g;Eo5icg$Wg0W-v+.J.R5xYI{LNlRyS');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);
define ('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST']);
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
