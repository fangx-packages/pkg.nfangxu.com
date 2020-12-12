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

if (! function_exists('isLogin')) {
    function isLogin()
    {
        return make(\App\Helper::class)->{__FUNCTION__}(...func_get_args());
    }
}

if (! function_exists('assets')) {
    function assets($path): string
    {
        return make(\App\Helper::class)->{__FUNCTION__}(...func_get_args());
    }
}

if (! function_exists('route')) {
    function route(string $path): string
    {
        return make(\App\Helper::class)->{__FUNCTION__}(...func_get_args());
    }
}

if (! function_exists('rp')) {
    function rp()
    {
        return make(\App\Helper::class)->{__FUNCTION__}(...func_get_args());
    }
}

if (! function_exists('rpJson')) {
    function rpJson($data)
    {
        return make(\App\Helper::class)->{__FUNCTION__}(...func_get_args());
    }
}

if (! function_exists('rpRedirect')) {
    function rpRedirect(string $url, int $status = 302)
    {
        return make(\App\Helper::class)->{__FUNCTION__}(...func_get_args());
    }
}
