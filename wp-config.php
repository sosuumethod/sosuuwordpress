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
define('DB_NAME', 'heroku_d397ba2f16c56f5');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'bbf5ad159a70bb');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'bfcbf665');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+dxSK%3&,/Pr,%SZ+YIz+6EYDbyJ/,;6.,foE%D;Cu|(@lV~JM+FYG*w}VE8-=Z@');
define('SECURE_AUTH_KEY',  'Hcp yXm%iL-Ul+X`.$UrT^ [aOj |-lL-)KWCjnch||?nsU^1^L)O%<-5qQJJU*a');
define('LOGGED_IN_KEY',    ')jCaYIDo|{(F7PX5 Q(<i/E1Y|i|aoN_+O.-o *5LlpG^1H KgNI#XGO-x_eydG+');
define('NONCE_KEY',        'QWJ_|C?Z#N`5RJz;p+$KhL+G`+tuV|v56QoQ0&f6za+_.e|!p=O[C}+FS!nHLbQ9');
define('AUTH_SALT',        '@xhx/#bv3T;:$6t5pm/s_/+8gJ++C(_$2[Mh@G2-IXX[uUBMB4O{KMg}/j3 ~s,P');
define('SECURE_AUTH_SALT', '@(3EHmd-m~O?d:/j2Z#[rPU!;b44I9coL:~|5uD4+X@|U?pGnYLsA-V!+byfoxB_');
define('LOGGED_IN_SALT',   's=]CxL#h=4<>{|+PwY-n*C?)gt@:|0Q[dFwP$tGk6Ai+Zo[i+[x#GHEa.I<_N:U{');
define('NONCE_SALT',       'I]fe}H5rxApm|vYRM`<p[=^DB56]-SCwKQtC%A+-E+(m_pLl--X7|^9-)aeTRFgP');

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
