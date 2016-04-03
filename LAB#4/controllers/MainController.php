<?php

class MainController {

    public static function index( $params=array() ) {
        $github = Github::result(3);

        return miranda()->make('index', array(
            'github' => $github,
        ));
    }

}
