<?php
namespace {

    use LT\Helpers\App;
    $page = App::getCurrentPage();
    if(!App::isLoggedUser()) {
        if(!in_array($page,['index', 'terms-and-conditions'])) {
            App::setCurrentPage('index');
        }
        //App::setCurrentPage('login');
    } else {
        if(!in_array($page,['task-list', 'my-tasks', 'terms-and-conditions'])) {
            App::setCurrentPage('task-list');
        }
        // $currentPage = App::getCurrentPage();
        // if not exist page
        // App::setCurrentPage('404');
    }

}