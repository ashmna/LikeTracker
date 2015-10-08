<?php


namespace LT\Services\Impl;


use LT\Services\UserService;
use LT\Helpers\App;
use LT\Helpers\Notification;

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

    public function login($username, $password, $rememberMe = false) {
        //TODO: Ashot implement user login rememberMe
        $user = $this->userDao->getUserByUsername($username);
        if(isset($user)) {
            if($user->isPasswordEqual($password)) {
                $session = App::getSession();
                $session->isLogged = true;
            } else {
                Notification::error(2, '');
                //TODO: Armen Notification text for not correct password
            }
        } else {
            Notification::error(1, '');
            //TODO: Armen Notification text for invalid username
        }
        return App::isLoggedUser();
    }

    public function logout() {
        $session = App::getSession();
        $session->isLogged = false;
    }

    public function register(array $userData) {
        //$this->userDao->getUserByUsername($userData['username']);
        //TODO: Ashot userData validation and insert/update payman karochi
        if(!$userData['userId']) {
            $userId = $this->userDao->createUser($userData);
        } else {
            return $this->userDao->updateUser($userData);
        }

        Notification::success(3, '_(Registered Successfully)');
        return $userId;
    }

    public function getUsersList(array $filter) {
        return $this->userDao->getUsersList($filter);
    }

    public function delete($userId) {
        return $this->userDao->deleteUserById($userId);
    }


}