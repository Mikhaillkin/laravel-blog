<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;


class ShowController extends Controller
{
    public function __invoke(Category $user)
    {
        return view('admin.user.show', compact('user'));
    }
}
