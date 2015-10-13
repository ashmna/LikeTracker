<?php


namespace LT\Models;


use LT\Helpers\Model;

class User extends Model {

    protected $partnerId;
    protected $vkId;
    protected $lastLoginDate;

    public function getVkId() {
        return $this->vkId;
    }

    public function setVkId($vkId) {
        $this->vkId = $vkId;
    }

    public function getLastLoginDate() {
        return $this->lastLoginDate;
    }

    public function setLastLoginDate($lastLoginDate) {
        $this->lastLoginDate = $lastLoginDate;
    }


}