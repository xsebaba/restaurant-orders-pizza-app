@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h2> Stwórz nową pizzę</h2>
  <form action="/pizzas" method="POST">
    @csrf
    <label for="name">Twoje imię:</label>
    <input type="text" id="name" name="name">
    <label for="delivery">Adres Dostawy:</label>
    <input type="text" id="delivery" name="delivery">
    <label for="tel"> Telefon klienta: </label>
    <input type="number" id="tel" name="tel">
    <input type="hidden" id="price" name="price" value="10">
    <label for="name">Wybierz pizzę:</label>
    <select name="type" id="type">
      <option value="margarita">Margarita</option>
      <option value="havaiian">Hawajska</option>
      <option value="salsicia">Salsicia</option>
    </select>
    <label for="base"> Wybierz ciasto</label>
    <select name="base" id="base">
      <option value="cienka"> Cienkie ciasto </option>
      <option value="gruba"> Na grubym cieście </option>
      <option value="razowa"> Ciasto razowe </option>
    <select>
    <fieldset>
      <label> Dodatki do pizzy </label>
      <input type="checkbox" name="toppings[]" value="Dodatkowy ser">Dodatkowy Ser</input>
      <input type="checkbox" name="toppings[]" value="Grilowany kurczak">Grillowany kurczak</input>
      <input type="checkbox" name="toppings[]" value="Pieczarki">Pieczarki</input>
      <input type="checkbox" name="toppings[]" value="Salami">Salami</input>
      <input type="checkbox" name="toppings[]" value="Oliwki">Oliwki</input>
      <input type="checkbox" name="toppings[]" value="Krewetki">Krewetki</input>
    </fieldset>
    <input type="submit" value="Zamów">
  </form>
</div>
@endsection
