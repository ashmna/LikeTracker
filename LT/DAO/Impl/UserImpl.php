<?php


namespace LT\DAO\Impl;


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
}