<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostEloquentRepository implements PostRepositoryInterface
{
    public function __construct(
        public Post $post
    ){}

    public function all()
    {
        return $this->post->all();
    }

}
