<?php

namespace SellerWorks\Amazon\FulfillmentInbound\Serializer;

use SellerWorks\Amazon\Common\Serializer\XmlDeserializer as BaseXmlDeserializer;
use SellerWorks\Amazon\FulfillmentInbound\Entity;
use SellerWorks\Amazon\FulfillmentInbound\Response;
use SellerWorks\Amazon\FulfillmentInbound\Result;

/**
 * Sabre\Xml\Service element map.
 */
final class XmlDeserializer extends BaseXmlDeserializer
{
    /**
     * @const string
     */
    const NS = 'http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/';

    /**
     * Local element map.
     *
     * @return array
     */
    public function getElementMap()
    {
        $ns = sprintf('{%s}', static::NS);

        return [
            // Response objects.
            "{$ns}CreateInboundShipmentPlanResponse"            => $this->mapObject(Response\CreateInboundShipmentPlanResponse::class),
            "{$ns}CreateInboundShipmentResponse"                => $this->mapObject(Response\CreateInboundShipmentResponse::class),
            "{$ns}ErrorResponse"                                => $this->mapObject(Response\ErrorResponse::class),
            "{$ns}GetPrepInstructionsForASINResponse"           => $this->mapObject(Response\GetPrepInstructionsForASINResponse::class),
            "{$ns}GetPrepInstructionsForSKUResponse"            => $this->mapObject(Response\GetPrepInstructionsForSKUResponse::class),
            "{$ns}GetServiceStatusResponse"                     => $this->mapObject(Response\GetServiceStatusResponse::class),
            "{$ns}ListInboundShipmentItemsResponse"             => $this->mapObject(Response\ListInboundShipmentItemsResponse::class),
            "{$ns}ListInboundShipmentItemsByNextTokenResponse"  => $this->mapObject(Response\ListInboundShipmentItemsByNextTokenResponse::class),
            "{$ns}ListInboundShipmentsResponse"                 => $this->mapObject(Response\ListInboundShipmentsResponse::class),
            "{$ns}ListInboundShipmentsByNextTokenResponse"      => $this->mapObject(Response\ListInboundShipmentsByNextTokenResponse::class),
            "{$ns}UpdateInboundShipmentResponse"                => $this->mapObject(Response\UpdateInboundShipmentResponse::class),


            // Result objects.
            "{$ns}CreateInboundShipmentPlanResult"          => $this->mapObject(Result\CreateInboundShipmentPlanResult::class),
            "{$ns}CreateInboundShipmentResult"              => $this->mapObject(Result\CreateInboundShipmentResult::class),
            "{$ns}Error"                                    => $this->mapObject(Result\Error::class),
            "{$ns}GetPrepInstructionsForASINResult"         => $this->mapObject(Result\GetPrepInstructionsForASINResult::class),
            "{$ns}GetPrepInstructionsForSKUResult"          => $this->mapObject(Result\GetPrepInstructionsForSKUResult::class),
            "{$ns}GetServiceStatusResult"                   => $this->mapObject(Result\GetServiceStatusResult::class),
            "{$ns}ListInboundShipmentItemsResult"           => $this->mapObject(Result\ListInboundShipmentItemsResult::class),
            "{$ns}ListInboundShipmentItemsByNextTokenResult"=> $this->mapObject(Result\ListInboundShipmentItemsResult::class),
            "{$ns}ListInboundShipmentsResult"               => $this->mapObject(Result\ListInboundShipmentsResult::class),
            "{$ns}ListInboundShipmentsByNextTokenResult"    => $this->mapObject(Result\ListInboundShipmentsResult::class),
            "{$ns}UpdateInboundShipmentResult"              => $this->mapObject(Result\UpdateInboundShipmentResult::class),


            // Collection objects.
            "{$ns}InboundShipmentPlans"         => $this->mapCollection("{$ns}member", Entity\InboundShipmentPlan::class),
            "{$ns}ItemData"                     => $this->mapCollection("{$ns}member", Entity\InboundShipmentItem::class),
            "{$ns}Items"                        => $this->mapCollection("{$ns}member", Entity\InboundShipmentPlanItem::class),
            "{$ns}ShipmentData"                 => $this->mapCollection("{$ns}member", Entity\InboundShipmentInfo::class),


            // List objects.
            "{$ns}AmazonPrepFeesDetailsList"    => $this->mapList("{$ns}AmazonPrepFeesDetails"),
            "{$ns}ASINPrepInstructionsList"     => $this->mapList("{$ns}ASINPrepInstructions"),
            "{$ns}InvalidASINList"              => $this->mapList("{$ns}InvalidASIN"),
            "{$ns}InvalidSKUList"               => $this->mapList("{$ns}InvalidSKU"),
            "{$ns}PrepDetailsList"              => $this->mapList("{$ns}PrepDetails"),
            "{$ns}PrepInstructionList"          => $this->mapList("{$ns}PrepInstruction"),
            "{$ns}SKUPrepInstructionsList"      => $this->mapList("{$ns}SKUPrepInstructions"),


            // Entity objects.
            "{$ns}AmazonPrepFeesDetails"        => $this->mapObject(Entity\AmazonPrepFeesDetails::class),
            "{$ns}ASINPrepInstructions"         => $this->mapObject(Entity\ASINPrepInstructions::class),
            "{$ns}EstimatedBoxContentsFee"      => $this->mapObject(Entity\BoxContentsFeeDetails::class),
            "{$ns}InvalidASIN"                  => $this->mapObject(Entity\InvalidASIN::class),
            "{$ns}InvalidSKU"                   => $this->mapObject(Entity\InvalidSKU::class),
            "{$ns}PrepDetails"                  => $this->mapObject(Entity\PrepDetails::class),
            "{$ns}ResponseMetadata"             => $this->mapObject(Entity\ResponseMetadata::class),
            "{$ns}ShipFromAddress"              => $this->mapObject(Entity\Address::class),
            "{$ns}ShipToAddress"                => $this->mapObject(Entity\Address::class),
            "{$ns}SKUPrepInstructions"          => $this->mapObject(Entity\SKUPrepInstructions::class),

            "{$ns}FeePerUnit"                   => $this->mapObject(Entity\Amount::class),
            "{$ns}TotalFee"                     => $this->mapObject(Entity\Amount::class),
        ];
    }
}
