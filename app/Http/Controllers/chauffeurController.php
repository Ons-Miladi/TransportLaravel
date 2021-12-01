<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\chauffeur;
use Illuminate\Http\Request;
use DB;

class chauffeurController extends Controller
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
            $chauffeurs = chauffeur::latest()->paginate($perPage);
        } else {
            $chauffeurs = chauffeur::latest()->paginate($perPage);
        }

        return view('chauffeur.index', compact('chauffeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        return view('.create');
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
        if(!isset($request->nom)||!isset($request->prenom))
     {     
        $chauffeurs=DB::table('chauffeurs')->get();
       
        $error='eurreur';
        return view('chauffeur.index',compact('chauffeurs'))
        ->with(compact('error'));
    }
        $requestData = $request->all();
        
        chauffeur::create($requestData);

        return redirect('/chauffeur')->with('flash_message', 'chauffeur added!');
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
        Chauffeur::destroy($id);

        return redirect('/chauffeur')->with('flash_message', 'Voiture deleted!');
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
        
      
      
      
      
        $chauffeur = chauffeur::findOrFail($id);

       

        return view('chauffeur.edit', compact('chauffeur'));

       
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
    {     if(!isset($request->nom)||!isset($request->prenom))
        {     
           $chauffeurs=DB::table('chauffeurs')->get();
          
           $error='eurreur';
           $chauffeur = chauffeur::findOrFail($id);
           return view('chauffeur.edit',compact('chauffeur'))
           ->with(compact('error'))
           ;
       }
        
        $requestData = $request->all();
        
        $chauffeurs = chauffeur::findOrFail($id);
        $chauffeurs->update($requestData);

        return redirect('/chauffeur')->with('flash_message', 'chauffeur updated!');
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
        
    chauffeur::destroy($id);

    return redirect('/chauffeur')->with('flash_message', 'Voiture deleted!');
    }
}
