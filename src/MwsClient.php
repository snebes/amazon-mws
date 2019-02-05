<?php

/*
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
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use SellerWorks\Amazon\Middleware\TestMiddleware;

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

    /**
     * @param RequestInterface $request
     * @return mixed
     */
    public function send($request)
    {
        return $this->sendAsync($request)->wait();
    }

    /**
     * @param RequestInterface $request
     * @return PromiseInterface
     */
    public function sendAsync($request): PromiseInterface
    {
        $client = $this->getHttpClient();
        $request = new Request('GET', 'https://google.com');

        $promise = $client->sendAsync($request)->then(
            // onFulfilled
            function (ResponseInterface $response) {
                $contents = $response->getBody()->getContents();
//                print_r($contents); die;
            },
            // onRejected
            function (ClientException $exception) {
                $contents = $exception->getResponse()->getBody()->getContents();
//                print_r($contents); die;
            });

        print_r($request); die;

        return $promise;
    }

    /**
     * @return HttpClient
     */
    private function getHttpClient(): HttpClient
    {
        if (null === $this->httpClient) {
            $stack = HandlerStack::create();

            $this->httpClient = new HttpClient([
                'http_errors' => true,
                'handler'     => $stack,
            ]);

            $stack->push(new TestMiddleware());
        }

        return $this->httpClient;
    }
}
