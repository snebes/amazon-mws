<?php

namespace SellerWorks\Amazon\Tests\FulfillmentInbound\Serializer;

use Faker;
use PHPUnit\Framework\TestCase;

use SellerWorks\Amazon\FulfillmentInbound\Entity;
use SellerWorks\Amazon\FulfillmentInbound\Request;
use SellerWorks\Amazon\FulfillmentInbound\Serializer\Serializer;

/**
 * Serializer tests
 */
class CreateInboundShipmentPlanRequestSerializerTest extends TestCase
{
    private $faker;

    public function setUp()
    {
        $this->faker = Faker\Factory::create();
    }

    /**
     * Test CreateInboundShipmentPlanRequest.ShipFromAddress.Name
     */
    public function test_CreateInboundShipmentPlanRequest_ShipFromAddress_Name()
    {
        $serializer = new Serializer;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->ShipFromAddress = new Entity\Address;
        $request->ShipFromAddress->Name = $this->faker->name;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'ShipFromAddress.Name' => $request->ShipFromAddress->Name,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);


        // Check for null.
        $request->ShipFromAddress->Name = '';
        $serialized = $serializer->serialize($request);
        unset($expected['ShipFromAddress.Name']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.ShipFromAddress.AddressLine1
     */
    public function test_CreateInboundShipmentPlanRequest_ShipFromAddress_AddressLine1()
    {
        $serializer = new Serializer;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->ShipFromAddress = new Entity\Address;
        $request->ShipFromAddress->AddressLine1 = $this->faker->streetAddress;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'ShipFromAddress.AddressLine1' => $request->ShipFromAddress->AddressLine1,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);


        // Check for null.
        $request->ShipFromAddress->AddressLine1 = '';
        $serialized = $serializer->serialize($request);
        unset($expected['ShipFromAddress.AddressLine1']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.ShipFromAddress.AddressLine2
     */
    public function test_CreateInboundShipmentPlanRequest_ShipFromAddress_AddressLine2()
    {
        $serializer = new Serializer;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->ShipFromAddress = new Entity\Address;
        $request->ShipFromAddress->AddressLine2 = $this->faker->secondaryAddress;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'ShipFromAddress.AddressLine2' => $request->ShipFromAddress->AddressLine2,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);


        // Check for null.
        $request->ShipFromAddress->AddressLine2 = '';
        $serialized = $serializer->serialize($request);
        unset($expected['ShipFromAddress.AddressLine2']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.ShipFromAddress.City
     */
    public function test_CreateInboundShipmentPlanRequest_ShipFromAddress_City()
    {
        $serializer = new Serializer;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->ShipFromAddress = new Entity\Address;
        $request->ShipFromAddress->City = $this->faker->city;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'ShipFromAddress.City' => $request->ShipFromAddress->City,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);


        // Check for null.
        $request->ShipFromAddress->City = '';
        $serialized = $serializer->serialize($request);
        unset($expected['ShipFromAddress.City']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.ShipFromAddress.DistrictOrCounty
     */
    public function test_CreateInboundShipmentPlanRequest_ShipFromAddress_DistrictOrCounty()
    {
        $serializer = new Serializer;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->ShipFromAddress = new Entity\Address;
        $request->ShipFromAddress->DistrictOrCounty = $this->faker->citySuffix;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'ShipFromAddress.DistrictOrCounty' => $request->ShipFromAddress->DistrictOrCounty,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);


        // Check for null.
        $request->ShipFromAddress->DistrictOrCounty = '';
        $serialized = $serializer->serialize($request);
        unset($expected['ShipFromAddress.DistrictOrCounty']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.ShipFromAddress.StateOrProvinceCode
     */
    public function test_CreateInboundShipmentPlanRequest_ShipFromAddress_StateOrProvinceCode()
    {
        $serializer = new Serializer;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->ShipFromAddress = new Entity\Address;
        $request->ShipFromAddress->StateOrProvinceCode = $this->faker->stateAbbr;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'ShipFromAddress.StateOrProvinceCode' => $request->ShipFromAddress->StateOrProvinceCode,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);


        // Check for null.
        $request->ShipFromAddress->StateOrProvinceCode = '';
        $serialized = $serializer->serialize($request);
        unset($expected['ShipFromAddress.StateOrProvinceCode']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.ShipFromAddress.CountryCode
     */
    public function test_CreateInboundShipmentPlanRequest_ShipFromAddress_CountryCode()
    {
        $serializer = new Serializer;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->ShipFromAddress = new Entity\Address;
        $request->ShipFromAddress->CountryCode = $this->faker->countryCode;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'ShipFromAddress.CountryCode' => $request->ShipFromAddress->CountryCode,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);


        // Check for null.
        $request->ShipFromAddress->CountryCode = '';
        $serialized = $serializer->serialize($request);
        unset($expected['ShipFromAddress.CountryCode']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.ShipFromAddress.PostalCode
     */
    public function test_CreateInboundShipmentPlanRequest_ShipFromAddress_PostalCode()
    {
        $serializer = new Serializer;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->ShipFromAddress = new Entity\Address;
        $request->ShipFromAddress->PostalCode = $this->faker->postcode;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'ShipFromAddress.PostalCode' => $request->ShipFromAddress->PostalCode,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);


        // Check for null.
        $request->ShipFromAddress->PostalCode = '';
        $serialized = $serializer->serialize($request);
        unset($expected['ShipFromAddress.PostalCode']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.ShipToCountryCode
     */
    public function test_CreateInboundShipmentPlanRequest_ShipToCountryCode()
    {
        $serializer = new Serializer;

        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->ShipToCountryCode = $this->faker->countryCode;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'ShipToCountryCode' => $request->ShipToCountryCode,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.ShipToCountrySubdivisionCode
     */
    public function test_CreateInboundShipmentPlanRequest_ShipToCountrySubdivisionCode()
    {
        $serializer = new Serializer;

        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->ShipToCountrySubdivisionCode = $this->faker->countryCode;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'ShipToCountrySubdivisionCode' => $request->ShipToCountrySubdivisionCode,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.LabelPrepPreference
     */
    public function test_CreateInboundShipmentPlanRequest_LabelPrepPreference()
    {
        $serializer = new Serializer;

        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->LabelPrepPreference = 'SELLER_LABEL';

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'LabelPrepPreference' => $request->LabelPrepPreference,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.LabelPrepPreference (invalid)
     */
    public function test_CreateInboundShipmentPlanRequest_LabelPrepPreference_invalid()
    {
        $serializer = new Serializer;

        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->LabelPrepPreference = 'INVALID';

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.InboundShipmentPlanRequestItem.SellerSKU
     */
    public function test_CreateInboundShipmentPlanRequest_InboundShipmentPlanRequestItem_SellerSKU()
    {
        $serializer = new Serializer;
        $value = $this->faker->uuid;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->InboundShipmentPlanRequestItems = new Entity\InboundShipmentPlanRequestItem;
        $request->InboundShipmentPlanRequestItems->SellerSKU = $value;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'InboundShipmentPlanRequestItems.member.1.SellerSKU' => $value,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);

        // Check for null.
        $request->InboundShipmentPlanRequestItems->SellerSKU = '';
        $serialized = $serializer->serialize($request);
        unset($expected['InboundShipmentPlanRequestItems.member.1.SellerSKU']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.InboundShipmentPlanRequestItem.ASIN
     */
    public function test_CreateInboundShipmentPlanRequest_InboundShipmentPlanRequestItem_ASIN()
    {
        $serializer = new Serializer;
        $value = $this->faker->uuid;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->InboundShipmentPlanRequestItems = new Entity\InboundShipmentPlanRequestItem;
        $request->InboundShipmentPlanRequestItems->ASIN = $value;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'InboundShipmentPlanRequestItems.member.1.ASIN' => $value,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);

        // Check for null.
        $request->InboundShipmentPlanRequestItems->ASIN = '';
        $serialized = $serializer->serialize($request);
        unset($expected['InboundShipmentPlanRequestItems.member.1.ASIN']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.InboundShipmentPlanRequestItem.Condition
     */
    public function test_CreateInboundShipmentPlanRequest_InboundShipmentPlanRequestItem_Condition()
    {
        $serializer = new Serializer;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->InboundShipmentPlanRequestItems = new Entity\InboundShipmentPlanRequestItem;
        $expected = ['Action' => 'CreateInboundShipmentPlan'];

        $choices = $request->InboundShipmentPlanRequestItems->getMetadata()['Condition']['choices'];

        foreach ($choices as $choice) {
            $request->InboundShipmentPlanRequestItems->Condition = $choice;

            $serialized = $serializer->serialize($request);
            $expected['InboundShipmentPlanRequestItems.member.1.Condition'] = $choice;

            ksort($serialized);
            ksort($expected);
            $this->assertSame($serialized, $expected);
        }

        // Check for null.
        $request->InboundShipmentPlanRequestItems->Condition = '';
        $serialized = $serializer->serialize($request);
        unset($expected['InboundShipmentPlanRequestItems.member.1.Condition']);

        $this->assertSame($serialized, $expected);

        // Check for invalid.
        $request->InboundShipmentPlanRequestItems->Condition = 'NOT_A_VALUE';
        $serialized = $serializer->serialize($request);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.InboundShipmentPlanRequestItem.Quantity
     */
    public function test_CreateInboundShipmentPlanRequest_InboundShipmentPlanRequestItem_Quantity()
    {
        $serializer = new Serializer;
        $value = $this->faker->randomDigitNotNull;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->InboundShipmentPlanRequestItems = new Entity\InboundShipmentPlanRequestItem;
        $request->InboundShipmentPlanRequestItems->Quantity = $value;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'InboundShipmentPlanRequestItems.member.1.Quantity' => $value,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);

        // Check for null.
        $request->InboundShipmentPlanRequestItems->Quantity = '';
        $serialized = $serializer->serialize($request);
        unset($expected['InboundShipmentPlanRequestItems.member.1.Quantity']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.InboundShipmentPlanRequestItem.QuantityInCase
     */
    public function test_CreateInboundShipmentPlanRequest_InboundShipmentPlanRequestItem_QuantityInCase()
    {
        $serializer = new Serializer;
        $value = $this->faker->randomDigitNotNull;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->InboundShipmentPlanRequestItems = new Entity\InboundShipmentPlanRequestItem;
        $request->InboundShipmentPlanRequestItems->QuantityInCase = $value;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
            'InboundShipmentPlanRequestItems.member.1.QuantityInCase' => $value,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);

        // Check for null.
        $request->InboundShipmentPlanRequestItems->QuantityInCase = '';
        $serialized = $serializer->serialize($request);
        unset($expected['InboundShipmentPlanRequestItems.member.1.QuantityInCase']);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.InboundShipmentPlanRequestItem.PrepDetailsList.PrepInstruction
     */
    public function test_CreateInboundShipmentPlanRequest_InboundShipmentPlanRequestItem_PrepDetailsList_PrepInstruction()
    {
        $serializer = new Serializer;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->InboundShipmentPlanRequestItems = new Entity\InboundShipmentPlanRequestItem;
        $request->InboundShipmentPlanRequestItems->PrepDetailsList = new Entity\PrepDetails;
        $expected = ['Action' => 'CreateInboundShipmentPlan'];

        $choices = $request->InboundShipmentPlanRequestItems->PrepDetailsList->getMetadata()['PrepInstruction']['choices'];

        foreach ($choices as $choice) {
            $request->InboundShipmentPlanRequestItems->PrepDetailsList->PrepInstruction = $choice;

            $serialized = $serializer->serialize($request);
            $expected['InboundShipmentPlanRequestItems.member.1.PrepDetailsList.member.1.PrepInstruction'] = $choice;

            ksort($serialized);
            ksort($expected);
            $this->assertSame($serialized, $expected);
        }

        // Check for null.
        $request->InboundShipmentPlanRequestItems->PrepDetailsList->PrepInstruction = '';
        $serialized = $serializer->serialize($request);
        unset($expected['InboundShipmentPlanRequestItems.member.1.PrepDetailsList.member.1.PrepInstruction']);

        $this->assertSame($serialized, $expected);

        // Check for invalid.
        $request->InboundShipmentPlanRequestItems->PrepDetailsList->PrepInstruction = 'NOT_A_VALUE';
        $serialized = $serializer->serialize($request);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.InboundShipmentPlanRequestItem.PrepDetailsList.PrepOwner
     */
    public function test_CreateInboundShipmentPlanRequest_InboundShipmentPlanRequestItem_PrepDetailsList_PrepOwner()
    {
        $serializer = new Serializer;

        // Check for value.
        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->InboundShipmentPlanRequestItems = new Entity\InboundShipmentPlanRequestItem;
        $request->InboundShipmentPlanRequestItems->PrepDetailsList = new Entity\PrepDetails;
        $expected = ['Action' => 'CreateInboundShipmentPlan'];

        $choices = $request->InboundShipmentPlanRequestItems->PrepDetailsList->getMetadata()['PrepOwner']['choices'];

        foreach ($choices as $choice) {
            $request->InboundShipmentPlanRequestItems->PrepDetailsList->PrepOwner = $choice;

            $serialized = $serializer->serialize($request);
            $expected['InboundShipmentPlanRequestItems.member.1.PrepDetailsList.member.1.PrepOwner'] = $choice;

            ksort($serialized);
            ksort($expected);
            $this->assertSame($serialized, $expected);
        }

        // Check for null.
        $request->InboundShipmentPlanRequestItems->PrepDetailsList->PrepOwner = '';
        $serialized = $serializer->serialize($request);
        unset($expected['InboundShipmentPlanRequestItems.member.1.PrepDetailsList.member.1.PrepOwner']);

        $this->assertSame($serialized, $expected);

        // Check for invalid.
        $request->InboundShipmentPlanRequestItems->PrepDetailsList->PrepOwner = 'NOT_A_VALUE';
        $serialized = $serializer->serialize($request);

        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.InboundShipmentPlanRequestItem.PrepDetailsList (multi)
     */
    public function test_CreateInboundShipmentPlanRequest_InboundShipmentPlanRequestItem_PrepDetailsList_multi()
    {
        $serializer = new Serializer;
        $meta = (new Entity\PrepDetails)->getMetadata();

        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->InboundShipmentPlanRequestItems = new Entity\InboundShipmentPlanRequestItem;
        $request->InboundShipmentPlanRequestItems->PrepDetailsList = [];

        $expected = [];

        for ($i = 1; $i <= 10; ++$i) {
            $path = sprintf('InboundShipmentPlanRequestItems.member.1.PrepDetailsList.member.%s.', $i);
            $v1 = $this->faker->randomElement($meta['PrepInstruction']['choices']);
            $v2 = $this->faker->randomElement($meta['PrepOwner']['choices']);

            $prep = new Entity\PrepDetails;
            $prep->PrepInstruction = $expected[$path.'PrepInstruction'] = $v1;
            $prep->PrepOwner       = $expected[$path.'PrepOwner']       = $v2;

            $request->InboundShipmentPlanRequestItems->PrepDetailsList[] = $prep;
        }

        $serialized = $serializer->serialize($request);
        $expected['Action'] = 'CreateInboundShipmentPlan';

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.InboundShipmentPlanRequestItem.PrepDetailsList (empty)
     */
    public function test_reateInboundShipmentPlanRequest_InboundShipmentPlanRequestItem_PrepDetailsList_empty()
    {
        $serializer = new Serializer;

        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->InboundShipmentPlanRequestItems = new Entity\InboundShipmentPlanRequestItem;
        $request->InboundShipmentPlanRequestItems->PrepDetailsList = null;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.InboundShipmentPlanRequestItems (multi)
     */
    public function test_CreateInboundShipmentPlanRequest_InboundShipmentPlanRequestItems_multi()
    {
        $serializer = new Serializer;

        $items = [];
        $expected = [];

        for ($i = 1; $i <= 50; ++$i) {
            $path = sprintf('InboundShipmentPlanRequestItems.member.%s.', $i);

            $item = new Entity\InboundShipmentPlanRequestItem;
            $item->SellerSKU      = $expected[$path.'SellerSKU']      = $this->faker->uuid;
            $item->ASIN           = $expected[$path.'ASIN']           = $this->faker->uuid;
            $item->Condition      = $expected[$path.'Condition']      = 'NewItem';
            $item->Quantity       = $expected[$path.'Quantity']       = $this->faker->randomDigitNotNull;
            $item->QuantityInCase = $expected[$path.'QuantityInCase'] = $this->faker->randomDigitNotNull;

            $items[] = $item;
        }

        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->InboundShipmentPlanRequestItems = $items;

        $serialized = $serializer->serialize($request);
        $expected['Action'] = 'CreateInboundShipmentPlan';

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test CreateInboundShipmentPlanRequest.InboundShipmentPlanRequestItems (empty)
     */
    public function test_CreateInboundShipmentPlanRequest_InboundShipmentPlanRequestItems_empty()
    {
        $serializer = new Serializer;

        $request = new Request\CreateInboundShipmentPlanRequest;
        $request->InboundShipmentPlanRequestItems = null;

        $serialized = $serializer->serialize($request);
        $expected = [
            'Action' => 'CreateInboundShipmentPlan',
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }
}
