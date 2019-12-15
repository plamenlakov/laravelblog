<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $thumbnail = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $thumbnail->save();

        auth()->user()->posts()->create([
            'title' => $data['title'],
            'text' => $data['text'],
            'image' => $imagePath,
        ]);


        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(\App\Post $post)
    {
        $this->authorize('update', $post);

        return view ('posts.edit', compact('post'));
    }

    public function update(\App\Post $post)
    {
        $data = request()->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => '',
        ]);


        if (request('image')){
            $imagePath = request('image')->store('uploads', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
            $image->save();

            $post->update(array_merge(
                $data,
                ['image' => $imagePath]
            ));
        }
        else{
            $post->update($data);
        }


        return redirect("/post/{$post -> id}");
    }

    public function destroy(\App\Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();
    }
}
