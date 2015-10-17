<?php

namespace LT\DAO;


interface Task
{
    function createTask(\LT\Models\Task $task);
    function getTasks($type, $count);
    /**
     * @param $taskId
     * @return \LT\Models\Task|null
     */
    function getTaskById($taskId);
    function doTask($taskId);
    function ignoreTask($taskId);
    function getTasksFromOwner($type);
}