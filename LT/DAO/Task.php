<?php

namespace LT\DAO;


interface Task
{
    function createTask(\LT\Models\Task $task);
    function getTasks($type, $count);
    function getTaskById($taskId);
    function doTask($taskId);
    function ignoreTask($taskId);
}