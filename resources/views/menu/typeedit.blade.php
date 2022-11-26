@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h2> Edytujesz rodzaj dania z menu</h2>

  <form action="/type/{{$types->id}}" method="POST">
    @method('PUT')
    @csrf
    <div>
        <label for="typename"> Zmień nazwę pozycji </label>
        <input type="text" name="typename" id="typename"
        value="{{$types->typename}}"></input>
    </div>
        <input type="submit" value="Zmień"></input>
  </form>
  <br>
<a href="/type">Powrót<a>
</div>


@endsection
