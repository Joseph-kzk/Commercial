<?php

namespace App\Http\Controllers;

use App\Models\abonnements;
use App\Models\publicites;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'pdf' => abonnements::countPDF(),
            'tabloid' => abonnements::counttabloid(),
            'pub' => publicites::countpub(),
        ];
        
        return view('home',$data);
        
    }

    public function digital()
    {
        $digital = abonnements::where('nature','PDF')->get();
        return view('digital', compact('digital'));
    }

    public function journal()
    {
        $journal = abonnements::where('nature','Tabloïd')->get();
        return view('tabloid', compact('journal'));
    }

}
