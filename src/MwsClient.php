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

namespace SellerWorks\Amazon;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use SellerWorks\Amazon\Middleware\MwsAuthTokenMiddleware;

/**
 * HTTP Client for MWS.
 */
class MwsClient
{
    /** @var HttpClient */
    private $httpClient;

    /**
     * Default values.
     *
     * @param HttpClient|null $httpClient
     */
    public function __construct(HttpClient $httpClient = null)
    {
        $this->httpClient = $httpClient;
    }

    public function get()
    {
        // https://mws.amazonservices.com/Orders/2013-09-01
        $response = $this->getHttpClient()->request('GET', 'http://nebes.net', [
            'Action' => 'GetServiceStatus',
        ]);
    }
    
    /**
     * @return HttpClient
     */
    private function getHttpClient(): HttpClient
    {
        if (null === $this->httpClient) {
            $handler = HandlerStack::create();
            $handler->push(new MwsAuthTokenMiddleware());

            $this->httpClient = new HttpClient([
                'handler' => $handler,
            ]);
        }

        return $this->httpClient;
    }
}
