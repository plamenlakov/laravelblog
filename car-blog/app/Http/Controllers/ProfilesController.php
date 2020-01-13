<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);

        return view('profiles.index',[
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));

    }

    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'bio' => 'required',
            'image' => '',
        ]);

//        $user->profile->update($data);
//
//        return redirect("/profile/{$user -> id}");


        if (request('image')){
            $imagePath = request('image')->store('uploads', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(250,250);
            $image->mask('storage/star.png');
            $image->save();

            $user->profile->update(array_merge(
                $data,
                ['image' => $imagePath]
            ));
        }
        else{
            $user->profile->update($data);
        }

        return redirect("/profile/{$user -> id}");
    }

    public function export() {
        redirect()->back();
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
