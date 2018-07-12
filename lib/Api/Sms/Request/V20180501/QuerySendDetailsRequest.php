<?php

namespace Aliyun\Api\Sms\Request\V20180501;

use Aliyun\Core\RpcAcsRequest;

class QuerySendDetailsRequest extends RpcAcsRequest
{
    function  __construct()
    {
        parent::__construct("Dysmsapi", "2018-05-01", "QuerySendDetails");
        $this->setMethod("POST");
    }

    private  $resourceOwnerId;

    private  $endDate;

    private  $resourceOwnerAccount;

    private  $phoneNumber;

    private  $bizId;

    private  $pageSize;

    private  $currentPage;

    private  $ownerId;

    private  $startDate;

    public function getResourceOwnerId() {
        return $this->resourceOwnerId;
    }

    public function setResourceOwnerId($resourceOwnerId) {
        $this->resourceOwnerId = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function setEndDate($endDate) {
        $this->endDate = $endDate;
        $this->queryParameters["EndDate"]=$endDate;
    }

    public function getResourceOwnerAccount() {
        return $this->resourceOwnerAccount;
    }

    public function setResourceOwnerAccount($resourceOwnerAccount) {
        $this->resourceOwnerAccount = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
        $this->queryParameters["PhoneNumber"]=$phoneNumber;
    }

    public function getBizId() {
        return $this->bizId;
    }

    public function setBizId($bizId) {
        $this->bizId = $bizId;
        $this->queryParameters["BizId"]=$bizId;
    }

    public function getPageSize() {
        return $this->pageSize;
    }

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
        $this->queryParameters["PageSize"]=$pageSize;
    }

    public function getCurrentPage() {
        return $this->currentPage;
    }

    public function setCurrentPage($currentPage) {
        $this->currentPage = $currentPage;
        $this->queryParameters["CurrentPage"]=$currentPage;
    }

    public function getOwnerId() {
        return $this->ownerId;
    }

    public function setOwnerId($ownerId) {
        $this->ownerId = $ownerId;
        $this->queryParameters["OwnerId"]=$ownerId;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function setStartDate($startDate) {
        $this->startDate = $startDate;
        $this->queryParameters["StartDate"]=$startDate;
    }

}