<?php

if(!function_exists("getSvg"))
{
    function getSvg($name , $folder , $paht = "assets/media/svg"): string
    {
        return asset($paht."/".$folder."/".$name.".svg");
    }
}

if (!function_exists("panel_image"))
{
    function panel_image(string $image , string $folder) : string
    {
        $panel_address = env("PANEL_ADDRESS" , "http://localhost:4000");
        return $panel_address."/storage/$folder/$image";
    }

}
