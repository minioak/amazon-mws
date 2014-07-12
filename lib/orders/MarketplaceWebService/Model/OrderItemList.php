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
 * MarketplaceWebServiceOrders_Model_OrderItemList
 * 
 * Properties:
 * <ul>
 * 
 * <li>OrderItem: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_OrderItemList extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
'OrderItem' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceOrders_Model_OrderItem')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the OrderItem property.
     *
     * @return List<OrderItem> OrderItem.
     */
    public function getOrderItem()
    {
        if ($this->_fields['OrderItem']['FieldValue'] == null)
        {
            $this->_fields['OrderItem']['FieldValue'] = array();
        }
        return $this->_fields['OrderItem']['FieldValue'];
    }

    /**
     * Set the value of the OrderItem property.
     *
     * @param array orderItem
     * @return this instance
     */
    public function setOrderItem($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['OrderItem']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OrderItem.
     */
    public function unsetOrderItem()
    {
        $this->_fields['OrderItem']['FieldValue'] = array();
    }

    /**
     * Check to see if OrderItem is set.
     *
     * @return true if OrderItem is set.
     */
    public function isSetOrderItem()
    {
                return !empty($this->_fields['OrderItem']['FieldValue']);
            }

    /**
     * Add values for OrderItem, return this.
     *
     * @param orderItem
     *             New values to add.
     *
     * @return This instance.
     */
    public function withOrderItem()
    {
        foreach (func_get_args() as $OrderItem)
        {
            $this->_fields['OrderItem']['FieldValue'][] = $OrderItem;
        }
        return $this;
    }

}
