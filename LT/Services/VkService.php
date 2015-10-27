<?php

namespace LT\Services;


use LT\Models\Task;

interface VkService
{
    function isLiked($vkId, $url);
    function isGroupMember($vkId, $url);
    function isFriend($vkId, $url);
    function getUser($vkId);
    function isWatchVideo(Task $task, $watchDuration);
}