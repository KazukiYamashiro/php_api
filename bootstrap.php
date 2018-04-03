<?php
\Autoloader::add_core_namespace('Keepa');
\Autoloader::add_classes([
    'KeepaAPI' => PKGPATH. 'php_api/src/KeepaAPI.php',
    'JsonMapper', PKGPATH. 'php_api/vendor/netresearch/jsonmapper/src/JsonMapper.php',
    'Request', PKGPATH. 'php_api/src/API/Request.php',
]);
\Autoloader::add_namespace('Keepa', PKGPATH . "php_api/src/");
\Autoloader::add_namespace('Keepa\API', PKGPATH . "php_api/src/API/");
\Autoloader::add_namespace('Keepa\objects', PKGPATH . "php_api/src/objects/");
