<?php

namespace LT\Services;


use LT\Models\Task;

interface TaskService
{
    function createTask(Task $task);
    function getTasks($type, $count);
    function getMyTasks($type);
    function ignoreTask($taskId);
    function checkTask($taskId);
}