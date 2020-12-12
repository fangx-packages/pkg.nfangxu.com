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

namespace App\Controller;

use function Hyperf\ViewEngine\view;

class AuthController extends AbstractController
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
}
