<?php

namespace App\Services;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Post;
use App\Models\Section;
use App\Services\Service;

class HomeService extends Service
{

    public function homeData(): array
    {
        return [
            'resentPosts'      => Post::query()->take(4)->get(),
        ];
    }


    public function blogData(): array
    {
        return [
            'banners'     => Banner::query()->take(5)->get(),
            'sections'    => Section::query()->with(['posts' => function ($query) {
                $query->take(10);
            }])->get(),
            'resentPosts' => Post::query()->take(8)->get(),
            'randomCats'  => Category::query()->inRandomOrder()->take(5)->get(),
        ];
    }
}
