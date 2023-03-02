<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(
        public PostRepositoryInterface $post
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return $this->post->all();
    }
}
