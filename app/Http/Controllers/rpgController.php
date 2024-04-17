<?php

namespace App\Http\Controllers;

use App\Models\rpg;
use Illuminate\Http\Request;

class rpgController extends Controller
{
    public function rpg()
    {
        $rpg = rpg::all();
        //dd($rpg);
        return view('rpg', ['rpg'=> $rpg]);
    }
    
    public function create()
    {
        return view('create');

    }

    public function store(Request $request)
    {
        $rpg = new rpg;
 
        $rpg->nome = $request->nome;
        $rpg->empresa = $request->empresa;
        $rpg->ano_criação = $request->ano_criação;
        $rpg->valor = $request->valor;
        $rpg->save();

    
        return redirect()->route('rpgs-store-
        ]');

    }
}

