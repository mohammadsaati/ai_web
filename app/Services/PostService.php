<?php

 namespace App\Services;

 use App\Models\Post;
 use App\Services\Service;

 class PostService extends Service
{

 	public function model()
	{
        $this->model = Post::query();
	}

     public function show_data(Post $post) : array
     {
         $data["title"] = $post->title;
         $data["post"] = $post;

         return $data;
     }
 }
