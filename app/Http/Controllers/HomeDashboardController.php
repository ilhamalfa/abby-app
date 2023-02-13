<?php

namespace App\Http\Controllers;

use App\Models\HomeCarouselBanner;
use Illuminate\Http\Request;

class HomeDashboardController extends Controller
{
    public function index(){
        $carousels = HomeCarouselBanner::all();

        return view('admin.pages.home.home', [
            'carousels' => $carousels
        ]);
    }

    public function storeCarousel(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'link' => 'required|unique:home_carousel_banners',
        ]);

        $validate['image'] = $request->file('image')->store('carousel/image');

        HomeCarouselBanner::create($validate);

        return redirect('/dashboard/home');
    }

    public function updateCarousel($id, Request $request){
        $data = HomeCarouselBanner::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
                'name' => 'required',
                'image' => 'image',
                'link' => 'required',
            ]);
            
            unlink('storage/'.$request->oldImage);

            $validate['image'] = $request->file('image')->store('carousel/image');

            $data->update($validate);
        }else{
            $validate = $request->validate([
                'name' => 'required',
                'link' => 'required',
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/home');
    }

    public function deleteCarousel($id){
        $data = HomeCarouselBanner::find($id);

        unlink('storage/'.$data->image);

        $data->delete();

        return redirect('/dashboard/home');
    }
}
