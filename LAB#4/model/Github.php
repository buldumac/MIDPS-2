<?php

class Github {

    public $git;

    public static function result() {
        if( ! isset( $git ) ) {
            $git = new Github;
        }

        $source = file_get_contents( $git->url() );
        $a = $git->get_list_of_commits( $source );
        echo "<pre>";
        print_r( $a );
    }

    public function url() {
        return 'https://github.com/mowshon/MIDPS/commits/master';
    }

    private function get_list_of_commits( $source ) {
        preg_match_all('#<p class="commit-title ">(.+?)</p>|is="relative-time">(.+?)</time>#si', $source, $matches);
        return $matches;
    }

    private function get_commit_time() {

    }

}