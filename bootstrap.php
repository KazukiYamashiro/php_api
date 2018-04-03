<?php

\Autoloader::add_core_namespace('Keepa');
\Autoloader::add_classes([
    'KeepaAPI' => PKGPATH . 'php_api/src/KeepaAPI.php',
    'Request', PKGPATH . 'php_api/src/API/Request.php',
]);
\Autoloader::add_namespaces([
    'Keepa' => PKGPATH . 'php_api/src/',
    'Keepa\API' => PKGPATH . 'php_api/src/API/',
    'Keepa\objects' => PKGPATH . 'php_api/src/objects/',
]);
