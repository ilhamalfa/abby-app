<?php

namespace App\Http\Controllers;

use App\Models\CarBannerModel;
use App\Models\CarBrandsModel;
use App\Models\CarHighlightModel;
use App\Models\CarServiceModel;
use Illuminate\Http\Request;

class AudioDashboardController extends Controller
{
    public function index(){
        $banner = CarBannerModel::first();
        $service1 = CarServiceModel::where('kolom', 1)->first();
        $service2 = CarServiceModel::where('kolom', 2)->first();
        $highlights = CarHighlightModel::all();
        $brands = CarBrandsModel::all();

        return view('admin.pages.audio.audio', [
            'banner' => $banner,
            'service1' => $service1,
            'service2' => $service2,
            'highlights' => $highlights,
            'brands' => $brands,
        ]);
    }

    // Banner
    // public function storeBanner(Request $request){

    //     $validate = $request->validate([
    //         'name' => 'required',
    //         'image' => 'required|image',
    //     ]);

    //     $validate['image'] = $request->file('image')->store('Audio/Banner');

    //     CarBannerModel::create($validate);

    //     return redirect('/dashboard/audio');
    // }

    public function updateBanner($id, Request $request){
        $data = CarBannerModel::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
                'name' => 'required',
                'image' => 'image',
            ]);
            
            unlink('storage/'.$request->oldImage);

            $validate['image'] = $request->file('image')->store('Audio/Banner');

            $data->update($validate);
        }else{
            $validate = $request->validate([
                'name' => 'required',
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/audio');
    }

    // public function deleteBanner($id){
    //     $data = CarBannerModel::find($id);

    //     unlink('storage/'.$data->image);

    //     $data->delete();

    //     return redirect('/dashboard/audio');
    // }

    // Service
    // public function storeService(Request $request){

    //     $validate = $request->validate([
    //         'image' => 'required|image',
    //         'name' => 'required',
    //         'title' => 'required',
    //         'text' => 'required'
    //     ]);

    //     $validate['image'] = $request->file('image')->store('Audio/Service');
    //     $validate['kolom'] = 1;

    //     CarServiceModel::create($validate);

    //     return redirect('/dashboard/audio');
    // }

    public function updateService($id, Request $request){
        $data = CarServiceModel::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
                'image' => 'required|image',
                'name' => 'required',
                'title' => 'required',
                'text' => 'required'
            ]);
            
            unlink('storage/'.$request->oldImage);

            $validate['image'] = $request->file('image')->store('Audio/Service');

            $data->update($validate);
        }else{
            $validate = $request->validate([
                'name' => 'required',
                'title' => 'required',
                'text' => 'required'
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/audio');
    }

    public function deleteService($id){
        $data = CarServiceModel::find($id);

        unlink('storage/'.$data->image);

        $data->delete();

        return redirect('/dashboard/audio');
    }

    // Highlight
    public function storeHighlight(Request $request){

        $validate = $request->validate([
            'image' => 'required|image',
            'name' => 'required',
        ]);

        $validate['image'] = $request->file('image')->store('Audio/Highlight');

        CarHighlightModel::create($validate);

        return redirect('/dashboard/audio');
    }

    public function updateHighlight($id, Request $request){
        $data = CarHighlightModel::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
                'image' => 'required|image',
                'name' => 'required',
            ]);
            
            unlink('storage/'.$request->oldImage);

            $validate['image'] = $request->file('image')->store('Audio/Highlight');

            $data->update($validate);
        }else{
            $validate = $request->validate([
                'name' => 'required',
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/audio');
    }

    public function deleteHighlight($id){
        $data = CarHighlightModel::find($id);

        unlink('storage/'.$data->image);

        $data->delete();

        return redirect('/dashboard/audio');
    }

    // Brand
    public function storeBrand(Request $request){

        $validate = $request->validate([
            'image' => 'required|image',
            'name' => 'required',
        ]);

        $validate['image'] = $request->file('image')->store('Audio/Brand');

        CarBrandsModel::create($validate);

        return redirect('/dashboard/audio');
    }

    public function updateBrand($id, Request $request){
        $data = CarBrandsModel::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
                'image' => 'required|image',
                'name' => 'required',
            ]);
            
            unlink('storage/'.$request->oldImage);

            $validate['image'] = $request->file('image')->store('Audio/Brand');

            $data->update($validate);
        }else{
            $validate = $request->validate([
                'name' => 'required',
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/audio');
    }

    public function deleteBrand($id){
        $data = CarBrandsModel::find($id);

        unlink('storage/'.$data->image);

        $data->delete();

        return redirect('/dashboard/audio');
    }
}