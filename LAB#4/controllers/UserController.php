<?php

use \Twig_Loader_Filesystem;
use \Twig_Environment;

class UserController {

    public static function index() {
        return 'User Page!';
    }
    
    public static function login() {
        return 'Page login!';
    }
    
}
