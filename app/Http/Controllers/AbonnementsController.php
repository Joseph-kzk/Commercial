<?php

namespace App\Http\Controllers;

use App\Models\abonnements;
use Illuminate\Http\Request;

class AbonnementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $abonnements = abonnements::all();
        return view('abonnements', compact('abonnements'));
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
            'personne' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'nature' => 'required',
            'etat' => 'required',
            'montant' => 'required',
            'statut' => 'required',
            'observation' => 'required',
            'datedebut' => 'required',
            'datefin' => 'required'
        ]);

        $rubriques = new abonnements([
            'entreprise' => $request->get('entreprise'),
            'personne' => $request->get('personne'),
            'contact' => $request->get('contact'),
            'email' => $request->get('email'),
            'nature' => $request->get('nature'),
            'etat' => $request->get('etat'),
            'montant' => $request->get('montant'),
            'statut' => $request->get('statut'),
            'observation' => $request->get('observation'),
            'datedebut' => $request->get('datedebut'),
            'datefin' => $request->get('datefin')
        ]);
        $rubriques->save();

        return redirect()->route('abonnements.index')->with('success', 'Abonné ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\abonnements  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abonnements = abonnements::findOrfail($id);
        return view('showabonnement', compact('abonnements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\abonnements  $abonnements
     * @return \Illuminate\Http\Response
     */
    public function edit(abonnements $abonnements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\abonnements  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $abonnements = abonnements::findOrfail($id);
        $data = $request->all();
        $abonnements->update($data);
        return redirect()->back()->with('success', 'Modification(s) effectuée(s) avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\abonnements  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abonnements = abonnements::findOrfail($id);
        $abonnements->delete();
        return redirect()->back()->with('success', 'Abonné supprimé avec succès');
    }
}
