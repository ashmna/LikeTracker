<?php

namespace LT\DAO;


interface Task
{
    public function createTask(\LT\Models\Task $task);
    public function getTasks($type, $count);
    public function doTask($taskId);
}