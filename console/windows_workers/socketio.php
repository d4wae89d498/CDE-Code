<?php
include_once __DIR__ . "/../../vendor/autoload.php";
/**
 * Created by PhpStorm.
 * User: marcfsr
 * Date: 28/02/2019
 * Time: 12:06
 */

//define('GLOBAL_START', true);
new \CloudsDotEarth\Bundles\Core\Core([
    \CloudsDotEarth\App\Services\ScketIOService::class
]);
