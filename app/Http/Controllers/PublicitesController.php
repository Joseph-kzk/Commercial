<?php

namespace App\Http\Controllers;

use App\Models\publicites;
use Illuminate\Http\Request;

class PublicitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicites = publicites::all();
        return view('publicites', compact('publicites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'entreprise' => 'required',
            'intitule' => 'required',
            'contact' => 'required',
            'support' => 'required',
            'etat' => 'required',
            'montant' => 'required',
            'paiement' => 'required',
            'datedebut' => 'required',
            'datefin' => 'required'
        ]);

        $rubriques = new publicites([
            'entreprise' => $request->get('entreprise'),
            'intitule' => $request->get('intitule'),
            'contact' => $request->get('contact'),
            'support' => $request->get('support'),
            'etat' => $request->get('etat'),
            'montant' => $request->get('montant'),
            'paiement' => $request->get('paiement'),
            'datedebut' => $request->get('datedebut'),
            'datefin' => $request->get('datefin')
        ]);
        $rubriques->save();

        return redirect()->route('publicites.index')->with('success', 'Publicité ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publicites  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicites = publicites::findOrfail($id);
        return view('showpublicite', compact('publicites'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publicites  $publicites
     * @return \Illuminate\Http\Response
     */
    public function edit(publicites $publicites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\publicites  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $publicites = publicites::findOrfail($id);
        $data = $request->all();
        $publicites->update($data);
        return redirect()->back()->with('success', 'Modification(s) effectuée(s) avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publicites  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicites = publicites::findOrfail($id);
        $publicites->delete();
        return redirect()->back()->with('success', 'Publicité supprimé avec succès');
    }
}
