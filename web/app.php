<?php
error_reporting(-1);
ini_set('display_errors', 'on');
use symfony\Component\Httpfoundation\Request;

/**
 * @var composer\Autoload\Classloader
 */
$loader = require __dir__.'/../app/autoload.php';
include_once __dir__.'/../var/bootstrap.php.cache';

// enable apc for autoloading to improve performance.
// you should change the apcclassloader first argument to a unique prefix
// in order to prevent cache key conflicts with other applications
// also using apc.
/*
$apcloader = new symfony\Component\Classloader\Apcclassloader(sha1(__file__), $loader);
$loader->unregister();
$apcloader->register(true);
*/

//require_once __dir__.'/../app/appcache.php';

$kernel = new appkernel('prod', false);
$kernel->loadclasscache();
//$kernel = new appcache($kernel);

// when using the httpcache, you need to call the method in your front controller instead of relying on the configuration parameter
//request::enablehttpmethodparameteroverride();
$request = request::createfromglobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
