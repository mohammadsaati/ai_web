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
            'assets/vendor/tiny-slider/tiny-slider.css',
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
            'assets/js/jquery3.7.1.js',
            'assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js',
            'assets/vendor/tiny-slider/tiny-slider-rtl.js',
            'assets/vendor/sticky-js/sticky.min.js',
            'assets/vendor/plyr/plyr.js',
            'assets/vendor/tiny-slider/tiny-slider.js',
            'assets/js/functions.js',
            'assets/vendor/sweet-alert/sweet-alert.js',
        ] ,

        'link'  =>  [
            'https://www.googletagmanager.com/gtag/js?id=G-XZ4W34ZJ0L'
        ] ,
    ] ,

];
