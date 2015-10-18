<?php

namespace LT\Services;


interface VkService
{
    function isLiked($vkId, $url);
    function isGroupMember($vkId, $url);
    function isFriend($vkId, $url);
    function getUser($vkId);
}