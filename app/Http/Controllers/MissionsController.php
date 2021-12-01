<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mission;
use Illuminate\Http\Request;
use DB;
class MissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $missions = Mission::latest()->paginate($perPage);
            
        } else {
            $missions = Mission::latest()->paginate($perPage);
            
            
        }
        $voitures=DB::table('voitures')->get();
        $chauffeurs=DB::table('chauffeurs')->get();
        $carburants=DB::table('carburant')->get();
        
        return view('mission.index', compact('missions'))
        ->with(compact('voitures'))
        ->with(compact('chauffeurs'))
        ->with(compact('carburants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
      
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)

    {
        


        if (!isset($request->id_voiture)||!isset($request->id_chauffeur)||!isset($request->id_d)||!isset($request->id_f)||!isset($request->sujet)||!isset($request->nom_accompagnant)||
        !isset($request->prenom_accompagnant)||!isset($request->destination)||!isset($request->date_debut)||!isset($request->date_fin)||(($request->id_d)>($request->id_f)  ))
        {  
            
            $chauffeurs=DB::table('chauffeurs')->get();
            $carburants=DB::table('carburant')->get();
            $missions=DB::table('missions')->get();
            $voitures=DB::table('voitures')->get();
            $error='eurreur';
            return view ('mission.index', compact('missions'))
            ->with(compact('voitures'))
            ->with(compact('chauffeurs'))
            ->with(compact('carburants'))
            ->with(compact('error'));

        }
        
    else{
           
        $requestData = $request->all();
        
        
        Mission::create($requestData);

        
    }
        
       

        return redirect('/mission')->with('flash_message', 'Mission added!')
        ;
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */


    public function show($id)
    {
        Mission::destroy($id);

        return redirect('/mission')->with('flash_message', 'Mission deleted!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $mission = Mission::findOrFail($id);
        
        return view('mission.edit', compact('mission'));
        if(!isset($request->nom)||!isset($request->prenom))
        {     
           $missions=DB::table('missions')->get();
          
           $error='eurreur';
           return view('mission.edit',compact('mission'))
           ->with(compact('error'));
       }
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        if (!isset($request->id_voiture)||!isset($request->id_chauffeur)||!isset($request->id_d)||!isset($request->id_f)||!isset($request->sujet)||!isset($request->nom_accompagnant)||
        !isset($request->prenom_accompagnant)||!isset($request->destination)||!isset($request->montant_totale)||!isset($request->date_debut)||!isset($request->date_fin))
        {     
    $missions=DB::table('missions')->get();
          
           $error='eurreur';
           $mission = mission::findOrFail($id);
           return view('mission.edit',compact('mission'))
           ->with(compact('error'))
           ;
       }
        
        $requestData = $request->all();
        
        $missions = Mission::findOrFail($id);
        $missions->update($requestData);

        return redirect('/mission')->with('flash_message', 'Mission updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Mission::destroy($id);

        return redirect('/mission')->with('flash_message', 'Mission deleted!');
    }
    public function imprimer(){
        
        return redirect('/getPDF');
    }
   
}
