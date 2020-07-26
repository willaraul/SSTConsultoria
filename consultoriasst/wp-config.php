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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'consultoriasst' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ';{T6}iT`gkyIOC?%C.%9(D^W!4G<wjE9:@kB])8WL%l4?]Vaw6v?%N38o`N:+>2-' );
define( 'SECURE_AUTH_KEY',  ':u(3JUQ-Whq[S^1q HOXqQR/-!x+@$Q?aG+Vfm*9ux>d]k#sh-4QnR*9<m9^V?7n' );
define( 'LOGGED_IN_KEY',    '+REAR8=[-^c$l@FWN)$S[f)m823hCq:zC1hu+Ptr~l/iR>!P.qsKcO58QDqUcL~)' );
define( 'NONCE_KEY',        'Iwyqe6GrC{yiu8V?xWLos.DOu7e}EV+>=a?hN|g*.I`=![;P{%?m]|s[;2dc==/,' );
define( 'AUTH_SALT',        'vBKzT_`Z*BG$&Mk> g@tbf*x1Zg[/5y:(M9EtcGgf=-Iq+eW@X*it?{*aF:bH*qM' );
define( 'SECURE_AUTH_SALT', '*(/D+[CN<|TlPWAdlW!%<aK%k=+bx$N`6gtrhh<J:h;LflP9naU^kyQTkvan=QZk' );
define( 'LOGGED_IN_SALT',   '[7.Tw.}J(_C9,J}lp!Rq+/;E{x3T@@O|asEV>[%Pi-*e#XRZ.3KY0d@yNh+`,hx0' );
define( 'NONCE_SALT',       '!lCX}HL2Q4Uzmd a;X44C.{&Oi1R*y:+R* ALut}fSwdIwBcn*C%q3^t= W@!r;p' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_consultoriasst';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
