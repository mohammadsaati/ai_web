<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Web site main logo in dark mode and light mode
    */

    'light_logo'    =>  'assets/images/ai-logo-light.png' ,
    'dark_logo'     =>  'assets/images/ai-logo-dark.svg' ,

    /*
   |--------------------------------------------------------------------------
   | Style
   |--------------------------------------------------------------------------
   |
   | This value includes all of your css files that use in all off your
   | application.
   */
    'css' => [
        'global'    =>  [
            'assets/vendor/font-awesome/css/all.min.css',
            'assets/vendor/bootstrap-icons/bootstrap-icons.css',
            'assets/vendor/tiny-slider/tiny-slider.css',
            'assets/vendor/plyr/plyr.css',
            'assets/css/style-rtl.css',
            'assets/css/style.css',
        ] ,

        'vendor'    =>  [

        ] ,
    ] ,

    /*
     |--------------------------------------------------------------------------
     | Java scripts
     |--------------------------------------------------------------------------
     |
     | This value includes all of your JS files that use in all off your
     | application.
     */
    'js' => [
        'global'    =>  [
            'assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js',
            'assets/vendor/tiny-slider/tiny-slider-rtl.js',
            'assets/vendor/sticky-js/sticky.min.js',
            'assets/vendor/plyr/plyr.js',
            'assets/js/functions.js',
        ] ,

        'link'  =>  [
            'https://files-de.rtl-theme.com/jsdemos/79df7d11747f944da7628dfc1c76f709661cfe8f.js?pid=254067'
        ] ,
    ] ,

];
