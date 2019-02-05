<?php

namespace SellerWorks\Amazon\Tests\Reports\Serializer;

use DateTime;
use Faker;
use PHPUnit\Framework\TestCase;

use SellerWorks\Amazon\Reports\Entity;
use SellerWorks\Amazon\Reports\Request;
use SellerWorks\Amazon\Reports\Serializer\Serializer;

/**
 * Serializer tests
 */
class GetReportRequestCountRequestSerializerTest extends TestCase
{
    private $faker;

    public function setUp()
    {
        $this->faker = Faker\Factory::create();
    }

    /**
     * Test GetReportRequestCountRequest.ReportTypeList
     */
    public function test_GetReportRequestCountRequest_ReportTypeList_as_scalar()
    {
        $serializer = new Serializer;

        $request = new Request\GetReportRequestCountRequest;
        $request->ReportTypeList = Entity\ReportType::getTypes()[0];

        $serialized = $serializer->serialize($request);
        $expected   = [
            'Action'              => 'GetReportRequestCount',
            'ReportTypeList.Id.1' => $request->ReportTypeList,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test GetReportRequestCountRequest.ReportTypeList
     */
    public function test_GetReportRequestCountRequest_ReportTypeList_as_array()
    {
        $serializer = new Serializer;

        $values = [];
        $array  = Entity\ReportType::getTypes();

        for ($i = 1; $i <= count($array); ++$i) {
            $values['ReportTypeList.Id.'.$i] = $array[$i - 1];
        }

        $request = new Request\GetReportRequestCountRequest;
        $request->ReportTypeList = array_values($values);

        $serialized = $serializer->serialize($request);
        $expected   = ['Action' => 'GetReportRequestCount'] + $values;

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test GetReportRequestCountRequest.ReportProcessingStatusList
     */
    public function test_GetReportRequestCountRequest_ReportProcessingStatusList_as_scalar()
    {
        $serializer = new Serializer;

        $request = new Request\GetReportRequestCountRequest;
        $request->ReportProcessingStatusList = '_SUBMITTED_';

        $serialized = $serializer->serialize($request);
        $expected   = [
            'Action'                          => 'GetReportRequestCount',
            'ReportProcessingStatusList.Id.1' => $request->ReportProcessingStatusList,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test GetReportRequestCountRequest.ReportProcessingStatusList
     */
    public function test_GetReportRequestCountRequest_ReportProcessingStatusList_as_array()
    {
        $serializer = new Serializer;

        $values = [
            'ReportProcessingStatusList.Id.1' => '_SUBMITTED_',
            'ReportProcessingStatusList.Id.2' => '_IN_PROGRESS_',
            'ReportProcessingStatusList.Id.3' => '_CANCELLED_',
            'ReportProcessingStatusList.Id.4' => '_DONE_',
            'ReportProcessingStatusList.Id.5' => '_DONE_NO_DATA_',
        ];

        $request = new Request\GetReportRequestCountRequest;
        $request->ReportProcessingStatusList = array_values($values);

        $serialized = $serializer->serialize($request);
        $expected   = ['Action' => 'GetReportRequestCount'] + $values;

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test GetReportRequestCountRequest.{RequestedFromDate,RequestedToDate} as DateTime objects.
     */
    public function test_GetReportRequestCountRequest_dates_as_objects()
    {
        $serializer = new Serializer;

        $request = new Request\GetReportRequestCountRequest;
        $request->RequestedFromDate = new DateTime($bttf1955 = '1955-11-12T06:38:00Z');
        $request->RequestedToDate   = new DateTime($bttf1985 = '1985-10-26T09:00:00Z');

        $serialized = $serializer->serialize($request);
        $expected   = [
            'Action'            => 'GetReportRequestCount',
            'RequestedFromDate' => $bttf1955,
            'RequestedToDate'   => $bttf1985,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }

    /**
     * Test GetReportRequestCountRequest.{RequestedFromDate,RequestedToDate} as strings.
     */
    public function test_GetReportRequestCountRequest_dates_as_strings()
    {
        $serializer = new Serializer;

        $request = new Request\GetReportRequestCountRequest;
        $request->RequestedFromDate = $bttf1955 = '1955-11-12T06:38:00Z';
        $request->RequestedToDate   = $bttf1985 = '1985-10-26T09:00:00Z';

        $serialized = $serializer->serialize($request);
        $expected   = [
            'Action'            => 'GetReportRequestCount',
            'RequestedFromDate' => $bttf1955,
            'RequestedToDate'   => $bttf1985,
        ];

        ksort($serialized);
        ksort($expected);
        $this->assertSame($serialized, $expected);
    }
}
