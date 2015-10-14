<?php


namespace MD\Models;


use LT\Helpers\Model;

class UserTask extends Model {

    protected $partnerId;
    protected $taskId;
    protected $userId;
    protected $isDone;
    protected $createDate;

    public function getTaskId() {
        return $this->taskId;
    }
    public function setTaskId($taskId) {
        $this->taskId = $taskId;
    }
    public function getUserId() {
        return $this->userId;
    }
    public function setUserId($userId) {
        $this->userId = $userId;
    }
    public function getIsDone() {
        return $this->isDone;
    }
    public function setIsDone($isDone) {
        $this->isDone = $isDone;
    }
    public function getCreateDate() {
        return $this->createDate;
    }
    public function setCreateDate($createDate) {
        $this->createDate = $createDate;
    }



}