<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Vehicule;
use Illuminate\Http\Request;

/**
 * Class VehiculeController
 * @package App\Http\Controllers
 */
class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::paginate();

        return view('admin.vehicule.index', compact('vehicules'))
            ->with('i', (request()->input('page', 1) - 1) * $vehicules->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicule = new Vehicule();
        $chauffeur = Chauffeur::all();
        return view('admin.vehicule.create', compact('vehicule', 'chauffeur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vehicule::$rules);

        $vehicule = new Vehicule();
        $vehicule->type = $request->type;
        $vehicule->date_achat = $request->date_achat;
        $vehicule->kilometres = $request->kilometres;
        $vehicule->matricule = $request->matricule;
        $vehicule->status = $request->status;
        $vehicule->marque = $request->marque;
        $vehicule->suivi_compteur = $request->suivi_compteur;
        $vehicule->chauffeur_id = $request->chauffeur_id;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $path = $file->getRealPath();
            $size = $file->getSize();
            $mime = $file->getMimeType();
            $destination = "images";
            $file->move($destination, $file->getClientOriginalName());
            $vehicule->photo = $filename;
        } else {
            return $request;
            $vehicule->photo = '';
        }
        $vehicule->save();
        return redirect()->route('vehicules.index')
            ->with('success', 'Vehicule created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicule = Vehicule::find($id);

        return view('admin.vehicule.show', compact('vehicule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicule = Vehicule::find($id);
        $chauffeur = Chauffeur::all();

        return view('admin.vehicule.edit', compact('vehicule','chauffeur')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vehicule $vehicule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Vehicule::$rules);

        $vehicule = Vehicule::find($id);
        $vehicule->type = $request->type;
        $vehicule->date_achat = $request->date_achat;
        $vehicule->kilometres = $request->kilometres;
        $vehicule->matricule = $request->matricule;
        $vehicule->status = $request->status;
        $vehicule->marque = $request->marque;
        $vehicule->suivi_compteur = $request->suivi_compteur;
        $vehicule->chauffeur_id = $request->chauffeur_id;
        
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $path = $file->getRealPath();
            $size = $file->getSize();
            $mime = $file->getMimeType();
            $destination = "images";
            $file->move($destination, $file->getClientOriginalName());
            $vehicule->photo = $filename;
        } else {
            return $request;
            $vehicule->photo = '';
        }
        $vehicule->update();

        return redirect()->route('vehicules.index')
            ->with('success', 'Vehicule updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vehicule = Vehicule::find($id)->delete();

        return redirect()->route('vehicules.index')
            ->with('success', 'Vehicule deleted successfully');
    }
}
