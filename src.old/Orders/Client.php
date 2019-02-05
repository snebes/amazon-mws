<?php

namespace SellerWorks\Amazon\Orders;

use SellerWorks\Amazon\Common\AbstractClient;
use SellerWorks\Amazon\Credentials\CredentialsInterface;

/**
 * Orders API
 *
 * With the Orders API section of Amazon Marketplace Web Service (Amazon MWS), you can build simple applications that
 * retrieve only the order information that you need. This enables you to develop fast, flexible, custom applications in
 * areas like order synchronization, order research, and demand-based decision support tools.
 *
 * @method  ListOrders                 Returns orders created or updated during a time frame that you specify.
 * @method  ListOrdersByNextToken      Returns the next page of orders using the NextToken parameter.
 * @method  GetOrder                   Returns orders based on the AmazonOrderId values that you specify.
 * @method  ListOrderItems             Returns order items based on the AmazonOrderId that you specify.
 * @method  ListOrderItemsByNextToken  Returns the next page of order items using the NextToken parameter.
 * @method  GetServiceStatus           Returns the operational status of the Orders API section.
 *
 * @url http://docs.developer.amazonservices.com/en_US/orders-2013-09-01/Orders_Overview.html
 * @version 2013-09-01
 */
class Client extends AbstractClient implements OrdersInterface
{
    /**
     * Import the Orders API plumbing methods.
     *
     * @method  ListOrders                 Returns orders created or updated during a time frame that you specify.
     * @method  ListOrdersByNextToken      Returns the next page of orders using the NextToken parameter.
     * @method  GetOrder                   Returns orders based on the AmazonOrderId values that you specify.
     * @method  ListOrderItems             Returns order items based on the AmazonOrderId that you specify.
     * @method  ListOrderItemsByNextToken  Returns the next page of order items using the NextToken parameter.
     * @method  GetServiceStatus           Returns the operational status of the Orders API section.
     *
     * @method  ListOrdersAsync
     * @method  ListOrdersByNextTokenAsync
     * @method  GetOrderAsync
     * @method  ListOrderItemsAsync
     * @method  ListOrderItemsByNextTokenAsync
     * @method  GetServiceStatusAsync
     */
    use OrdersTrait;

    /**
     * MWS Service definitions.
     */
    const MWS_PATH    = '/Orders/2013-09-01/';
    const MWS_VERSION = '2013-09-01';

    /**
     * {@inheritDoc}
     */
    public function __construct(CredentialsInterface $credentials)
    {
        parent::__construct($credentials);

        $this->serializer = new Serializer\Serializer;
    }
}
