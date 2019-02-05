<?php

namespace SellerWorks\Amazon\FulfillmentInbound\Entity;

use SellerWorks\Amazon\Common\Serializer\MetadataInterface;

/**
 * Information that is required by an Amazon-partnered carrier to ship a Small Parcel inbound shipment.
 */
final class PartneredSmallParcelDataInput implements MetadataInterface
{
    /**
     * @var string
     */
    public $CarrierName;

    /**
     * @var Array<PartneredSmallParcelPackageInput>
     */
    public $PackageList;

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {
        return [
            'CarrierName' => ['type' => 'choice', 'choices' => ['UNITED_PARCEL_SERVICE_INC', 'DHL_STANDARD']],
            'PackageList' => ['type' => 'array', 'subtype' => PartneredSmallParcelPackageInput::class, 'namespace' => 'member'],
        ];
    }
}
