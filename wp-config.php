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



// AWSの設定
define( 'DBI_AWS_ACCESS_KEY_ID', 'AKIAJDSIXCZ6KNDPJCUA' );
define( 'DBI_AWS_SECRET_ACCESS_KEY', '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' );

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'M`J$@GvLuvYA-){0+b;s`bqhfSZ2,(,kI7S|6Kzs+(5JG30Ulo{f}`dW9+6@%^sr');
define('SECURE_AUTH_KEY',  ' @}V?J%@}1<iH~#$[`.m&Yg4+@V2<7s/OSAi`lhgaK5>0N(yDJcIe>>*}Vk^.$3}');
define('LOGGED_IN_KEY',    's0OCP.ar1g?U!-fik[zE$9,-xWc0HI@H$|X!>=z_C1y8&$|<;<anU3ttyLI*H|,7');
define('NONCE_KEY',        'X|EBILsI/)am*1u,H{0-5.C.Q}_?MwfBdwS:y?2K3zT+K Gv.tx#2;^Dli+{ffSS');
define('AUTH_SALT',        '9[_ +I2I3n=w-A% 4rLEq=WCkHbL--m}$gXtoYa&e~X^*i-ip$G~$u6HQs]>uj;E');
define('SECURE_AUTH_SALT', '(19vh6d 4;`A{n6S<MV07o!1yi}e5]kvz)ieF~l[wrWifqIo]*IygOtv ht@3/F2');
define('LOGGED_IN_SALT',   '53:h+ <?9C&@$-Z]?/@w7T{*nRoaZgl76)}t($g2tJ^MeiM5vWHqML9G5q3RX!^!');
define('NONCE_SALT',       '7`lIaJ3Q}3R71IwqH@[Cw5ohqt`brj7cTI*Fnx#W~gp)nM7Y_-xr1Xda^lE6BRnn');

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

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
