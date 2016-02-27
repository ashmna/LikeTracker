<?php


namespace LT\Services\Impl;


use LT\Helpers\App;
use LT\Helpers\Defines;
use LT\Models\User;
use LT\Services\UserService;

/**
 * Class UserServiceImpl
 * 
 * @package LT\Services\Impl
 * @Transactional
 */
class UserServiceImpl implements UserService {

    /**
     * @Inject
     * @var \LT\DAO\User
     */
    protected $userDao;


    /**
     * @Inject
     * @var \LT\Services\VkService
     */
    protected $vkService;

    public function login($vkId) {
        $user = new User();
        $user->setVkId($vkId);
        $user->setLastLoginDate(date(Defines::SQL_DATE_TIME_FORMAT));
        //$this->userDao->createOrUpdate($user);
        $session = App::getSession();
        $session->isLogged = true;
        $session->user = $user;
        $session->vkData = $this->vkService->getUser($vkId);
        return App::isLoggedUser();
    }

    public function logout() {
        $session = App::getSession();
        $session->isLogged = false;
    }

    public function getUserData() {
        return $this->userDao->getUserData(App::getUserId());
    }


}