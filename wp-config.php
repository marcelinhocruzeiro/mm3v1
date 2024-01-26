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
define( 'DB_NAME', 'xlg334' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'xlg334' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'qa@#DFjim' );

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
define( 'AUTH_KEY',         'Tt-}}Y7kA34A0Rj%4r@^::MoCx=Huhg?uFg8)qbLI5<zf?[:i|qi!R?]{-a6ZJE|' );
define( 'SECURE_AUTH_KEY',  '41c%A ik9T,+JFJD@H<F}]mIna;o6ZL!nYr-5f#d~3tX<f2(i&>oOGp0/0B9FdEn' );
define( 'LOGGED_IN_KEY',    '*o_ZI|M+i87O/LXbfTic1.b0v|48OtrrF,CQT/Ku#;bTs&$?@!Np<O9-U5]N_=aX' );
define( 'NONCE_KEY',        '+RUBWgk-;C8a<C9391%HfQA<Y2V-+2R2/8wKDjAE3aVoA(/uD;,NBU^yg:!6kg4%' );
define( 'AUTH_SALT',        'nmuvBs!D^o8{m^yHn>p%j/f#VC!J~E=Y5Wumx40Ni^]ex+?JZ{CLx-aLip+cW.FS' );
define( 'SECURE_AUTH_SALT', '9+d?xnzjT.=*2G{6=S&3F rqdK(w-.>hvpP7Z8UomCZj=8$j2ESJq;(qxg6B2mu{' );
define( 'LOGGED_IN_SALT',   'wyj:D+e6ec]k~Ap`.01<}j`{q@LG9>zcn4-}rN.C:&-H!%ollWkGr5Md>*fZ6&RB' );
define( 'NONCE_SALT',       '(3:sA`OA*O4cVs?w_;?(7t&pfnj_{ht7@[+B@z5o0/uy#rI;WvFsX_0t>.SU~*vZ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'kf_';

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
