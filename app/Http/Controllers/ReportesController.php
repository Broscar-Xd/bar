<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bar;
use App\Buzon;
use App\Campus;
use App\Menu;
use App\Preferencias;
use App\Snack;


class ReportesController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }
    public function index()
    {
        return view('reportes.index');
    }

    
    public function prebar(Request $request)
    {   
        $bares= Bar::all()->sortBy('nombre');
        $menus=Menu::join('preferencias', 'menus.id', '=', 'preferencias.menu_id')
        ->join('bars', 'bars.id', '=' , 'menus.bar_id')
        ->select('bars.nombre as nombreBAR','menus.nombre','preferencias.observacion','preferencias.fecha')
        ->where('menus.bar_id','=',$request->select)
        ->get();

        return view('reportes.prebar',compact('bares','menus'));
       
    }
}