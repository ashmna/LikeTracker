<?php


namespace LT\Models;


use LT\Helpers\Model;

class Task extends Model {

    protected $partnerId;
    protected $taskId;
    protected $type;
    protected $url;
    protected $amount;
    protected $count;
    protected $doneCount;

    public function getTaskId() {
        return $this->taskId;
    }
    public function setTaskId($taskId) {
        $this->taskId = $taskId;
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
    public function getAmount() {
        return $this->amount;
    }
    public function setAmount($amount) {
        $this->amount = $amount;
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


}