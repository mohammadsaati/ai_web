<?php

namespace App\Class;

class Theme
{
    public function renderStyle() : string
    {
        $styles = config('theme.css.global');
        $temp = '';

        foreach ($styles as $style)
        {
            $src = asset($style);
            $temp .= sprintf('<link rel="stylesheet" href="%s"/>' , $src);

        }

        return $temp;
    }

    public function renderJs() : string
    {
        $scripts = config('theme.js.global');
        $temp = '';

        foreach ($scripts as $script)
        {
            $src = asset($script);
            $temp .= sprintf('<script type="text/javascript" src="%s"></script>' , $src);

        }


        return $temp;
    }

    public function test()
    {
        return 'test';
    }
}
