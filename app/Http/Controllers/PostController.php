<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function create()
    {
        $data = [
            'title' => 'sonar bangla',
            'description' => 'ami tumis',
            'status' => 1,
            'user_id' => 1
        ];

        Post::create($data);

    }

    public function order()
    {
        $posts = Post::find(1);
        dd($posts->title);
    }


}
  