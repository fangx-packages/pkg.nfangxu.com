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

namespace App;

use App\Controller\Traits\ResponseHelpers;

class Helper
{
    use ResponseHelpers;

    public function assets(string $path): string
    {
        return sprintf('/assets/%s', $path);
    }

    public function route(string $path): string
    {
        return sprintf('/%s', str_replace('.', '/', trim($path, '/')));
    }

    public function isLogin(): bool
    {
        return false;
    }
}
