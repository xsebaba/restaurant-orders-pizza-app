@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h2> Dodaj nową pozycję do menu</h2>

  <form action="/menu" method="POST">
    @csrf

    <label for="types"> Rodzaj pozycji z menu </label>
          <select name="types" id="types">
            <option value="starters"> Przystawki </option>
            <option value="mainmeal"> Dania Główne </option>
            <option value="pizza"> Pizza </option>
            <option value="beverages"> Napoje </option>
          </select>

    <label for="price"> Podaj cenę pozycji </label>
          <input type="number" id="price" name="price"></input>

    <label for="name_item"> Wpisz nazwę pozycji </label>
        <input type="text" name="name_item" id="name_item"></input>


    <label for="ingredients"> Wypisz składniki</label>
      <fieldset>
        <input type="text" name="ingredients" id="ingredients"></input>
      </fieldset>
    <input type="submit" value="Dodaj"></input>
  </form>
</div>


@endsection
