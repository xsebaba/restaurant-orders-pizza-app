@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h2> Stwórz nową pizzę</h2>
  <form action="/pizzas" method="POST">
    @csrf
    <div onclick="checkDelivery()" style="
      background: #c2c2b3; width: 260px; text-align:center; border-radius:2px;padding: 4px; cursor:pointer">
      Kliknj jeśli zamówienie jest z dowozem
    </div>
    <div id="deliveryCheck" style="display:none;">
      <label for="name">Twoje imię:</label>
      <input type="text" id="name" name="name">
      <label for="delivery">Adres Dostawy - Ulica</label>
      <input type="text" id="delivery_street" name="delivery_street">
      <label for="delivery">Adres Dostawy - Numer domu i lokalu</label>
      <input type="text" id="delivery_number" name="delivery_number">
      <label for="delivery">Adres Dostawy - Kod Pocztowy</label>
      <input type="text" id="delivery" name="delivery_post">
      <label for="tel"> Telefon kontaktowy: </label>
      <input type="number" id="tel" name="tel">
    </div>
      <div id="away">
          <label for="tel"> Na miejscu czy na wynos? </label>
          <select name="awaySelect" id="awaySelect">
            <option value="inside"> Na miejscu </option>
            <option value="outside"> Na wynos </option>
          </select>
      </div>

    <input type="hidden" id="price" name="price" value="10">
    <label>Wybierz pizzę:</label>
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

<script>
  function checkDelivery() {
    var x = document.getElementById("deliveryCheck");
    var y = document.getElementById("away");
    if (x.style.display === "none") {
      x.style.display = "block";
      y.style.display = "none";
    } else {
      x.style.display = "none";
    }
  }
</script>
@endsection
