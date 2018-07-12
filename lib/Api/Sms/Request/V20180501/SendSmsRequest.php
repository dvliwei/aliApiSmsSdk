<?php

namespace Aliyun\Api\Sms\Request\V20180501;

use Aliyun\Core\RpcAcsRequest;

class SendSmsRequest extends RpcAcsRequest
{
    function  __construct()
    {
        parent::__construct("Dysmsapi", "2018-05-01", "SendSms");
        $this->setMethod("POST");
    }

    private  $resourceOwnerId;

    private  $contentCode;

    private  $resourceOwnerAccount;

    private  $phoneNumbers;

    private  $externalId;

    private  $ownerId;

    private  $contentParam;

    public function getResourceOwnerId() {
        return $this->resourceOwnerId;
    }

    public function setResourceOwnerId($resourceOwnerId) {
        $this->resourceOwnerId = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
    }

    public function getContentCode() {
        return $this->contentCode;
    }

    public function setContentCode($contentCode) {
        $this->contentCode = $contentCode;
        $this->queryParameters["ContentCode"]=$contentCode;
    }

    public function getResourceOwnerAccount() {
        return $this->resourceOwnerAccount;
    }

    public function setResourceOwnerAccount($resourceOwnerAccount) {
        $this->resourceOwnerAccount = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
    }

    public function getPhoneNumbers() {
        return $this->phoneNumbers;
    }

    public function setPhoneNumbers($phoneNumbers) {
        $this->phoneNumbers = $phoneNumbers;
        $this->queryParameters["PhoneNumbers"]=$phoneNumbers;
    }

    public function getExternalId() {
        return $this->externalId;
    }

    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        $this->queryParameters["ExternalId"]=$externalId;
    }

    public function getOwnerId() {
        return $this->ownerId;
    }

    public function setOwnerId($ownerId) {
        $this->ownerId = $ownerId;
        $this->queryParameters["OwnerId"]=$ownerId;
    }

    public function getContentParam() {
        return $this->contentParam;
    }

    public function setContentParam($contentParam) {
        $this->contentParam = $contentParam;
        $this->queryParameters["ContentParam"]=$contentParam;
    }

}