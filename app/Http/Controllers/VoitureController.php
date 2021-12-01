<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Voiture;
use Illuminate\Http\Request;
use DB;

class VoitureController extends Controller
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
            $voitures = Voiture::latest()->paginate($perPage);
        } else {
            $voitures = Voiture::latest()->paginate($perPage);
        }

        return view('voiture.index', compact('voitures'));
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
        if(!isset($request->matricule)||!isset($request->marque)||!isset($request->couleur))
        {     
           $voitures=DB::table('voitures')->get();
          
           $error='eurreur';
           return view('voiture.index',compact('voitures'))
           ->with(compact('error'));
       }
        $requestData = $request->all();
        
        Voiture::create($requestData);
        

        return redirect('/voiture')->with('flash_message', 'Voiture added!');
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
       // $voiture = Voiture::findOrFail($id);

       Voiture::destroy($id);

       return redirect('/voiture')->with('flash_message', 'Voiture deleted!');
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
       
       
       
        $voiture = Voiture::findOrFail($id);

        return view('voiture.edit', compact('voiture'));
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
        if(!isset($request->matricule)||!isset($request->marque)||!isset($request->marque)  )
        {     
           $voitures=DB::table('voitures')->get();
          
           $error='eurreur';
           $voiture = voiture::findOrFail($id);
           return view('voiture.edit',compact('voiture'))
           ->with(compact('error'))
           ;
       }
       
        $requestData = $request->all();
        
        $voiture= Voiture::findOrFail($id);
        $voiture->update($requestData);

        return redirect('/voiture')->with('flash_message', 'Voiture updated!');
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
        Voiture::destroy($id);

        return redirect('/voiture')->with('flash_message', 'Voiture deleted!');
    }
}
