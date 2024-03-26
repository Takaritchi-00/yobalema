<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

/**
 * Class ChauffeurController
 * @package App\Http\Controllers
 */
class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chauffeurs = Chauffeur::paginate();

        return view('admin.chauffeur.index', compact('chauffeurs'))
            ->with('i', (request()->input('page', 1) - 1) * $chauffeurs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $chauffeur = new Chauffeur();
        return view('admin.chauffeur.create', compact('chauffeur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Chauffeur::$rules);
        $chauffeur = new Chauffeur();
        //$chauffeur = Chauffeur::create($request->all());
        $chauffeur->nom = $request->nom;
        $chauffeur->prenom = $request->prenom;
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
            $chauffeur->photo=$filename;
            }else{
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
                $file->move($destination,$filename);
                $chauffeur->contrat=$filename;
                }else{
                    return $request;
                    $chauffeur->contrat = '';
                }
                $chauffeur->save();

        return redirect()->route('chauffeurs.index')
            ->with('success', 'Chauffeur created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chauffeur = Chauffeur::find($id);

        return view('admin.chauffeur.show', compact('chauffeur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chauffeur = Chauffeur::find($id);

        return view('admin.chauffeur.edit', compact('chauffeur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Chauffeur $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Chauffeur::$rules);
        $chauffeur = Chauffeur::find($id);
        //$chauffeur = Chauffeur::create($request->all());
        $chauffeur->nom = $request->nom;
        $chauffeur->prenom = $request->prenom;
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
            $chauffeur->photo=$filename;
            }else{
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
                $file->move($destination,$filename);
                $chauffeur->contrat=$filename;
                }else{
                    return $request;
                    $chauffeur->contrat = '';
                }
                $chauffeur->update();

        return redirect()->route('chauffeurs.index')
            ->with('success', 'Chauffeur updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chauffeur = Chauffeur::find($id)->delete();

        return redirect()->route('chauffeurs.index')
            ->with('success', 'Chauffeur deleted successfully');
    }
}
