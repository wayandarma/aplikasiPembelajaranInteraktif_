<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLaporan()
    {
        return view('laporan');
    }
    public function showPetunjuk()
    {
        return view('petunjuk');
    }
    public function showKompetensi()
    {
        return view('kompetensi');
    }
    public function showEvaluasi()
    {
        $headerText = "Evaluasi";
        return view('evaluasi', compact('headerText'))->with(["headerText" => $headerText]);
    }
}
