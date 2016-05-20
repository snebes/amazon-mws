<?php

declare(strict_types=1);

namespace SellerWorks\Amazon\MWS\FulfillmentInbound\Responses;

use SellerWorks\Amazon\MWS\Common\ResponseInterface;

/**
 */
final class GetServiceStatusResponse implements ResponseInterface
{
    /**
     */
    public $GetServiceStatusResult;

    /**
     */
    public $ResponseMetadata;
}