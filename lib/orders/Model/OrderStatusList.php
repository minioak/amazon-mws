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
 * MarketplaceWebServiceOrders_Model_OrderStatusList
 * 
 * Properties:
 * <ul>
 * 
 * <li>Status: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_OrderStatusList extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
'Status' => array('FieldValue' => array(), 'FieldType' => array('string')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Status property.
     *
     * @return List<String> Status.
     */
    public function getStatus()
    {
        if ($this->_fields['Status']['FieldValue'] == null)
        {
            $this->_fields['Status']['FieldValue'] = array();
        }
        return $this->_fields['Status']['FieldValue'];
    }

    /**
     * Set the value of the Status property.
     *
     * @param array status
     * @return this instance
     */
    public function setStatus($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Status.
     */
    public function unsetStatus()
    {
        $this->_fields['Status']['FieldValue'] = array();
    }

    /**
     * Check to see if Status is set.
     *
     * @return true if Status is set.
     */
    public function isSetStatus()
    {
                return !empty($this->_fields['Status']['FieldValue']);
            }

    /**
     * Add values for Status, return this.
     *
     * @param status
     *             New values to add.
     *
     * @return This instance.
     */
    public function withStatus()
    {
        foreach (func_get_args() as $Status)
        {
            $this->_fields['Status']['FieldValue'][] = $Status;
        }
        return $this;
    }

}
