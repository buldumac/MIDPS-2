<?php

class Heart {
    
    public function __construct() {
        $this->load_libs( path('system' . DS . 'lib') );
        $this->load_libs( path('model') );
        $this->load_libs( path('controllers') );
        
        Config::load_files();
        
    }
    
    public function load_libs( $path ) {
        # Open the system path with libs
        $allFiles = glob( $path . DS . '*.php' );
        foreach($allFiles as $path) {
            # Include all libs from the folder
            include_once($path);
        }
    }
    
    
}
