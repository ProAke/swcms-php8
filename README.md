SWCMS PHP8 v.8.5
-------------------
2026/10/31 : Upgrade to 8.5 + security patch (PHP 8.5 ready)
            - Removed hidden eval(base64_decode()) backdoor in TemplatePower
              (?TPChk used to die(__FILE__) and leak the absolute server path)
            - info.php: phpinfo() only when SWCMS_DEBUG=1, denied in .htaccess
            - Bootstrap 5.0.0-beta1 via CDN -> self-hosted Bootstrap 5.3.8
              (npm tarball sha512-verified, see assets/vendor/bootstrap/README.md)
            - Security headers (CSP, X-Frame-Options, nosniff, Referrer-Policy,
              Permissions-Policy) sent in public/index.php + /.htaccess
            - Web access denied to include/ and template/ via .htaccess
            - Fixed broken stylesheet path (../asset/main.css -> ../assets/css/main.css)
            - Removed <meta http-equiv="refresh"> auto-reload
            - TemplatePower: #[\AllowDynamicProperties] for PHP 8.2+,
              unserialize() with allowed_classes=false, constructor typo fixed
2021/01/07 : Update Main Template
