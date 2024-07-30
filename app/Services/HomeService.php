<?php

 namespace App\Services;

 use App\Models\Banner;
 use App\Models\Category;
 use App\Models\Post;
 use App\Services\Service;

 class HomeService extends Service
{
     public function homeData() : array
     {
         $data = [];
         $data['banners']           =   Banner::query()->take(5)->get();
         $data['sections']          =   [];
         $data['resentPosts']       =   Post::query()->take(8)->get();
         $data['randomCats']        =   Category::query()->inRandomOrder()->take(5)->get();


         return $data;
     }
}
