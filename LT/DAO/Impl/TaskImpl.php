<?php


namespace LT\DAO\Impl;



use LT\Helpers\App;
use LT\Models\Task;
use LT\Models\UserTask;

class TaskImpl implements \LT\DAO\Task {

    /**
     * @Inject
     * @var \LT\Helpers\DB
     */
    protected $db;

    public function createTask(Task $task) {
        $task->setOwnerId(App::getUserId());
        $task->setCreateDate(date('Y-m-d H:i:s'));
        $this->db->insert('tasks', $task->toArray());
        return $this->db->getLastInsertId();
    }

    public function getTasks($type, $count) {
        $count = abs(intval($count));
        $where = '';
        $bind = [
            'partnerId' => App::getPartnerId(),
            'userId'    => App::getUserId(),
        ];
        if($type != 'all') {
            $where .= 'AND tasks.type = :type';
            $bind['type'] = $type;
        }
        $query = "SELECT tasks.* FROM tasks
                 LEFT JOIN users_tasks ut ON (tasks.taskId = ut.taskId AND ut.userId = :userId)
                WHERE tasks.partnerId = :partnerId
                  AND tasks.ownerId  != :userId
                  AND ut.isDone IS NULL
                  {$where}
                ORDER BY tasks.price DESC
                LIMIT {$count}";
        return $this->db->run($query, $bind, ['fetch' => true]);
    }

    public function getTaskById($taskId) {
        $task = null;
        $bind = [
            'partnerId' => App::getPartnerId(),
            'taskId'    => abs(intval($taskId)),
        ];
        $taskData = $this->db->select('tasks', 'partnerId = :partnerId AND taskId = :taskId', $bind);
        if(count($taskData) == 1) {
            $task = new Task($taskData[0]);
        }
        return $task;
    }


    public function doTask($taskId) {
        $task = $this->getTaskById($taskId);
        if(!isset($task)) return false;

        $userTask = new UserTask();
        $userTask->setIsDone(true);
        $userTask->setTaskId($task->getTaskId());
        $userTask->setUserId(App::getUserId());
        $userTask->setCreateDate(date('Y-m-d H:i:s'));

        $this->db->insert('users_tasks', $userTask->toArray());
        $givenAmount = $task->getPrice();
        $commission  = $task->getCommission();
        $takenAmount = $givenAmount + $commission;
        $query = "UPDATE users SET
                  users.balance = users.balance - :takenAmount,
                  users.reating = users.reating + 2
                  WHERE partnerId = :partnerId AND users.vkId = :ownerId;
                  UPDATE users SET
                  users.balance = users.balance + :givenAmount,
                  users.reating = users.reating + 1
                  WHERE partnerId = :partnerId AND users.vkId = :userId;
                  UPDATE tasks SET
                  tasks.doneCount = tasks.doneCount + 1,
                  tasks.givenAmount = :givenAmount,
                  tasks.takenAmount = :takenAmount,
                  tasks.commission  = :commission
                  WHERE partnerId = :partnerId AND taskId = :taskId;";

        $bind = [
            'partnerId'   => App::getPartnerId(),
            'ownerId'     => $task->getOwnerId(),
            'userId'      => App::getUserId(),
            'givenAmount' => $givenAmount,
            'takenAmount' => $takenAmount,
            'commission'  => $commission,
            'taskId'      => $task->getTaskId(),
        ];

        return $this->db->run($query, $bind);
    }

    public function ignoreTask($taskId) {
        $userTask = new UserTask();
        $userTask->setIsDone(false);
        $userTask->setTaskId($taskId);
        $userTask->setUserId(App::getUserId());
        $userTask->setCreateDate(date('Y-m-d H:i:s'));

        return $this->db->insert('users_tasks', $userTask->toArray());
    }

    public function getTasksFromOwner($type) {
        $bind = [
            'partnerId' => App::getPartnerId(),
            'ownerId'   => App::getUserId(),
            'type'      => $type,
        ];
        return $this->db->select('tasks', 'partnerId = :partnerId AND ownerId = :ownerId AND `type` = :type', $bind);
    }


}