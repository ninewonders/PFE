<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RendezVous::select('id','date_rdv','heure_rdv','nom','prenom','num_tel')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date_rdv' => 'required',
            'heure_rdv' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'num_tel' => 'required'
        ]);
        RendezVous::create($request->post());
        return response()->json([
            'message' => 'Rendez Vous created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(RendezVous $RendezVous)
    {
        return response()->json([
            'RendezVous' => $RendezVous
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RendezVous $RendezVous)
    {
        $request->validate([
            'date_rdv' => 'required',
            'heure_rdv' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'num_tel' => 'required'
        ]);
        $RendezVous->fill($request->post())->update();
        return response()->json([
            'message' => 'Rendez Vous updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RendezVous $RendezVous)
    {
        $RendezVous->delete();
        return response()->json([
            'message' => 'Rendez Vous deleted successfully'
        ]);
    }
}
