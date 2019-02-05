<?php

namespace SellerWorks\Amazon\Reports\Result;

use SellerWorks\Amazon\Common\IterableResultInterface;
use SellerWorks\Amazon\Common\IterableResultTrait;
use SellerWorks\Amazon\Reports\Request\GetReportRequestListByNextTokenRequest;

/**
 * GetReportRequestList result.
 */
final class GetReportRequestListResult implements IterableResultInterface
{
    /**
     * @property  $client
     * @method  setClient
     * @method  getIterator
     */
    use IterableResultTrait;

    /**
     * @var string
     */
    public $NextToken;

    /**
     * @var boolean
     */
    public $HasNext;

    /**
     * @var ReportRequestInfo
     */
    public $ReportRequestInfo;

    /**
     * IterableResultInterface::getNextMethod
     */
    public function getNextMethod()
    {
        return 'GetReportRequestListByNextToken';
    }

    /**
     * IterableResultInterface::getNextRequest
     */
    public function getNextRequest()
    {
        if ('false' == $this->HasNext || empty($this->NextToken)) {
            return null;
        }

        $request = new GetReportRequestListByNextTokenRequest;
        $request->NextToken = $this->NextToken;

        return $request;
    }

    /**
     * IterableResultInterface::getRecords
     */
    public function getRecords()
    {
        return $this->ReportRequestInfo?: [];
    }
}
