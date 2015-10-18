<?php


namespace LT\Services\Impl;


use LT\Helpers\App;
use LT\Helpers\Defines;
use LT\Models\Task;
use LT\Services\TaskService;

class TaskServiceImpl implements TaskService
{

    /**
     * @Inject
     * @var \LT\DAO\Task
     */
    protected $taskDao;
    /**
     * @Inject
     * @var \LT\Services\VkService
     */
    protected $vkService;

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
        $vkId = App::getUserId();
        $url = $task->getUrl();
        if(isset($task)) {
            switch($task->getType()) {
                case Defines::TASK_TYPE_LIKE:
                    $isDone = $this->vkService->isLiked($vkId, $url);
                    break;
                case Defines::TASK_TYPE_GROUP:
                    $isDone = $this->vkService->isGroupMember($vkId, $url);
                    break;
                case Defines::TASK_TYPE_FRIEND:
                    $isDone = $this->vkService->isFriend($vkId, $url);
                    break;
                case Defines::TASK_TYPE_SHARE:
                    break;
                case Defines::TASK_TYPE_POLL:
                    break;
                case Defines::TASK_TYPE_COMMENT:
                    break;
                case Defines::TASK_TYPE_VIDEO:
                    break;
            }
        }
        if($isDone) {
           // $this->taskDao->doTask($task->getTaskId());
        }
        return $isDone;
    }


}