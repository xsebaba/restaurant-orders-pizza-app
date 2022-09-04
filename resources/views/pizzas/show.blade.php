@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
<h2> Zamówienie złożone przez: {{$pizza->name}}<h2>
  <p class="type"> Typ - {{$pizza->type}}</p>
  <p class="base"> Ciasto - {{$pizza->base}}</p>
  <p class="toppings"> Dodatki:</p>
  <ul>
    @foreach($pizza->toppings as $topping)
      <li>{{$topping}} </li>
    @endforeach
  </ul>

  @if(isset($pizza->delivery))
        <h5> Informacje dla dostawcy <h5>
          <p class="base">Adres dostawy: {{$pizza->delivery}}</p>
          <p class="base"> Telefon: </p>
  @endif
  
  <form action="/pizzas/{{ $pizza->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Zamówienie zrealizowane</button>
  </form>
</div>
<a href="\pizzas" class="back"> <<<- Powrót do strony głównej </a>
@endsection
