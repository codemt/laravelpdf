<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
    //
    public function index(){



        $pdf = PDF::loadView('welcome');
        return $pdf->download('welcome.pdf');
            //return 'Hello';


    }
}
