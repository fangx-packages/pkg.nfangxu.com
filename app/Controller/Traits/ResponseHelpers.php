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

namespace App\Controller\Traits;

use Hyperf\HttpMessage\Stream\SwooleStream;
use Hyperf\HttpServer\Exception\Http\EncodingException;
use Hyperf\Utils\Codec\Json;
use Hyperf\Utils\Context;
use Psr\Http\Message\ResponseInterface;

trait ResponseHelpers
{
    public function rp(): ResponseInterface
    {
        return Context::get(ResponseInterface::class);
    }

    public function rpJson($data): ResponseInterface
    {
        try {
            $result = Json::encode($data);
        } catch (\Throwable $exception) {
            throw new EncodingException($exception->getMessage(), $exception->getCode());
        }

        return $this->rp()
            ->withAddedHeader('content-type', 'application/json; charset=utf-8')
            ->withBody(new SwooleStream($result));
    }

    public function rpRedirect(string $url, int $status = 302): ResponseInterface
    {
        return $this->rp()
            ->withStatus($status)
            ->withAddedHeader('Location', $url);
    }
}
