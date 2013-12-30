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
 * MarketplaceWebServiceOrders_Model_FulfillmentChannelList
 * 
 * Properties:
 * <ul>
 * 
 * <li>Channel: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_FulfillmentChannelList extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
'Channel' => array('FieldValue' => array(), 'FieldType' => array('string')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Channel property.
     *
     * @return List<String> Channel.
     */
    public function getChannel()
    {
        if ($this->_fields['Channel']['FieldValue'] == null)
        {
            $this->_fields['Channel']['FieldValue'] = array();
        }
        return $this->_fields['Channel']['FieldValue'];
    }

    /**
     * Set the value of the Channel property.
     *
     * @param array channel
     * @return this instance
     */
    public function setChannel($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Channel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Channel.
     */
    public function unsetChannel()
    {
        $this->_fields['Channel']['FieldValue'] = array();
    }

    /**
     * Check to see if Channel is set.
     *
     * @return true if Channel is set.
     */
    public function isSetChannel()
    {
                return !empty($this->_fields['Channel']['FieldValue']);
            }

    /**
     * Add values for Channel, return this.
     *
     * @param channel
     *             New values to add.
     *
     * @return This instance.
     */
    public function withChannel()
    {
        foreach (func_get_args() as $Channel)
        {
            $this->_fields['Channel']['FieldValue'][] = $Channel;
        }
        return $this;
    }

}
