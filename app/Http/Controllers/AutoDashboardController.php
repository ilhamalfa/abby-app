<?php

namespace App\Http\Controllers;

use App\Models\AutoBannerModel;
use App\Models\AutoBrandsModel;
use App\Models\AutoHighlightModel;
use App\Models\AutoServiceModel;
use Illuminate\Http\Request;

class AutoDashboardController extends Controller
{
    public function index(){
        $banner = AutoBannerModel::first();
        $service1 = AutoServiceModel::where('kolom', 1)->first();
        $service2 = AutoServiceModel::where('kolom', 2)->first();
        $highlights = AutoHighlightModel::all();
        $brands = AutoBrandsModel::all();

        return view('admin.pages.auto.auto', [
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

    //     $validate['image'] = $request->file('image')->store('Auto/Banner');

    //     AutoBannerModel::create($validate);

    //     return redirect('/dashboard/auto');
    // }

    public function updateBanner($id, Request $request){
        $data = AutoBannerModel::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
                'name' => 'required',
                'image' => 'image',
            ]);
            
            unlink('storage/'.$request->oldImage);

            $validate['image'] = $request->file('image')->store('Auto/Banner');

            $data->update($validate);
        }else{
            $validate = $request->validate([
                'name' => 'required',
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/auto');
    }

    // public function deleteBanner($id){
    //     $data = AutoBannerModel::find($id);

    //     unlink('storage/'.$data->image);

    //     $data->delete();

    //     return redirect('/dashboard/auto');
    // }

    // Service
    // public function storeService(Request $request){

    //     $validate = $request->validate([
    //         'image' => 'required|image',
    //         'name' => 'required',
    //         'title' => 'required',
    //         'text' => 'required'
    //     ]);

    //     $validate['image'] = $request->file('image')->store('Auto/Service');
    //     $validate['kolom'] = 1;

    //     AutoServiceModel::create($validate);

    //     return redirect('/dashboard/auto');
    // }

    public function updateService($id, Request $request){
        $data = AutoServiceModel::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
                'image' => 'required|image',
                'name' => 'required',
                'title' => 'required',
                'text' => 'required'
            ]);
            
            unlink('storage/'.$request->oldImage);

            $validate['image'] = $request->file('image')->store('Auto/Service');

            $data->update($validate);
        }else{
            $validate = $request->validate([
                'name' => 'required',
                'title' => 'required',
                'text' => 'required'
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/auto');
    }

    public function deleteService($id){
        $data = AutoServiceModel::find($id);

        unlink('storage/'.$data->image);

        $data->delete();

        return redirect('/dashboard/auto');
    }

    // Highlight
    public function storeHighlight(Request $request){

        $validate = $request->validate([
            'image' => 'required|image',
            'name' => 'required',
        ]);

        $validate['image'] = $request->file('image')->store('Auto/Highlight');

        AutoHighlightModel::create($validate);

        return redirect('/dashboard/auto');
    }

    public function updateHighlight($id, Request $request){
        $data = AutoHighlightModel::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
                'image' => 'required|image',
                'name' => 'required',
            ]);
            
            unlink('storage/'.$request->oldImage);

            $validate['image'] = $request->file('image')->store('Auto/Highlight');

            $data->update($validate);
        }else{
            $validate = $request->validate([
                'name' => 'required',
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/auto');
    }

    public function deleteHighlight($id){
        $data = AutoHighlightModel::find($id);

        unlink('storage/'.$data->image);

        $data->delete();

        return redirect('/dashboard/auto');
    }

    // Brand
    public function storeBrand(Request $request){

        $validate = $request->validate([
            'image' => 'required|image',
            'name' => 'required',
        ]);

        $validate['image'] = $request->file('image')->store('Auto/Brand');

        AutoBrandsModel::create($validate);

        return redirect('/dashboard/auto');
    }

    public function updateBrand($id, Request $request){
        $data = AutoBrandsModel::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
                'image' => 'required|image',
                'name' => 'required',
            ]);
            
            unlink('storage/'.$request->oldImage);

            $validate['image'] = $request->file('image')->store('Auto/Brand');

            $data->update($validate);
        }else{
            $validate = $request->validate([
                'name' => 'required',
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/auto');
    }

    public function deleteBrand($id){
        $data = AutoBrandsModel::find($id);

        unlink('storage/'.$data->image);

        $data->delete();

        return redirect('/dashboard/auto');
    }
}
