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
 * MarketplaceWebServiceOrders_Model_OrderList
 * 
 * Properties:
 * <ul>
 * 
 * <li>Order: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_OrderList extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
'Order' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceOrders_Model_Order')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Order property.
     *
     * @return List<Order> Order.
     */
    public function getOrder()
    {
        if ($this->_fields['Order']['FieldValue'] == null)
        {
            $this->_fields['Order']['FieldValue'] = array();
        }
        return $this->_fields['Order']['FieldValue'];
    }

    /**
     * Set the value of the Order property.
     *
     * @param array order
     * @return this instance
     */
    public function setOrder($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Order']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Order.
     */
    public function unsetOrder()
    {
        $this->_fields['Order']['FieldValue'] = array();
    }

    /**
     * Check to see if Order is set.
     *
     * @return true if Order is set.
     */
    public function isSetOrder()
    {
                return !empty($this->_fields['Order']['FieldValue']);
            }

    /**
     * Add values for Order, return this.
     *
     * @param order
     *             New values to add.
     *
     * @return This instance.
     */
    public function withOrder()
    {
        foreach (func_get_args() as $Order)
        {
            $this->_fields['Order']['FieldValue'][] = $Order;
        }
        return $this;
    }

}
