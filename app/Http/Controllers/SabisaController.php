<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Models\TabelKomoditas;
use Session, Redirect;
use View;

class SabisaController extends Controller
{
  public function index()
  {
    // get all the nerds
      $sisabisas = TabelKomoditas::all();

    // load the view and pass the nerds
      return View::make('sisabisa.index')
          ->with('sisabisas', $sisabisas);
  }

  public function create()
  {

  }

  public function store()
  {

  }

  public function show()
  {

  }

  public function edit()
  {

  }

  public function update()
  {

  }

  public function destroy()
  {

  }
}
