<?php

namespace LT\Services\Impl;


use LT\Services\VkService;

class VkServiceImpl implements VkService
{
    public function isLiked($vkId, $url) {
        list($type, $ownerId, $itemId) = $this->parsUrl($url);
        // TODO: Implement isLiked() method.
    }


    private function parsUrl($url) {
        $type = '';
        $ownerId = 0;
        $itemId  = 0;
        // TODO: Implement parsUrl() method.
        return [$type, $ownerId, $itemId];
    }
}