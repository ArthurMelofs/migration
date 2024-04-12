<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class rpgController extends baseController
{
    public function rpg()
    {
      $rpg = rpg::with('sistema')->get();
      return view ('sistema_rpg', compact('rpg')); 
    }

}
