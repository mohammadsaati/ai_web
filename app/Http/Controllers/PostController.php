<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    const BASIC    =   'post.';
    const SHOW    =    self::BASIC.'show';

    public function __construct(
     public readonly PostService $service
    )
    {}


    public function show(Post $post)
    {
        $data['title']          = $post->title;
        $data['post']           = $post;
        $data['relatedPosts']   = $this->service->relatedPosts($post)->get();



        return view(self::SHOW , compact('data'));
    }

}
