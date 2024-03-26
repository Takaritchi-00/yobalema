<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Location;
use App\Models\Vehicule;
use App\Models\Chauffeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $location = new Location();
        $vehicule = Vehicule::all();
        return view('locations', compact('location','vehicule'));
    }

    public function store(Request $request)
    {
        request()->validate(Location::$rules);
       
        Location::create([
        'lieu_d' => $request->lieu_d,
        'lieu_a' => $request->lieu_a,
        'date_location' => $request->date_location,
        'heure_debut' => $request->heure_debut,
        'heure_fin' => $request->heure_fin,
        'payer' => $request->payer,
        'vehicule_id' => $request->vehicule_id,
        'user_id' => $request->user_id,  
        ]);

        return redirect()->route('services');
           
    }

    public function paiement($id)
    {
       $location= Location::find($id);
        return view('paiement', compact('location'));
    }


    public function services()
    {
        $vehicules = Vehicule::all();
        return view('services', compact('vehicules'));
    }

    public function locations()
    {
        $location = new Location();
        $vehicule = Vehicule::all();
        return view('locations', compact('vehicule'));
    }

    public function louer()
    {
        $location = Location::all();
        return view('locations', compact('location'));
    }

    public function lesdetails($id)
    {
        $vehicule = Vehicule::find($id);
        $location = new Location();
        return view('lesdetails', compact('vehicule','location')); 
    }

    public function liste()
    {
        $location = Location::all();
        $vehicule = Vehicule::all();
        return view('liste', compact('vehicule','location'));
    }

    public function paidUpdate($id){
        {
            $location = Location::find($id);
    
            $location->update([
                'payer' => 'Valider'
            ]);
    
            return redirect()->route('liste')->with('status', 'Location payé avec succès');
        }
    }
}
