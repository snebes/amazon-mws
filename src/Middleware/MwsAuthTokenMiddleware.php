<?php
/**
 * This file is part of the Amazon MWS package.
 *
 * (c) Steve Nebes <snebes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Amazon\Middleware;

use function GuzzleHttp\Psr7\modify_request;
use Psr\Http\Message\RequestInterface;

class MwsAuthTokenMiddleware
{
    public function __invoke(callable $next)
    {
        return function (RequestInterface $request, array $options = []) use ($next) {
            $request = $this->addToken($request);

            return $next($request, $options);
        };
    }

    protected function addToken(RequestInterface $request): RequestInterface
    {
        return modify_request($request, [
            'set_headers' => [
                'AWSAccessKeyId'   => '0PB842EXAMPLE7N4ZTR2',
                'MWSAuthToken'     => 'amzn.mws.4ea38b7b-f563-7709-4bae-87aeaEXAMPLE',
                'SellerId'         => 'A1XEXAMPLE5E6',
                'SignatureVersion' => '2',
                'SignatureMethod'  => 'HmacSHA256',
                'Timestamp'        => \gmdate('Y-m-dTH:i:s'),
                'Version'          => '2013-09-01',
            ],
        ]);
    }
}
