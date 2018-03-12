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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'teste');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'junior');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '51ngba13');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '5xTS|V&3@n7=&m +Ey.#{x:t/ZwJ?6?rR5;w7H39M;{ZOVWTq`[P_@JaBI*]K9Vx');
define('SECURE_AUTH_KEY',  ':H4Xo9{ue8JQ#&XH8<d3<JgW/:.bBhB0ZU~>H!z6kFE>_N38cB}L7tuWP&]FNv7x');
define('LOGGED_IN_KEY',    'kS]T08r:hgDN75[8LtNV4px3~Ne_YEfQ.P >p_<RL(m$i+u fhl#2w-LaBNOi3dK');
define('NONCE_KEY',        'r|{%pwlP#3b4-D5FO]h4$EO1/N@Fieh$cey?_;vOS/a[e~ASsy (R!pV2Kb@O&L1');
define('AUTH_SALT',        '<fL)Yj8(GP1wxsn@|aWh!g@rBUv;%R,P8g:?sP2K#!I!2@*7+FQXd7pV2xV;G>$M');
define('SECURE_AUTH_SALT', '^DT]NTcJ]E@p{&-ERtU8DRveh*]y#;-Q$Xg@BOQsRA@4r(2V-@ti-RmDuZ?-Kp2d');
define('LOGGED_IN_SALT',   '%$8#2&X9_8}eG@_2MMpXTXh= jeDEU1chcdA*VR%Nx@fT<XGYfwHGj1jUi5+6[+B');
define('NONCE_SALT',       '18DTp!fGzB&~HAcobPY`T<%Kimc!mi04h!]@jIcFH$79hbiS0CS!=g499Iaj4.%o');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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

