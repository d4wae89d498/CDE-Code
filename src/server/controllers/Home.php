<?php
/**
 * Created by PhpStorm.
 * User: marcfsr
 * Date: 28/02/2019
 * Time: 12:03
 */

namespace CloudsDotEarth\App\Controllers;

use CloudsDotEarth\Bundles\Core\Controller;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Home extends Controller {
    /**
     * Home controller
     *
     * @uri /*
     * @services *
     *
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function home(ServerRequestInterface $request) : ResponseInterface {

    }
}