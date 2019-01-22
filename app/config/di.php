<?php

$di = new \jugger\DependencyContainer();
$di->setClass('\jugger\Request', '\jugger\implement\WebRequest');
$di->setClass('\jugger\Response', '\jugger\implement\RawResponse');
$di->setClass('\jugger\UrlRewriter', '\jugger\implement\DefaultUrlRewriter');

return $di;
