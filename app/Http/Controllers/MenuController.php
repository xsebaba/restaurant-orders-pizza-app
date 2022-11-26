<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Type;

class MenuController extends Controller
{

  public function create(){
    return view('menu.create');
  }

  public function store(){
    $menu= new Menu;
    $menu->name_item = request('name_item');
    $menu->ingredients = request('ingredients');
    $menu->price = request('price');
    $menu->save();
    return redirect('/menu')->with('mssg', 'Dodano element do menu');
  }
  public function edit($id){
    $menu = Menu::findOrFail($id);
    return view('/menu.edit', compact('menu'));
  }

  public function update($id){

    $menu= Menu::findOrFail($id);

    $menu->name_item = request('name_item');
    $menu->ingredients = request('ingredients');
    $menu->price = request('price');
    $menu->update();

    return redirect('/menu')->with('mssg', 'Zaktualizowano element');
  }

  public function destroy($id){
    $menu= Menu::findOrFail($id);
    $menu->delete();

    return redirect('/menu');
  }

}
