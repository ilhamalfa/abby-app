<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profile = Profile::find(1);
    
        return view('admin.pages.profile.profile', [
            'profile' => $profile,
        ]);
    }

    public function updateProfile($id, Request $request){
        $data = Profile::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
                'title' => 'required',
                'body' => 'required',
                'image' => 'required|image',
            ]);
            
            unlink('storage/'.$request->oldImage);

            $validate['image'] = $request->file('image')->store('Profile');

            $data->update($validate);
        }else{
            $validate = $request->validate([
                'category' => 'required',
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/profile');
    }
}
