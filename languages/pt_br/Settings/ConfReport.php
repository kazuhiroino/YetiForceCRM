<?php
/**
 * Conf report portuguese translation
 * @package YetiForce.Languages
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 */
$languageStrings = [
	'ConfReport' => 'Configurações do Servidor',
	'LBL_CONFIGURATION' => 'Configurações do Servidor',
	'LBL_CONFREPORT_DESCRIPTION' => 'Permite que você verifique se as configurações do servidor são compatíveis com os parâmetros recomendados.',
	'LBL_PARAMETER' => 'Parâmetro',
	'LBL_VALUE' => 'Valor',
	'LBL_RECOMMENDED' => 'Configurações recomendadas',
	'LBL_SYSTEM_STABILITY' => 'System stability configuration',
	'LBL_SYSTEM_SECURITY' => 'System security configuration',
	'LBL_SECURITY_ADVISORIES_CHECKER' => 'Security vulnerabilities in used libraries',
	'LBL_FILES_PERMISSIONS' => 'Arquivos/Pastas',
	'LBL_FILE' => 'Nome',
	'LBL_PATH' => 'Caminho',
	'LBL_PERMISSION' => 'Permissões',
	'LBL_TRUE_PERMISSION' => 'Permitido',
	'LBL_FAILED_PERMISSION' => 'Não Permitido',
	'On' => 'Ligado',
	'Off' => 'Desligado',
	'NOT RECOMMENDED' => 'Não Recomendado',
	'LBL_YETIFORCE_ENGINE' => 'YetiForce Engine',
	'LBL_CHECK_CONFIG' => 'RoundCube Engine',
	'LBL_MANDATORY' => 'Obrigatório',
	'LBL_OPTIONAL' => 'Opcional',
	'LBL_LIBRARY' => 'Suporte para bibliotecas',
	'LBL_INSTALLED' => 'Instalado',
	'LBL_PDO_SUPPORT' => 'PDO',
	'LBL_OPEN_SSL' => 'openssl',
	'LBL_CURL' => 'cURL',
	'LBL_ZLIB_SUPPORT' => 'Zlib',
	'LBL_IMAP_SUPPORT' => 'IMAP',
	'LBL_GD_LIBRARY' => 'GD',
	'LBL_LDAP_LIBRARY' => 'LDAP',
	'LBL_PCRE_LIBRARY' => 'PCRE',
	'LBL_XML_LIBRARY' => 'XML',
	'LBL_JSON_LIBRARY' => 'JSON',
	'LBL_SESSION_LIBRARY' => 'SESSION',
	'LBL_MYSQLND_LIBRARY' => 'MySQL Native Driver (mysqlnd)',
	'LBL_DOM_LIBRARY' => 'DOM',
	'LBL_MBSTRING_LIBRARY' => 'php_mbstring (exigido para mPDF)',
	'LBL_ZIP_ARCHIVE' => 'ZIP',
	'LBL_SPACE' => 'Capacidade',
	'LBL_SPACE_TOTAL' => 'Total',
	'LBL_SPACE_FREE' => 'Livre',
	'LBL_SPACE_USED' => 'Usado',
	'LBL_VALUE' => 'Valor',
	'LBL_PHPINI' => 'Configuração PHP',
	'LBL_LOG_FILE' => 'Logs',
	'LBL_CRM_DIR' => 'Diretório local do CRM',
	'LBL_SOAP_LIBRARY' => 'SOAP',
	'LBL_PHP_SAPI' => 'Server API',
	'LBL_APCU_LIBRARY' => 'APCu',
	'LBL_OPCACHE_LIBRARY' => 'OPcache',
	'LBL_CRON_PHP' => 'Cron - PHP versão',
	'LBL_CRON_PHPINI' => 'Cron - PHP configuração',
	'LBL_CRON_LOG_FILE' => 'Cron - Logs de Erro',
	'LBL_CRON_PHP_SAPI' => 'Cron - API sdo ervidor',
	'LBL_OPERATING_SYSTEM' => 'Operating system',
	'BTN_SERVER_SPEED_TEST' => 'Server speed test',
	'LBL_ENVIRONMENTAL_INFORMATION' => 'Environment information',
	'LBL_LIB_NAME' => 'Library name',
	'LBL_VULNERABILITY_NAME' => 'Vulnerability name',
	'LBL_VULNERABILITY_URL' => 'Vulnerability address',
	'LBL_HTTPS_HELP_TEXT' => 'SSL is security technology used to create encrypted connections between the web server and the browser. We recommend enabling it in order to prevent third parties from intercepting communication between you and the server.',
	'LBL_DISPLAY_ERRORS_HELP_TEXT' => 'Error messages and warnings will be sent to the browser. They often include sensitive technical information about the system and must never be available to untrusted sources. This option should only be enabled in the test or developer version to display errors and warnings.',
	'LBL_SESSION_COOKIE_HTTPONLY_HELP_TEXT' => 'Session cookie files are only available via HTTP protocol. This setting can sufficiently prevent identity theft resulting from XSS attacks.',
	'LBL_SESSION_USE_ONLY_COOKIES_HELP_TEXT' => 'Sets getting ID only from cookies. Enabling it prevents from attacks based on sending session IDs in URLs.',
	'LBL_EXPOSE_PHP_HELP_TEXT' => 'Determines if the PHP server sends PHP version number in headers. This information might make the server more vulnerable to attacks, therefore we recommend disabling this option.',
	'LBL_HTACCESS_HELP_TEXT' => 'The .htaccess file is inactive, it is required to properly handle all integrations and to secure the directories containing user data.',
	'LBL_PUBLIC_HTML_HELP_TEXT' => 'We recommend that the domain directs to the public_html directory, by doing this you ensure that system files and your data are not available publicly and can not be downloaded.',
	'LBL_SESSION_REGENERATE_HELP_TEXT' => 'We recommend enabling session ID regeneration, it makes it harder to intercept users\' sessions. The changes should be made in the main configuration file.',
	'LBL_SESSION_USE_STRICT_MODE_HELP_TEXT' => 'The server will reject uninitiated sessions. We recommend enabling this option for safety reasons.',
	'LBL_SESSION_USE_TRANS_SID_HELP_TEXT' => 'Sets transferring the ID in the URL and webforms. We recommend disabling this option for safety reasons.',
	'LBL_HEADER_X_FRAME_OPTIONS_HELP_TEXT' => 'The "SAMEORIGIN" value means that the page will load in “frame” only from the same domain. It protects from “clickjacking” attacks.',
	'LBL_HEADER_X_XSS_PROTECTION_HELP_TEXT' => 'Protects from XSS attacks. For option "1; mode=block" in case XSS attack is detected page rendering will be stopped.',
 	'LBL_HEADER_X_CONTENT_TYPE_OPTIONS_HELP_TEXT' => 'MIME types sent in Content-Type headers will not be altered. This option protects from "MIME" attacks.',
 	'LBL_HEADER_X_ROBOTS_TAG_HELP_TEXT' => 'Parameter defines behavior of robots. We recommend setting it to “none”, which blocks search indexing by robots.',
 	'LBL_HEADER_X_PERMITTED_CROSS_DOMAIN_POLICIES_HELP_TEXT' => 'Specifies how “strategy files” are handled on the server, eg. "crossdomain.xml". The recommended option is no handling  of “strategy files”.',
 	'LBL_HEADER_X_POWERED_BY_HELP_TEXT' => 'The header sends information about PHP version. For safety reasons we recommend it to be empty (contain no information).',
	'LBL_HEADER_SERVER_HELP_TEXT' => 'The header sends general information about the server. For safety reasons we recommend it to be empty (contain no information).',
	'LBL_HEADER_REFERRER_POLICY_HELP_TEXT' => 'The Referer header may disclose the CRM\'s address to third parties. We recommend setting it to “same-origin” that will only display the header from the same domain.',
 	'LBL_HEADER_EXPECT_CT_HELP_TEXT' => 'The header determines how certificates are handled on the website. Recommended option is "enforce; max-age=3600" which means that enforcing correctness and validity of the certificate lasts for 3600 seconds.',
 	'LBL_HEADER_STRICT_TRANSPORT_SECURITY_HELP_TEXT' => 'The browser should only communicate over HTTPS protocol, not over HTTP protocol. Recommended time for communication only over HTTPS is 31536000 seconds.',
	'LBL_PHP_HELP_TEXT' => 'Recommended PHP version. We recommend using the latest PHP versions that include all patches and optimizations.',
	'LBL_ERROR_REPORTING_HELP_TEXT' => 'Level of reporting errors and warnings. If it is not set properly logs may take up significant amount of space.',
	'LBL_OUTPUT_BUFFERING_HELP_TEXT' => 'Output buffering.',
 	'LBL_MAX_EXECUTION_TIME_HELP_TEXT' => 'Maximum PHP script execution time.',
 	'LBL_MAX_INPUT_TIME_HELP_TEXT' => 'Maximum input handling time for POST or GET in seconds.',
	'LBL_DEFAULT_SOCKET_TIMEOUT_HELP_TEXT' => 'Maximum time for external server connection in seconds.',
	'LBL_MEMORY_LIMIT_HELP_TEXT' => 'Maximum RAM available for the PHP script.',
	'LBL_LOG_ERRORS_HELP_TEXT' => 'Should error notices be saved in server logs.',
 	'LBL_FILE_UPLOADS_HELP_TEXT' => 'Should the server allow file upload.',
	'LBL_SHORT_OPEN_TAG_HELP_TEXT' => 'Should short form "&lt;? ?&gt;" at the beginning and the end of PHP files be allowed.',
	'LBL_POST_MAX_SIZE_HELP_TEXT' => 'Maximum size of POST data that can be sent to the server. If the value is too low some data sent to the server may be lost.',
	'LBL_UPLOAD_MAX_FILESIZE_HELP_TEXT' => 'Maximum size of the sent file.',
	'LBL_MAX_INPUT_VARS_HELP_TEXT' => 'Maximum amount of variables that can be sent to the server. This amount applies to each of the  $_GET, $_POST or $_COOKIE tables individually. If the amount is too low some data sent to the server may be lost.',
 	'LBL_ZLIB_OUTPUT_COMPRESSION_HELP_TEXT' => 'Should the server compress content sent to the browser.',
	'LBL_SESSION_AUTO_START_HELP_TEXT' => 'Will the session start automatically when the PHP script is executed.',
	'LBL_SESSION_GC_MAXLIFETIME_HELP_TEXT' => 'Time (in seconds) after which the session will be cleared.',
	'LBL_SESSION_GC_DIVISOR_HELP_TEXT' => 'This option works together with session.gc_probability and is used to calculate the probability of launching the "garbage collection" process. The probability is calculated this way: session.gc_probability/gc_divisor.',
	'LBL_SESSION_GC_PROBABILITY_HELP_TEXT' => 'This parameter works together with session.gc_probability and is used to calculate the probability of launching the "garbage collection" process. The probability is calculated this way: session.gc_probability/gc_divisor.',
 	'LBL_MBSTRING_FUNC_OVERLOAD_HELP_TEXT' => 'Set of one-byte functions through their mbstring equivalents. We recommend disabling this setting. From PHP 7.2 on this setting will be marked as "deprecated".',
 	'LBL_ALLOW_URL_FOPEN_HELP_TEXT' => 'Enables reading data from external servers using a function to read local files. If it is enabled attackers might load files from a server and execute them.',
 	'LBL_DB_DRIVER_HELP_TEXT' => 'Database engine.',
 	'LBL_INNODB_LOCK_WAIT_TIMEOUT_HELP_TEXT' => 'How long (in seconds) InnoDB transaction waits for row lock. An error message will be displayed if the row is still locked after this time passes.',
 	'LBL_WAIT_TIMEOUT_HELP_TEXT' => 'How long (in seconds) the server waits for activity during a non-interactive connection before it is closed.',
 	'LBL_INTERACTIVE_TIMEOUT_HELP_TEXT' => 'How long (in seconds) the server waits for activity during an interactive connection before it is closed.',
	'LBL_SQL_MODE_HELP_TEXT' => 'Different modes of working with the database. The modes affect SQL syntax and data validity verification. Must not contain STRICT_TRANS_TABLE and ONLY_FULL_GROUP_BY.',
	'LBL_MAX_ALLOWED_PACKET_HELP_TEXT' => 'Maximum size of data sent at once.',
	'LBL_INNODB_FILE_PER_TABLE_HELP_TEXT' => 'Will data be stored in the database in many files, where each table has its own file, contrary to the old approach where all data was stored in one file. This option is enabled by default from MySQL version 5.6.6 on.',
	'LBL_INNODB_STATS_ON_METADATA_HELP_TEXT' => 'Updates stats for InnoDB tables for some queries, for example SHOW TABLE STATUS. Disabling this option improves efficiency for large InnoDB tables. We recommend disabling this option.',
	'LBL_TMP_DIR' => 'Temporary directory',
	'LBL_INVALID_TIME_ZONE' => 'Invalid time zone:',
	'LBL_DATABASE_INFORMATION' => 'Database information',
	'LBL_DB_DRIVER' => 'Engine',
	'LBL_DB_CLIENT_VERSION' => 'Client version',
	'LBL_DB_SERVER_VERSION' => 'Engine version',
	'LBL_DB_CONNECTION_STATUS' => 'Connection status',
	'LBL_DB_SERVER_INFO' => 'Server information',
	'LBL_DENY_PUBLIC_DIR_TITLE' => 'Verification of permissions for directories',
	'LBL_PUBLIC_DIR' => 'Directory path',
	'LBL_DENY_PUBLIC_DIR_STATUS' => 'Is access denied?',
	'LBL_DENY_PUBLIC_DIR_HELP_TEXT' => 'It is recommended to deny access to this directory. Currently, the directory is publicly accessible and its content is not protected.',
];
$jsLanguageStrings = [
	'JS_SPEED_TEST_START' => 'Checking speed...',
];
