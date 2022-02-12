<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to Viet Nam'];
        $pdf = PDF::loadView('myPDF', $data);
        //Nếu muốn hiển thị file pdf theo chiều ngang
        // $pdf->setPaper('A4', 'landscape');
        
        
        //Nếu muốn preview in pdf
        return $pdf->stream('myPDF.pdf');


        //Nếu muốn download file pdf
        // return $pdf->download('myPDF.pdf');
    }
}
