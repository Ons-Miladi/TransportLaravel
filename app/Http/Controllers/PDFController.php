<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use PDF;
use App\Mission;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function getPDF($id){
        $mission=Mission::find($id);
        $pdf=PDF::loadView('test',compact('mission'));
        return $pdf->stream('test'); 
    }
}
