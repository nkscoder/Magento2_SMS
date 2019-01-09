<?php

namespace Nitesh\Sms\Api\Data;

interface PostInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const SMS_ID           = 'sms_id';
    const SMS_PROVIDER     = 'sms_provider';
    const SMS_API_KEY      = 'sms_api_key';
    const SMS_SENDER       = 'sms_sender';
    const SMS_MESSAGE      = 'sms_message';
    const SMS_STATUS       = 'sms_status';
    const SMS_CREATED_AT   = 'created_at';









    /**#@-*/
   
    public function getId();
    public function getSmsProvider();
    public function getSmsApiKey();
    public function getSmsSender();
    public function getSmsMessage();
    public function getSmsStatus();
    public function getSmsCreateAt();
  

    public function setId($id);
    public function setSmsProvider($provider);
    public function setSmsApiKey($apiKey);
    public function setSmsSender($sender);
    public function setSmsMessage($message);
    public function setSmsStatus($status);
    public function setSmsCreateAt($createAt);
   


}