<?php

namespace Minioak\AmazonMWS;

use \DCarbone\XMLWriterPlus;

class FeedsClient extends \MarketplaceWebServiceFeeds_Client 
{

    protected $message = array(
      'Header' => array(
        'DocumentVersion' => '1.01',
          'MerchantIndentifier' => ''
      ),
        'MessageType' => 'OrderFulfillemnt',
        'Message' => array(
            'MessageID' => '1',
            'OperationType' => 'Update',
            'OrderFulfillment' => array(
                'AmazonOrderID' => '',
                'FulfillmentDate' => '',
                'FulfillmentData' => array(
                    'CarrierName' => 'carrier',
                    'ShippingMethod' => 'shipping'
                ),
                'Item' => array(
                    'AmazonOrderItemCode' => '2342342',
                    'Quantity' => '1'
                )
            )
        )
    );
    
	public function dispatch_xml() {
        $xml = new XMLWriterPlus();
        $xml->openMemory();
        $xml->startDocument();
     
        $xml->startElement('AmazonEnvelope');
        
        $xml->appendHash($this->message);
        
        $xml->endElement();

        $xml->endDocument();
        
        echo htmlspecialchars($xml->outputMemory());
    }

}

