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
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
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
      return View::make('sisabisa.create');
  }

  public function store()
  {
      $rules = array(
          'nama'       => 'required',
          'stok'      => 'required'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('sisabisa/create')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $sisabisa = new TabelKomoditas;
          $sisabisa->Nama       = Input::get('nama');
          $sisabisa->Stok      = Input::get('stok');
          $sisabisa->save();

          // redirect
          Session::flash('message', 'Komoditas Baru Berahasil Ditambahkan');
          return Redirect::to('sisabisa');
      }
    }

  public function show($id)
  {
      $sisabisa = TabelKomoditas::find($id);

      // show the view and pass the nerd to it
      return View::make('sisabisa.index')
          ->with('sisabisa', $sisabisa);
  }

  public function edit($id)
  {
      $sisabisa = TabelKomoditas::find($id);

      // show the edit form and pass the nerd
      return View::make('sisabisa.edit')
          ->with('sisabisa', $sisabisa);
  }

  public function update($id)
  {
      $rules = array(
          'stok'      => 'required'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('sisabisa/' . $id . '/edit')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $sisabisa = TabelKomoditas::find($id);
          $sisabisa->Stok      = Input::get('stok');
          $sisabisa->save();

          // redirect
          Session::flash('message', 'Stok Berhasil di Update');
          return Redirect::to('sisabisa');
      }
  }

  public function destroy($id)
  {
      $sisabisa = TabelKomoditas::find($id);
      $sisabisa->delete();

      // redirect
      Session::flash('message', 'Komoditas Berhasil Dihapus');
      return Redirect::to('sisabisa');
  }
}
