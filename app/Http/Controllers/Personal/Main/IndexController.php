<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;

//use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
//        $current_auth_user = Auth::user();
        $current_auth_user = auth()->user();
//        dd($current_auth_user);
        return view('personal.main.index', compact('current_auth_user'));
    }
}
