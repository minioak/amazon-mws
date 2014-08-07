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
 * MarketplaceWebServiceOrders_Model_PaymentMethodList
 * 
 * Properties:
 * <ul>
 * 
 * <li>Method: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_PaymentMethodList extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
'Method' => array('FieldValue' => array(), 'FieldType' => array('string')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Method property.
     *
     * @return List<String> Method.
     */
    public function getMethod()
    {
        if ($this->_fields['Method']['FieldValue'] == null)
        {
            $this->_fields['Method']['FieldValue'] = array();
        }
        return $this->_fields['Method']['FieldValue'];
    }

    /**
     * Set the value of the Method property.
     *
     * @param array method
     * @return this instance
     */
    public function setMethod($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Method']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Method.
     */
    public function unsetMethod()
    {
        $this->_fields['Method']['FieldValue'] = array();
    }

    /**
     * Check to see if Method is set.
     *
     * @return true if Method is set.
     */
    public function isSetMethod()
    {
                return !empty($this->_fields['Method']['FieldValue']);
            }

    /**
     * Add values for Method, return this.
     *
     * @param method
     *             New values to add.
     *
     * @return This instance.
     */
    public function withMethod()
    {
        foreach (func_get_args() as $Method)
        {
            $this->_fields['Method']['FieldValue'][] = $Method;
        }
        return $this;
    }

}
