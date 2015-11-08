<?php


namespace LT\DAO\Impl;


use LT\Helpers\Config;
use LT\Models\User;

class UserImpl implements \LT\DAO\User
{
    /**
     * @Inject
     * @var \LT\Helpers\DB
     */
    protected $db;

    public function createOrUpdate(User $user) {
        $usersData = [
            $user->toArray()
        ];
        return $this->db->insertOrUpdateDataSet('users', $usersData, ['lastLoginDate']);
    }

    public function getUserData($vkId) {
        $bind = [
            'vkId' => $vkId,
            'partnerId' => Config::getInstance()->partnerId,
        ];
        $data = [];
        $res = $this->db->select('users', 'partnerId = :partnerId AND vkId = :vkId', $bind);
        if(count($res) == 1) {
            $data = $res[0];
        }
        return $data;
    }


}