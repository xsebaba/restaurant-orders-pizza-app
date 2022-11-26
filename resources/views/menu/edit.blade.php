@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h2> Edytujesz istniejącą pozycję z menu</h2>

  <form action="/menu/{{$menu->id}}" method="POST">
    @method('PUT')
    @csrf

    <label for="types"> Rodzaj pozycji z menu </label>
          <select name="types" id="types">
            <option value="starters"
            @if($menu->types=="starters")
                selected
            @endif
            > Przystawki </option>
            <option value="mainmeal"
            @if($menu->types=="mainmeal")
                selected
            @endif
            > Dania Główne </option>
            <option value="pizza"
            @if($menu->types=="pizza")
                selected
            @endif
            > Pizza </option>
            <option value="beverages"
            @if($menu->types=="beverages")
                selected
            @endif
            > Napoje </option>
          </select>

    <label for="price"> Podaj cenę pozycji </label>
          <input type="number" id="price" name="price" value="{{$menu->price}}"></input>

    <label for="name_item"> Wpisz nazwę pozycji </label>
        <input type="text" name="name_item" id="name_item" value="{{$menu->name_item}}"></input>


    <label for="ingredients"> Wypisz składniki</label>
      <fieldset>
        <input type="text" name="ingredients" id="ingredients" value="{{$menu->ingredients}}"></input>
      </fieldset>
    <input type="submit" value="Zmień"></input>
  </form>
  <br>
<a href="/menu">Powrót<a>
</div>


@endsection
