<?php

 namespace App\Services;

 use App\Models\Post;
 use App\Services\Service;

 class HomeService extends Service
{

 	public function model()
	{

	}

     public function homeData() : array
     {
         $data = [];
         $data["title"] = "قالب وب سایت | اپلیکیشن |";
         $data["posts"] = Post::query()->take(6)->get();

         return $data;
     }
 }
