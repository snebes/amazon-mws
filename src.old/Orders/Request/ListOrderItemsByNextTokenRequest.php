<?php

namespace SellerWorks\Amazon\Orders\Request;

use SellerWorks\Amazon\Common\RequestInterface;

/**
 * Returns the next page of order items using the NextToken parameter.
 */
final class ListOrderItemsByNextTokenRequest implements RequestInterface
{
    /**
     * @var string
     */
    public $NextToken;

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {
        return [
            'NextToken' => ['type' => 'scalar'],
        ];
    }
}
