<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cvidasegura' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd/0JX+)Cu+:W#qKw+4{7Lw9Q@]E$Kpi/({,7TQ.+%H|ZMo%wLM1]{);kmoJd}5Jl' );
define( 'SECURE_AUTH_KEY',  '/OJ*k;AWyjPY6:4!=^$KRq[$KG|#/)9k-Iml]Nz0cn%#1MKdIQ%5[f[)2O1%Rs@&' );
define( 'LOGGED_IN_KEY',    '`)izh<ITzv~nP,yR6JG`:Daj%]D1.R)e4P#;iG2Mr*y7v~/0eD>[UJ:6 0mTzr0%' );
define( 'NONCE_KEY',        'Q?Al=&pqTkb2;J;1Y=6N.zR|KgbKmg>E7`}cBUy,lLl2Qtpt1|)ybV+0j#U50{L&' );
define( 'AUTH_SALT',        '*%vve}n}%KFcCF9g*v;>-qK*E<X4H)}rq>k5j%9}alXydG$0oaxZoiU+D!19li&3' );
define( 'SECURE_AUTH_SALT', 'O.qcKw!]z s|Wla^-h_Ebe]awKV#5kPEEf/~GH( @[Z] Hw)j=i33{]`1E+hGO&4' );
define( 'LOGGED_IN_SALT',   'VEoi#a:!*uAGVeb?bbd}f$a~xW>{OdtGV6hOL(1C~dfn%`P5SP]7G]cq<6t?62%V' );
define( 'NONCE_SALT',       'n?)$4k9:aIGSrej(,T9=qST8rT*eyYee&L*F;:Zt5kh0ipaV!1sWytnnUN8^$Z3<' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
