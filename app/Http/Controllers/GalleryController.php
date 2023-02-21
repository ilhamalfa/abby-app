<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::all();
    
        return view('admin.pages.gallery.gallery', [
            'galleries' => $galleries,
        ]);
    }

    public function storeGallery(Request $request){

        $validate = $request->validate([
            'image' => 'required|image',
            'category' => 'required',
        ]);

        $validate['image'] = $request->file('image')->store('Gallery/'.$request->category);

        Gallery::create($validate);

        return redirect('/dashboard/gallery');
    }

    public function updateGallery($id, Request $request){
        $data = Gallery::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
                'image' => 'required|image',
                'category' => 'required',
            ]);
            
            unlink('storage/'.$request->oldImage);

            $validate['image'] = $request->file('image')->store('Gallery/'.$request->category);

            $data->update($validate);
        }else{
            $validate = $request->validate([
                'category' => 'required',
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/gallery');
    }

    public function deleteGallery($id){
        $data = Gallery::find($id);

        unlink('storage/'.$data->image);

        $data->delete();

        return redirect('/dashboard/gallery');
    }
}
