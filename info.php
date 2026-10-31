<?php
/*
 * SWCMS 8.5 - SECURITY PATCH 2026/10/31:
 * phpinfo() must never be exposed on a public host (leaks paths, env vars,
 * versions). It is only shown when the SWCMS_DEBUG env variable is set to "1"
 * (e.g. local debugging: SWCMS_DEBUG=1 php -S ... or SetEnv SWCMS_DEBUG 1).
 * The file is also blocked at web-server level in /.htaccess.
 */
if (getenv('SWCMS_DEBUG') !== '1') {
    http_response_code(404);
    exit('Not Found');
}

// php info (debug only)
phpinfo();
