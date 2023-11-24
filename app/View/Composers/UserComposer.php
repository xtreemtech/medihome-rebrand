<?php

namespace App\View\Composers;

use App\Models\Post;
use App\Models\User;
use Illuminate\View\View;

class UserComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('users', User::orderByDesc('created_at')->paginate());
    }
}