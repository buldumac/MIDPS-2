<?php

class MainController {

    public static function index( $params=array() ) {
        return miranda()->make('index', array('bingo'=>'azazazaza'));
    }

    public static function git() {
        return Github::result();
    }

}
