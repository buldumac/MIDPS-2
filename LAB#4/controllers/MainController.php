<?php

class MainController {

    public static function index( $params=array() ) {

        return miranda()->make('index', array(
            // Githun account news.
            'github' => Github::result( 4 ),
            'articles'  =>  Articles::get_all_articles(),
        ));
    }

    public static function new_article() {
        Articles::add_new_article( $_POST['content'] );
    }

}
