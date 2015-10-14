<?php


namespace LT\Services\Impl;


use LT\Services\TaskService;

class TaskServiceImpl implements TaskService
{

    /**
     * @Inject
     * @var \LT\DAO\Task
     */
    protected $taskDao;

    public function getTasks($type, $count) {
        return $this->taskDao->getTasks($type, $count);
    }

}