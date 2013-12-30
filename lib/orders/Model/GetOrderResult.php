<?php
/*******************************************************************************
 * Copyright 2009-2013 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Orders
 * @version  2011-01-01
 * Library Version: 2013-11-01
 * Generated: Fri Nov 08 21:29:23 GMT 2013
 */

/**
 *  @see MarketplaceWebServiceOrders_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceOrders_Model_GetOrderResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Orders: MarketplaceWebServiceOrders_Model_OrderList</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_GetOrderResult extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
'Orders' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_OrderList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Orders property.
     *
     * @return OrderList Orders.
     */
    public function getOrders()
    {
        return $this->_fields['Orders']['FieldValue'];
    }

    /**
     * Set the value of the Orders property.
     *
     * @param MarketplaceWebServiceOrders_Model_OrderList orders
     * @return this instance
     */
    public function setOrders($value)
    {
        $this->_fields['Orders']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Orders is set.
     *
     * @return true if Orders is set.
     */
    public function isSetOrders()
    {
                return !is_null($this->_fields['Orders']['FieldValue']);
            }

    /**
     * Set the value of Orders, return this.
     *
     * @param orders
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withOrders($value)
    {
        $this->setOrders($value);
        return $this;
    }

}
