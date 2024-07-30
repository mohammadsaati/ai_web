<?php

 namespace App\Services;

 use App\Models\Post;
 use App\Services\Service;

 class PostService extends Service
{

     public function relatedPosts(Post $post)
     {
        return $post->category->posts()
                    ->where('id' , '!=' , $post->id);
     }
}
