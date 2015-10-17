<?php

namespace LT\Services\Impl;


use LT\Services\VkService;

class VkServiceImpl implements VkService
{
    private $vkUrl = 'http://api.vk.com/method/';

    public function isLiked($vkId, $url) {
        $result = false;
        list($type, $ownerId, $itemId) = $this->parsUrl($url);
        $params = [
            'type'     => $type,
            'owner_id' => $ownerId,
            'item_id'  => $itemId,
            'filter'   => 'likes'
        ];
        $response = $this->getMethodResult('likes.isLiked', $params);
        if(!isset($response['error'])
            && !empty($response['response'])
            && !empty($response['response']['users'])) {
            $result = in_array($vkId, $response['response']['users']);
        }
        return $result;
    }

    public function isGroupMember($vkId, $url) {
        $result = false;
        $groupId = 0;
        $params = [
            'group_id' => $groupId,
            'user_id'  => $vkId,
            'extended' => 1,
        ];
        $response = $this->getMethodResult('groups.isMember ', $params);
        if(!isset($response['error']) && !empty($response['response'])) {
            $result = $response['response']['member'] == 1;
        }
        return $result;
    }

    public function isFriend($vkId, $url) {
        $result = false;
        list($userId) = $this->parsUrl($url);
        $params = [
            'user_id' => $userId,
        ];
        $response = $this->getMethodResult('friends.getLists', $params);
        if(!isset($response['error'])
            && !empty($response['response'])
            && !empty($response['response']['items'])) {
            $result = in_array($vkId, $response['response']['items']);
        }
        return $result;
    }
    //Репосты
    //wall.getReposts
    //owner_id
    //post_id

    //polls.getVoters


    private function parsUrl($url) {
        $type = '';
        $ownerId = 0;
        $itemId  = 0;
        // TODO: Implement parsUrl() method.
        return [$type, $ownerId, $itemId];
    }

    private function getMethodResult($method, $params) {
        $arr = [];
        foreach($params as $k=>$v) {
            $arr[] = "$k=$v";
        }
        $url = $this->vkUrl.$method.'/?'.implode('&', $arr);
        $response = file_get_contents($url);
        return json_encode($response, true);
    }
}