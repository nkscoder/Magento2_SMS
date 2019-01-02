<?php
/**
 * Created by PhpStorm.
 * User: nitesh
 * Date: 16/12/18
 * Time: 4:17 PM
 */


namespace Nitesh\Sms\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Nitesh\Sms\Api\Data\PostInterface;

/**
 * Class File
 * @package Nitesh\Post\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Post extends AbstractModel implements PostInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'nitesh_sms';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Nitesh\Sms\Model\ResourceModel\Post');
    }


//    get Function  for all field

    /**
     * Return identities
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getId(){
        return $this->getData(self::SMS_ID);
    }

    public function getSmsProvider(){
        return $this->getData(self::SMS_PROVIDER);
    }
    public function getSmsApiKey(){
        return $this->getData(self::SMS_API_KEY);
    }
    public function getSmsSender(){
        return $this->getData(self::SMS_SENDER);
    }
    public function getSmsMessage(){
        return $this->getData(self::SMS_MESSAGE);
    }

    public function getSmsStatus(){
    return $this->getData(self::SMS_STATUS);
    }

    public function getSmsCreateAt(){
        return $this->getData(self::SMS_CREATED_AT);
    }

 


//    Set Function  for all field
    public function setId($id){
        return $this->getData(self::SMS_ID,$id);
    }
    public function setSmsProvider($provider)
    {
        return $this->getData(self::SMS_PROVIDER,$provider);
    }
    public function setSmsApiKey($apiKey)
    {
        return $this->getData(self::SMS_API_KEY,$apiKey);
    }
    public function setSmsSender($sender)
    {
        return $this->getData(self::SMS_SENDER,$sender);
    }
    public function setSmsMessage($message){
        return $this->getData(self::SMS_MESSAGE,$message);
    }
    public function setSmsStatus($status){
        return $this->getData(self::SMS_STATUS,$status);
    }
    public function setSmsCreateAt($createAt){
        return $this->getData(self::SMS_CREATED_AT,$createAt);

    }
    
}