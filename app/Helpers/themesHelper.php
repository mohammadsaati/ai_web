<?php

if (!function_exists('theme'))
{
    function theme()
    {
        return new \App\Class\Theme();
    }
}

if (!function_exists('randomBadge'))
{
    function randomBadge()
    {
        $badges = [
            'text-bg-warning' ,
            'text-bg-danger' ,
            'text-bg-info' ,
            'text-bg-success'
        ];

        return $badges[ array_rand($badges) ];

    }
}

if (!function_exists('imagePath'))
{
    function imagePath(string $path) : string
    {
        return env('PANEL_URL').'/storage/'.$path;
    }

}
