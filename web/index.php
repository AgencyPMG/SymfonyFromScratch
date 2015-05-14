<?php
/**
 * This file is part of the Symfony from Scratch tutorial
 *
 * @copyright   2015 PMG <https://www.pmg.com>
 * @license     http://opensource.org/licenses/mit MIT
 */

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

// 'dev' environment and load in debug mode
$app = new AppKernel('dev', true);

$request = Request::createFromGlobals();
$response = $app->handle($request);
$response->send();
$app->terminate($request, $response);
