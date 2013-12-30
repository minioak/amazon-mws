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
 * MarketplaceWebServiceOrders_Model_PaymentExecutionDetailItemList
 * 
 * Properties:
 * <ul>
 * 
 * <li>PaymentExecutionDetailItem: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_PaymentExecutionDetailItemList extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
'PaymentExecutionDetailItem' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceOrders_Model_PaymentExecutionDetailItem')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PaymentExecutionDetailItem property.
     *
     * @return List<PaymentExecutionDetailItem> PaymentExecutionDetailItem.
     */
    public function getPaymentExecutionDetailItem()
    {
        if ($this->_fields['PaymentExecutionDetailItem']['FieldValue'] == null)
        {
            $this->_fields['PaymentExecutionDetailItem']['FieldValue'] = array();
        }
        return $this->_fields['PaymentExecutionDetailItem']['FieldValue'];
    }

    /**
     * Set the value of the PaymentExecutionDetailItem property.
     *
     * @param array paymentExecutionDetailItem
     * @return this instance
     */
    public function setPaymentExecutionDetailItem($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PaymentExecutionDetailItem']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PaymentExecutionDetailItem.
     */
    public function unsetPaymentExecutionDetailItem()
    {
        $this->_fields['PaymentExecutionDetailItem']['FieldValue'] = array();
    }

    /**
     * Check to see if PaymentExecutionDetailItem is set.
     *
     * @return true if PaymentExecutionDetailItem is set.
     */
    public function isSetPaymentExecutionDetailItem()
    {
                return !empty($this->_fields['PaymentExecutionDetailItem']['FieldValue']);
            }

    /**
     * Add values for PaymentExecutionDetailItem, return this.
     *
     * @param paymentExecutionDetailItem
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPaymentExecutionDetailItem()
    {
        foreach (func_get_args() as $PaymentExecutionDetailItem)
        {
            $this->_fields['PaymentExecutionDetailItem']['FieldValue'][] = $PaymentExecutionDetailItem;
        }
        return $this;
    }

}
