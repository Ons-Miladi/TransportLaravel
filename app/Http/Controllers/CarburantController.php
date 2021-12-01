<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Carburant;
use Illuminate\Http\Request;
use DB;

class CarburantController extends Controller
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
            $carburants = Carburant::latest()->paginate($perPage);
        } else {
            $carburants = Carburant::latest()->paginate($perPage);
        }

        return view('carburant.index', compact('carburants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('carburant.create');
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
        
        $requestData = $request->all();
        $prix=$request->prix;
        $type=$request->type;
        $debut=$request->debut;
        $fin=$request->fin;
       
        for($i=$debut; $i<=$fin; $i++)
        {
     
        

        if(!isset($request->debut)||!isset($request->fin)||!isset($request->type)||!isset($request->prix)||(($request->debut)>($request->fin))){
        
            $carburants=DB::table('carburant')->get();
       
            $error='eurreur';
            return view('carburant.index',compact('carburants'))
            ->with(compact('error'));
        }
        elseif ( DB::table('carburant')->where(('numero'), $i)->doesntExist())
        {
        Carburant::create([
             'numero'=>$i,
             'type'=>$type,
             'prix'=>$prix,
            
             
         ]);

         
         
         
        
    
        
        } 
    }       
         
    


 return redirect('/carburant')->with('flash_message', 'Carburant added!');
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
        Carburant::destroy($id);
        

        return redirect('/carburant')->with('flash_message', 'Carburant deleted!');
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
        $carburant = carburant::findOrFail($id);

        return view('carburant.edit', compact('carburant'));
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
        if(!isset($request->type)||!isset($request->prix))
        {     
           $carburants=DB::table('carburant')->get();
          
           $error='eurreur';
           $carburant = carburant::findOrFail($id);
           return view('carburant.edit',compact('carburant'))
           ->with(compact('error'))
           ;
       }
        $requestData = $request->all();
        
        $carburants = Carburant::findOrFail($id);
        $carburants->update($requestData);

        return redirect('/carburant')->with('flash_message', 'Carburant updated!');
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
        Carburant::destroy($id);

        return redirect('/carburant')->with('flash_message', 'Carburant deleted!');
    }

    
}
