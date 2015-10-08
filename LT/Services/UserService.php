<?php

namespace LT\Services;


interface UserService
{
    function login($username, $password, $rememberMe = false);
    function logout();
    function register(array $userData);
    function getUsersList(array $filter);
    function delete($userId);
}