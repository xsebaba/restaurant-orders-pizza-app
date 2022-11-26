@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h2> Dodaj nowy typ pozycji w karcie</h2>

  <form action="/type" method="POST">
    @csrf
    <div>
        <label for="typename"> Wpisz nazwę pozycji </label>
        <input type="text" name="typename" id="typename"></input>
    </div>
    <input type="submit" value="Dodaj"></input>
  </form>
</div>


@endsection
