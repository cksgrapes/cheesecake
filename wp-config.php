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
define('DB_NAME', 'cheesecake');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'cheesecake');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '8REYEkJvPVtX44');

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
define('AUTH_KEY',         'nR?VJQR{#Odc@Q9o{ |-:YJG(hKWj-|m5Z9Lm!O]Wt|}&,.-QorD2+)6<45,8bLO');
define('SECURE_AUTH_KEY',  'm)Lk|#/nHypkDO|F_ZF/)wR4N(LSAMi+ Awl8Q7Tpt,/|H/`8SrMDxl7Y<Aq2Ea]');
define('LOGGED_IN_KEY',    'P~CT6(DD-5]b4VZ4WE|>`bM=WFl9?Gn/h9EvPj5n|&FKm;5KR@EX`50@s<$O?K)=');
define('NONCE_KEY',        '6@ckkb ^Hz?.|?%B[O3k3VS3)}5|$pBC$N:Wquw,)R8rU!b}24E-tfUC..;A^3hU');
define('AUTH_SALT',        'FZQj.9I#+_(OPjom*wx1!t>c-`FU39XkUnYTn NDmH]P$(y&yWgo(QRqwL01>qCZ');
define('SECURE_AUTH_SALT', '&--/f;(@=Yq!KPl@hjDOj0yAJ=,.8TmyV19&*IA#Ti{Kdo$G,i#)j2A8O%T0!MyU');
define('LOGGED_IN_SALT',   'f6nHW_T=^cO:l.Ug`<H9+4hJ3Ien^NwH8={^[hIa7Y<=TjIGWp[oIHkyWT;X~%&z');
define('NONCE_SALT',       'kVS)DBil^hM[P:egu2D# b7[.FpUdEoN2} hp:fQ`JN-Ne1}Mm%JiD<r~UA;Y~3f');

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
