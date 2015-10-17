<?php


namespace LT\Services\Impl;


use LT\Helpers\App;
use LT\Models\Task;
use LT\Services\TaskService;

class TaskServiceImpl implements TaskService
{

    /**
     * @Inject
     * @var \LT\DAO\Task
     */
    protected $taskDao;

    public function createTask(Task $task) {
        return $this->taskDao->createTask($task);
    }

    public function getTasks($type, $count) {
        return $this->taskDao->getTasks($type, $count);
    }

    public function getMyTasks($type) {
        return $this->taskDao->getTasksFromOwner($type);
    }

    public function ignoreTask($taskId) {
        return $this->taskDao->ignoreTask($taskId);
    }

    public function checkTask($taskId) {
        $task = $this->taskDao->getTaskById($taskId);
        $isDone = false;
        if(isset($task)) {
            App::getUserId();
            $url = $task->getUrl();
        }
        return $isDone;
    }


}