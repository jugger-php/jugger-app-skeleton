<?php

echo "<pre>";

include_once __DIR__.'/composer/vendor/autoload.php';

use jugger\Autoloader;
use jugger\Application;
use jugger\implement\WebRequest;

$autoloader = new Autoloader();
$autoloader->addNamespace('app', __DIR__);
$autoloader->register();

$di = include(__DIR__.'/config/di.php');
$params = include(__DIR__.'/config/params.php');
$urlRules = include(__DIR__.'/config/url-rules.php');

$app = new Application($di, $params);
$app->checkDependencyContainer();
$app->setRootDir(__DIR__);

$request = WebRequest::build();
$urlRewriter = $di->createClass('jugger\UrlRewriter');
$urlRewriter->setRules($urlRules);
$urlRewriter->setRequest($request);

$route = $urlRewriter->getRoute($_SERVER['REQUEST_URI']);
$request = $urlRewriter->getRequest();
$app->runByRequest($route, $request);

exit();
