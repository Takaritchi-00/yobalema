<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\Admin;
use App\Models\Location;
use App\Models\Vehicule;
use App\Models\Chauffeur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Charts\AdminChart;
use App\Models\User;

class AdminController extends Controller
{
    public  function index()
    {
        $vehicule = Vehicule::all();
        $chauffeur = Chauffeur::all();
        $location = Location::all();
        $marques = $vehicule->groupBy('marque')->map->count();
        $chart = new AdminChart;
        $chart->labels($marques->keys());
        $chart->dataset('Nombre de véhicules par marque', 'pie', $marques->values())
        ->backgroundColor('blue');
        return view('admin.dashboard', compact('chauffeur', 'vehicule', 'location','chart'));
    }

    public  function login()
    {
        return view('admin.login');
    }

    public  function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password']
        ];
        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->route('admin.dashboard')->with('success', 'Connecter avec succès');
        } else {
            return redirect()->route('admin.login')->with('error', 'Données non valides');
        }
    }

    public  function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Deconnexion réussie');
    }

    public function createUser(Request $request)
    {
        request()->validate(Chauffeur::$rules);
        $chauffeur = new Chauffeur();
        //$chauffeur = Chauffeur::create($request->all());
        $chauffeur->nom = $request->nom;
        $chauffeur->prenom = $request->prenom;
        $chauffeur->email = $request->email;
        $chauffeur->password = bcrypt($request->password);
        $chauffeur->experiences = $request->experiences;
        $chauffeur->numero_permis = $request->numero_permis;
        $chauffeur->date_emission_permis = $request->date_emission_permis;
        $chauffeur->date_expiration_permis = $request->date_expiration_permis;
        $chauffeur->categorie = $request->categorie;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $path = $file->getRealPath();
            $size = $file->getSize();
            $mime = $file->getMimeType();
            $destination = "images";
            $file->move($destination, $file->getClientOriginalName());
            $chauffeur->photo = $filename;
        } else {
            return $request;
            $chauffeur->photo = '';
        }
        if ($request->hasFile('contrat')) {
            $file = $request->file('contrat');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $path = $file->getRealPath();
            $size = $file->getSize();
            $mime = $file->getMimeType();
            $destination = "documents";
            $file->move($destination, $filename);
            $chauffeur->contrat = $filename;
        } else {
            return $request;
            $chauffeur->contrat = '';
        }
        $chauffeur->save();

        return redirect()->route('chauffeurs.index')
            ->with('success', 'Chauffeur created successfully.');
    }


    public function liste()
    {
        $location = Location::all();
        $vehicule = Vehicule::all();
        return view('admin.location', compact('vehicule', 'location'));
    }
}
