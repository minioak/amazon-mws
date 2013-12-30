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
 * MarketplaceWebServiceOrders_Model_PromotionIdList
 * 
 * Properties:
 * <ul>
 * 
 * <li>PromotionId: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_PromotionIdList extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
'PromotionId' => array('FieldValue' => array(), 'FieldType' => array('string')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PromotionId property.
     *
     * @return List<String> PromotionId.
     */
    public function getPromotionId()
    {
        if ($this->_fields['PromotionId']['FieldValue'] == null)
        {
            $this->_fields['PromotionId']['FieldValue'] = array();
        }
        return $this->_fields['PromotionId']['FieldValue'];
    }

    /**
     * Set the value of the PromotionId property.
     *
     * @param array promotionId
     * @return this instance
     */
    public function setPromotionId($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PromotionId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PromotionId.
     */
    public function unsetPromotionId()
    {
        $this->_fields['PromotionId']['FieldValue'] = array();
    }

    /**
     * Check to see if PromotionId is set.
     *
     * @return true if PromotionId is set.
     */
    public function isSetPromotionId()
    {
                return !empty($this->_fields['PromotionId']['FieldValue']);
            }

    /**
     * Add values for PromotionId, return this.
     *
     * @param promotionId
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPromotionId()
    {
        foreach (func_get_args() as $PromotionId)
        {
            $this->_fields['PromotionId']['FieldValue'][] = $PromotionId;
        }
        return $this;
    }

}
