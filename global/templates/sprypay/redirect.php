<?php
namespace {

    use LT\Helpers\App;
    $page = App::getCurrentPage();
    if(!App::isLoggedUser()) {
        if(!in_array($page,['index', 'rating', 'terms-and-conditions'])) {
            App::setCurrentPage('index');
        }
        //App::setCurrentPage('login');
    } else {
        // $currentPage = App::getCurrentPage();
        // if not exist page
        // App::setCurrentPage('404');
    }

}