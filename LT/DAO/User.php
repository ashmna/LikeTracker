<?php


namespace LT\DAO;


interface User {
    function createOrUpdate(\LT\Models\User $user);
}