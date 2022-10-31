<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::paginate(10);
        return view('etudiant.index', ['etudiants' => $etudiants]); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ville = new Ville;
        $villes = $ville->selectVille();
        return view('etudiant.create', ['villes' => $villes]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($_POST); 

        $validate = $request->validate([
            'ville_id'=> 'required',
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'date_of_birth'=> 'required'
        ]);
        

        $etudiant = Etudiant::create([
            'ville_id'=>$request->input('ville_id'),
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'date_of_birth'=>$request->input('date_of_birth')
        ]);

        return redirect(route('etudiant.index', $etudiant));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiant.show', ['etudiant' => $etudiant]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $ville = new Ville;
        $villes = $ville->selectVille();
        return view('etudiant.edit', ['villes'=> $villes, 'etudiant' => $etudiant]);
    }



  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            'ville_id'=>$request->ville_id,
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'date_of_birth'=>$request->date_of_birth
        ]);
        return redirect(route('etudiant.show',  $etudiant->id));
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect(route('etudiant.index'));
    }
}
