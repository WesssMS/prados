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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'teste' );

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
define( 'AUTH_KEY',         'aocT{}L~es%he(Sj3g14Qc8XT{}Tr`?4!hMgGB%V1!jlv.&itDR~XzBVPV0`( ^!' );
define( 'SECURE_AUTH_KEY',  ']mW3j`z)B/h4j#!daQoeAS8|Pmz&Aa,j]JQ<>[D|3?Os8<)fWS.0s*ItCe5~=|IV' );
define( 'LOGGED_IN_KEY',    'h#.K6JBnQOO5n4$,R[VdPen!FB>*WJLN!-]0i{Af !Zi6r_Fl%>dX+w4kVRq$GMm' );
define( 'NONCE_KEY',        'a`uy}KfT=,m 605j]nwQuTefnzWcAt6;`_Dm;T@R<sa/Dep,u8oC:HzkQ@[=yAxs' );
define( 'AUTH_SALT',        '#CG7~a~-Uw3t#x1G^P;T~j)Uz2JQV<+Zi<*S%LUxCb2ZG ,;Kk{AO$ZY3BjKv<A*' );
define( 'SECURE_AUTH_SALT', '+s7,P%rd,Zptr3AMe^ TV.l-8ohq)i=!KJ^prad9MMYIGm%-sco*SW0.`?D]QL$$' );
define( 'LOGGED_IN_SALT',   'E+WUeNK$KQ?-dtfEtoEApF{n=Kqm+2&p WdP}Q{uzrGJ?+<7HAXg2;<ccQkAv-$~' );
define( 'NONCE_SALT',       '9Ztoawdl^8LGxD4FnM$e<KbB`6^hKB[f07zgQcSNCQNx,cBkv8FXB@efq#*^L{HD' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
