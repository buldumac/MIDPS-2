<?php

class MainController {

    public static function index( $params=array() ) {

        return miranda()->make('index', array(
            // Githun account news.
            'github' => Github::result( 4 ),
        ));
    }

}
