<?php

declare(strict_types=1);

namespace SellerWorks\Amazon\Middleware;

use Psr\Http\Message\RequestInterface;

class TestMiddleware
{
    /**
     * @param callable $handler
     * @return callable
     */
    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            $request = $request->withAddedHeader('Auth', 'test');
print_r($request);
            return $handler($request, $options);
        };
    }
}
