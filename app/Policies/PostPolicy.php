<?php

namespace App\Policies;

use App\Administrator;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(Administrator $user, Post $post)
    {
        return $user->id == $post->user_id;
    }

    public function  delete(Administrator $user, Post $post)
    {
        return $user->id == $post->user_id;
    }
}
