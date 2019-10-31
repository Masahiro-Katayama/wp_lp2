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
define( 'DB_NAME', 'wp2' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&h>%2|dZP+yxkj?jZs(wbft=<x0a]{!!/k.M@sg6t.?j64&g*d*KWrJX*q1b#mI)' );
define( 'SECURE_AUTH_KEY',  'dLUJJ2-`t)!V@nZ/5nzl_Yvxnj6WC3r)Cn~P2e2WizxHQe|}*310X+EOCzV%7Y<:' );
define( 'LOGGED_IN_KEY',    'nX;Qxj5n7%$oJ~i?D FcJWY8Yp/8$]4l.6WoO*xcxtaEyzvj3bWP)@O}TyZ(S)gT' );
define( 'NONCE_KEY',        '2QogqJM%v3m4h$U|r7M6V{4r6?+oW:AAnnG(RM>7bEMD#Rt*%;ZHp~+4mw[VLmKX' );
define( 'AUTH_SALT',        '0MoDy72`amcaTg)Cv<_:*N?OxGy[@_lI3R&|Dg`vGlC2T+ =c)(Li>%vX8i(8Ykw' );
define( 'SECURE_AUTH_SALT', '+fGJ*|0:N%S:J$>lQ1l+rcr).g!0]xe:isM6ZHw9FT7!3[AMmW,kRRI8.$,&p[-!' );
define( 'LOGGED_IN_SALT',   'ex*c}1  w~7U0Yu-K-hd/jECZP}B4/}$Wxi_&irSG=W[#2^vD?HwS@c@VG_#(%|U' );
define( 'NONCE_SALT',       ']i4gi:S>XRoJg/MB%ky3f04:.]T)oakfdiz+RaxPl{AUpsa4usgAZo)N?e0tkL,1' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp2_';

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
