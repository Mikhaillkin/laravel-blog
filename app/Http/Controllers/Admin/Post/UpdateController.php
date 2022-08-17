<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class UpdateController extends BaseController
{
        public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();                      //обрабатываем запрос
        $post = $this->service->update($data,$post);        //идет взаимодействие с БД,получаем обновленный post

        return view('admin.post.show', compact('post'));
    }
}
