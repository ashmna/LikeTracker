<?php

namespace LT\Services;


interface VkService
{
    function isLiked($vkId, $url);
}