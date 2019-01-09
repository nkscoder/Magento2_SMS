<?php namespace Nitesh\Sms\Observer; 

use Magento\Framework\Event\ObserverInterface; 


class Observer implements ObserverInterface { 

    private $objectManager;
    protected $_productFactory;  
    
    public function __construct(

    
           \Magento\Sales\Model\Order $order,
          \Magento\Catalog\Model\ProductFactory $productFactory

    ) { 
           $this->order = $order;
           $this->_productFactory = $productFactory;
           
    }
    
   
     
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $order = $observer->getEvent()->getOrder();
        
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/nitesh.log');
	    $logger = new \Zend\Log\Logger();
	    $logger->addWriter($writer);
        $order->getIncrementId();
        $oobj = $order->getData();
        
        try {
            $ch = curl_init("https://mapi.futuregroup.in/auth-fgapis-test/realms/futuregroup/protocol/openid-connect/token");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($auth_obj));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = json_decode(curl_exec($ch),true);
            curl_close ($ch);
            
           
         
        
            
        } catch(\Exception $ex) {
            $logger->info('Exception: ', $ex);
        }
    }
 }
