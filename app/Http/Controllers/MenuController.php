<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{

  public function index(){


    $starters = Menu::where('types','starters')->get();
    $mainmeals = Menu::where('types','mainmeal')->get();
    $beverages = Menu::where('types','beverages')->get();
    $pizzas = Menu::where('types','pizza')->get();
    return view('menu.index',[
        'starters' => $starters,
        'mainmeals' => $mainmeals,
        'beverages'=> $beverages,
        'pizzas' => $pizzas
      ]);
  }

  public function create(){
    return view('menu.create');
  }

  public function store(){
    $menu= new Menu;
    $menu->types = request('types');
    $menu->name_item = request('name_item');
    $menu->ingredients = request('ingredients');
    $menu->price = request('price');
    $menu->save();
    return redirect('/menu')->with('mssg', 'Dodano element do menu');
  }
  public function edit($id){
    $menu = Menu::findOrFail($id);
    return view('menu.edit', compact('menu'));
  }

  public function update($id){
    $menu= Menu::findOrFail($id);
    $menu->types = request('types');
    $menu->name_item = request('name_item');
    $menu->ingredients = request('ingredients');
    $menu->price = request('price');
    $menu->save();

    return redirect('/menu')->with('mssg', 'Zaktualizowano element');
  }

  public function destroy($id){
    $menu= Menu::findOrFail($id);
    $menu->delete();

    return redirect('/menu');
  }

}
