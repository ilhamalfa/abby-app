<?php

namespace App\Http\Controllers;

use App\Models\FooterAddress;
use App\Models\FooterContactCar;
use App\Models\FooterContactDetailling;
use App\Models\FooterSocmed;
use Illuminate\Http\Request;

class FooterDashboardController extends Controller
{
    public function index(){
        $address = FooterAddress::find(1);
        $socmeds = FooterSocmed::all();
        $contactcar = FooterContactCar::find(1);
        $contactdetailing = FooterContactDetailling::find(1);
    
        return view('admin.pages.footer.footer', [
            'address' => $address,
            'socmeds' => $socmeds,
            'contactcar' => $contactcar,
            'contactdetailing' => $contactdetailing
        ]);
    }

    // Update Address
    public function updateAddress($id, Request $request){
        $data = FooterAddress::find($id);

        $data->update([
            'text' => $request->text
        ]);

        return redirect('/dashboard/footer');
    }

    // Add Socmeds
    public function addSocmeds(Request $request){
        $validate = $request->validate([
            'link' => 'unique:footer_socmeds|required',
            'category' => 'required',
        ]);

        $validate['is_active'] = true;

        FooterSocmed::create($validate);

        return redirect('/dashboard/footer');
    }

    // update Socmeds
    public function updateSocmeds($id, Request $request){
        $data = FooterSocmed::find($id);

        $validate = $request->validate([
            'link' => 'unique:footer_socmeds|required',
            'category' => 'required',
        ]);

        $data->update($validate);

        return redirect('/dashboard/footer');
    }

    // update Socmeds
    public function activateSocmeds($id){
        $data = FooterSocmed::find($id);

        if($data->is_active == true){
            $data->update([
                'is_active' => false
            ]);
        }else{
            $data->update([
                'is_active' => true
            ]);
        }

        return redirect('/dashboard/footer');
    }

    // Delete Socmeds
    public function deleteSocmeds($id){
        $data = FooterSocmed::find($id);

        $data->delete();

        return redirect('/dashboard/footer');
    }

    // Update Contact car
    public function updateContactCar($id, Request $request){
        $data = FooterContactCar::find($id);

        $data->update([
            'phone' => $request->phone,
            'text' => $request->text
        ]);

        return redirect('/dashboard/footer');
    }

    // Update Contact Auto
    public function updateContactAuto($id, Request $request){
        $data = FooterContactDetailling::find($id);

        $data->update([
            'phone' => $request->phone,
            'text' => $request->text
        ]);

        return redirect('/dashboard/footer');
    }
}
