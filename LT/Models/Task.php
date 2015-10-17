<?php


namespace LT\Models;


use LT\Helpers\Defines;
use LT\Helpers\Model;

class Task extends Model {

    protected $partnerId;
    protected $taskId;
    protected $ownerId;
    protected $type;
    protected $url;
    protected $price;
    protected $count;
    protected $doneCount = 0;
    protected $status = Defines::STATUS_ENABLED;
    protected $createDate;

    public function getTaskId() {
        return $this->taskId;
    }
    public function setTaskId($taskId) {
        $this->taskId = $taskId;
    }
    public function getOwnerId() {
        return $this->ownerId;
    }
    public function setOwnerId($ownerId) {
        $this->ownerId = $ownerId;
    }
    public function getType() {
        return $this->type;
    }
    public function setType($type) {
        $this->type = $type;
    }
    public function getUrl() {
        return $this->url;
    }
    public function setUrl($url) {
        $this->url = $url;
    }
    public function getPrice() {
        return $this->price;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function getCount() {
        return $this->count;
    }
    public function setCount($count) {
        $this->count = $count;
    }
    public function getDoneCount() {
        return $this->doneCount;
    }
    public function setDoneCount($doneCount) {
        $this->doneCount = $doneCount;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
    }
    public function getCreateDate() {
        return $this->createDate;
    }
    public function setCreateDate($createDate) {
        $this->createDate = $createDate;
    }


}