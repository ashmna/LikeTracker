<?php


namespace LT\Services\Impl;


use LT\Helpers\App;
use LT\Models\User;
use LT\Services\UserService;

/**
 * Class UserServiceImpl
 * @package LT\Services\Impl
 * @Transactional
 */
class UserServiceImpl implements UserService {

    /**
     * @Inject
     * @var \LT\DAO\User
     */
    protected $userDao;

    public function login($vkId) {
        echo($vkId);
        $user = new User();
        $user->setVkId($vkId);
        $user->setLastLoginDate(date('Y-m-d H:i:s'));
        $this->userDao->createOrUpdate($user);
        $session = App::getSession();
        $session->isLogged = true;
        $session->user = $user;
        return App::isLoggedUser();
    }

    public function logout() {
        $session = App::getSession();
        $session->isLogged = false;
    }


}