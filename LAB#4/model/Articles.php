<?php

class Articles {

    public static function get_all_articles() {
        $articles = array();
        $files = glob( Config::get( 'project.articles_files' ) . '*.php' );

        if( count( $files ) ) {
            foreach( $files as $article ) {
                $articles[] = file_get_contents( $article );
            }
        }

        return $articles;
    }

}