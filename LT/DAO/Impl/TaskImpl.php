<?php


namespace LT\DAO\Impl;



use LT\Helpers\App;
use LT\Models\Task;
use MD\Models\UserTask;

class TaskImpl implements \LT\DAO\Task {

    /**
     * @Inject
     * @var \LT\Helpers\DB
     */
    protected $db;

    public function createTask(Task $task) {
        $task->setCreateDate(date('Y-m-d H:i:s'));
        $this->db->insert('tasks', $task->toArray());
        return $this->db->getLastInsertId();
    }

    public function getTasks($type, $count) {
        $count = abs(intval($count));
        $bind = [
            'partnerId' => App::getPartnerId(),
            'userId'    => App::getUserId(),
            'type'      => $type,
        ];
        $query = "SELECT tasks.* FROM tasks
                 LEFT JOIN users_tasks ut ON (tasks.taskId = ut.taskId AND ut.userId = :userId)
                WHERE tasks.partnerId = :partnerId
                  AND tasks.ownerId   = :userId
                  AND tasks.type      = :type
                  AND ut.isDone      <> 1
                LIMIT {$count}";
        return $this->db->run($query, $bind, ['fetch' => true]);
    }

    public function doTask($taskId) {
        $userTask = new UserTask();
        $userTask->setIsDone(true);
        $userTask->setTaskId($taskId);
        $userTask->setUserId(App::getUserId());
        $userTask->setCreateDate(date('Y-m-d H:i:s'));

        return $this->db->insert('users_tasks', $userTask->toArray());
    }

    public function ignoreTask($taskId) {
        $userTask = new UserTask();
        $userTask->setIsDone(false);
        $userTask->setTaskId($taskId);
        $userTask->setUserId(App::getUserId());
        $userTask->setCreateDate(date('Y-m-d H:i:s'));

        return $this->db->insert('users_tasks', $userTask->toArray());
    }


}