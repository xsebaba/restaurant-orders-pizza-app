<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;


class PizzaController extends Controller
{
    public function index(){
      $pizzas = Pizza::all()->sortByDesc('id');
      return view('pizzas.index',[
          'pizzas' => $pizzas,
        ]);
    }

    public function show($id){
      $pizza = Pizza::findOrFail($id);
      return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
      return view('pizzas.create');
    }

    public function store(){
      $pizza= new Pizza;
      $pizza->name = request('name');
      $pizza->type = request('type');
      $pizza->base = request('base');
      $pizza->delivery = request('delivery');
      $pizza->tel = request('tel');
      $pizza->toppings = request('toppings');
      $pizza->price = request('price');
      $pizza->finalized = false;

      $pizza->save();
      return redirect('/')->with('mssg', 'Dziękujemy za złożenie zamówienia!');
    }

    public function update($id){
      $pizza= Pizza::findOrFail($id);

      $pizza->finalized = true;
      $pizza->save();

      return redirect('/pizzas');
    }

    public function destroy($id){
      $pizza= Pizza::findOrFail($id);
      $pizza->delete();

      return redirect('pizzas');
    }
}
