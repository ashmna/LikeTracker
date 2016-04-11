<?php


namespace LT\Models;


use LT\Helpers\Defines;
use LT\Helpers\Model;

class User extends Model {

    protected $partnerId;
    protected $vkId;
    protected $lastLoginDate;
    protected $balance = 300;
    protected $rating  = 0;
    protected $status  = Defines::STATUS_ENABLED;

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
    public function getBalance() {
        return $this->balance;
    }
    public function setBalance($balance) {
        $this->balance = $balance;
    }
    public function getRating() {
        return $this->rating;
    }
    public function setRating($rating) {
        $this->rating = $rating;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
    }

}
