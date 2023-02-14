<?php

namespace App\Http\Controllers;

use App\Models\HomeCarouselBanner;
use App\Models\HomeHighlight;
use App\Models\HomeService;
use App\Models\HomeValue;
use Illuminate\Http\Request;

class HomeDashboardController extends Controller
{
    public function index(){
        $carousels = HomeCarouselBanner::all();
        $services = HomeService::all();
        $values = HomeValue::all();
        $highlights = HomeHighlight::all();

        return view('admin.pages.home.home', [
            'carousels' => $carousels,
            'services' => $services,
            'values' => $values,
            'highlights' => $highlights,
        ]);
    }

    // Carousel
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

    // Service
    public function storeService(Request $request){
        $validate = $request->validate([
            'image' => 'required|image',
        ]);
    
        $validate['image'] = $request->file('image')->store('service/image');
    
        HomeService::create($validate);
    
        return redirect('/dashboard/home');
    }

    public function updateService($id, Request $request){
        $data = HomeService::find($id);
        
        $validate = $request->validate([
            'image' => 'required|image',
        ]);
        
        unlink('storage/'. $data->image);

        $validate['image'] = $request->file('image')->store('service/image');

        $data->update($validate);

        return redirect('/dashboard/home');
    }

    public function deleteService($id){
        $data = HomeService::find($id);

        unlink('storage/'.$data->image);

        $data->delete();

        return redirect('/dashboard/home');
    }

    // Value
    public function storeValue(Request $request){
        $validate = $request->validate([
            'image' => 'required|image',
            'title' => 'required',
            'text' => 'required',
        ]);

        $validate['image'] = $request->file('image')->store('value/image');

        HomeValue::create($validate);

        return redirect('/dashboard/home');
    }

    public function updateValue($id, Request $request){
        $data = HomeValue::find($id);

        if(isset($request->image)){
            $validate = $request->validate([
            'image' => 'image',
            'title' => 'required',
            'text' => 'required',
            ]);
            
            unlink('storage/'.$data->image);

            $validate['image'] = $request->file('image')->store('value/image');

            $data->update($validate);
        }else{
            $validate = $request->validate([
            'title' => 'required',
            'text' => 'required',
            ]);

            $data->update($validate);
        }

        return redirect('/dashboard/home');
    }

    public function deleteValue($id){
        $data = HomeValue::find($id);

        unlink('storage/'.$data->image);

        $data->delete();

        return redirect('/dashboard/home');
    }


    // Highlight
    public function storeHighlight(Request $request){
        $validate = $request->validate([
            'image' => 'required|image',
        ]);
    
        $validate['image'] = $request->file('image')->store('highlight/image');
    
        HomeHighlight::create($validate);
    
        return redirect('/dashboard/home');
    }

    public function updateHighlight($id, Request $request){
        $data = HomeHighlight::find($id);
        
        $validate = $request->validate([
            'image' => 'required|image',
        ]);
        
        unlink('storage/'. $data->image);

        $validate['image'] = $request->file('image')->store('highlight/image');

        $data->update($validate);

        return redirect('/dashboard/home');
    }

    public function deleteHighlight($id){
        $data = HomeHighlight::find($id);

        unlink('storage/'.$data->image);

        $data->delete();

        return redirect('/dashboard/home');
    }
}

