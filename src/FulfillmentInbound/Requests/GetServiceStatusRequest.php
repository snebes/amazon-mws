<?php

declare(strict_types=1);

namespace SellerWorks\Amazon\MWS\FulfillmentInbound\Requests;

use SellerWorks\Amazon\MWS\Common\RequestInterface;

final class GetServiceStatusRequest implements RequestInterface
{
    /**
     * {@inheritDoc}
     */
    public function getParameters(): array
    {
        return ['Action' => 'GetServiceStatus'];
    }
}