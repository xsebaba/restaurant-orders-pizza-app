<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Menu;

class MenuTypesController extends Controller
{
  public function index(Type $type){
    $types = Type::all();
    return view('menu.index',
      compact('types'));

  }

  public function create(){
    return view('menu.typecreate');
  }

  public function store(){
    $types= new Type;
    $types->typename = request('typename');
    $types->save();
    return redirect('/menu')->with('mssg', 'Dodano element do menu');
  }
  public function edit($id){
    $types = Type::findOrFail($id);
    return view('menu.typeedit', compact('types'));
  }

  public function update($id){
    $types= Type::findOrFail($id);
    $types->typename = request('typename');
    $types->save();

    return redirect('/menu')->with('mssg', 'Zaktualizowano element');
  }

  public function destroy($id){
    $types= Type::findOrFail($id);
    $types->delete();

    return redirect('/menu');
  }

}
