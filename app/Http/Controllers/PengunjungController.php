<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\TabelKunjungan;
use View;

class PengunjungController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    // get all the nerds
      $pengunjungs = TabelKunjungan::all();
      $haris = TabelKunjungan::all()
                     ->DATENAME(weekday, getdate())
                     ->get();

    // load the view and pass the nerds
      return View::make('sisabisa.history')
          ->with('pengunjungs', $pengunjungs)->with('haris', $haris);
  }

  public function create()
  {
      return View::make('sisabisa.histcreate');
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
          $sisabisa = new TabelKunjungan;
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
      $sisabisa = TabelKunjungan::find($id);

      // show the view and pass the nerd to it
      return View::make('sisabisa.show')
          ->with('sisabisa', $sisabisa);
  }

  public function edit($id)
  {
      $sisabisa = TabelKunjungan::find($id);

      // show the edit form and pass the nerd
      return View::make('sisabisa.histedit')
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
          $sisabisa = TabelKunjungan::find($id);
          $sisabisa->Stok      = Input::get('stok');
          $sisabisa->save();

          // redirect
          Session::flash('message', 'Stok Berhasil di Update');
          return Redirect::to('sisabisa');
      }
  }

  public function destroy($id)
  {
      $sisabisa = TabelKunjungans::find($id);
      $sisabisa->delete();

      // redirect
      Session::flash('message', 'Komoditas Berhasil Dihapus');
      return Redirect::to('sisabisa');
  }
}
