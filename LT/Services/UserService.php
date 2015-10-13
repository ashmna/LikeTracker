<?php

namespace LT\Services;


interface UserService
{
    function login($vkId);
    function logout();
}