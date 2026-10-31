<?php
declare(strict_types=1);

/*
 * SWCMS 8.5 - public entry point
 * 2026/10/31 security patch: send security headers (mirrored in /.htaccess
 * for Apache) before any output. HSTS is ignored by browsers on plain HTTP,
 * so it is safe to always send.
 */
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 0');
header('Referrer-Policy: no-referrer');
header('Permissions-Policy: camera=(), microphone=(), geolocation=()');
header('Cross-Origin-Resource-Policy: same-origin');
header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
header("Content-Security-Policy: default-src 'self'; style-src 'self'; script-src 'self'; img-src 'self' data:; font-src 'self'; connect-src 'self'; frame-ancestors 'none'; base-uri 'self'; form-action 'self'");

define('SWCMS_VERSION', '8.5');

require_once __DIR__ . '/../include/class.TemplatePower.inc.php';

$tpl = new TemplatePower(__DIR__ . '/../template/_tp_main.html');
$tpl->prepare();

$tpl->assignGlobal('version', SWCMS_VERSION);
$tpl->newBlock('Main1');
$tpl->printToScreen();
