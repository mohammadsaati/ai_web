<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private string $post_view_folder = "posts.";
    public function __construct(public PostService $service)
    {
    }

    public function show(Post $post)
    {
        $data = $this->service->show_data($post);

        return view($this->post_view_folder."show" , compact("data"));
    }
}
