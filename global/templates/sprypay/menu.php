<?php
namespace {

    use LT\Helpers\App;
    use LT\Helpers\Defines;

    $menu = [];
    if(App::isLoggedUser()) {
        $menu = [
//            'index',
            'task-list',
            'my-tasks',
            'terms-and-conditions',
        ];
    } else {
        $menu = [
            'index',
            'terms-and-conditions',
        ];
    }
//        switch(App::getUserRole()) {
//            case Defines::ROLE_ADMIN:
//            default:
//                $menu = [
//                    'index',
//                    'rating',
//                    'task-list',
//                    'my-tasks',
//                    'my-tasks-ex1',
//                    'my-tasks-ex2',
//                    'my-tasks-new',
//                    'terms-and-conditions',
//                ];
//                break;
//        }
//    }
    return $menu;
}