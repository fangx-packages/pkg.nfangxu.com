<?php

declare(strict_types=1);

/**
 * Fangx's Packages
 *
 * @link     https://nfangxu.com
 * @document https://pkg.nfangxu.com
 * @contact  nfangxu@gmail.com
 * @author   nfangxu
 * @license  https://pkg.nfangxu.com/license
 */

use App\Controller\AuthController;
use App\Controller\IndexController;
use Hyperf\HttpServer\Router\Router;

Router::get('/', [IndexController::class, 'index']);

Router::get('/license', [IndexController::class, 'license']);
Router::get('/login', [AuthController::class, 'showLoginForm']);

Router::get('/{uri:.*}', [IndexController::class, 'redirect']);
