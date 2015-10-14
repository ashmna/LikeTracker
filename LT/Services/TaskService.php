<?php

namespace LT\Services;


interface TaskService
{
    function getTasks($type, $count);
}