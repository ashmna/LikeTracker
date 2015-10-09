<?php
namespace {

    use LT\Helpers\App;
    use LT\Helpers\Defines;

    $menu = [];
//    if(App::isLoggedUser()) {
        switch(App::getUserRole()) {
            case Defines::ROLE_ADMIN:
            case Defines::ROLE_SECRETARY:
            case Defines::ROLE_DOCTOR:
            case Defines::ROLE_CLIENT:
            default:
                $menu = [
                    'index',
                    'rating',
                    'task-list',
                    'my-tasks',
                    'my-tasks-ex1',
                    'my-tasks-ex2',
                    'my-tasks-new',
                    'terms-and-conditions',
                ];
                break;
        }
//    }
    return $menu;
}