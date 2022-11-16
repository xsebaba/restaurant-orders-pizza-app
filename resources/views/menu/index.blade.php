@extends('layouts.app')

@section('content')
<div class="wrapper menu-index">

<b style="color:#083efd;"> Przystawki </b>

        @foreach($starters as $starter)
          <div class="menu-item">

               <h5>{{$starter->name_item}}</h5>

               <form action="/menu/{{$starter->id}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button>Usuń</button>
               </form>
               <a href="/menu/{{$starter->id}}">
                <button>Edytuj</button>
               </a>

               <br>
               {{$starter->ingredients}}

          </div>
        @endforeach
        <br>
<b style="color:#083efd;"> Dania Główne </b>
        @foreach($mainmeals as $mainmeal)
          <div class="menu-item">
               <h5>
                 {{$mainmeal->name_item}}
               </h5>
               <form action="/menu/{{$mainmeal->id}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button>Usuń</button>
               </form>
               <a href="/menu/{{$mainmeal->id}}">
                <button>Edytuj</button>
               </a>
               <br>
               {{$mainmeal->ingredients}}

          </div>
        @endforeach
        <br>
  <b style="color:#083efd;"> Pizza </b>
        @foreach($pizzas as $pizza)
          <div class="menu-item">

               <h5>{{$pizza->name_item}}</h5>
               <form action="/menu/{{$pizza->id}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button>Usuń</button>
               </form>
               <a href="/menu/{{$pizza->id}}">
                <button>Edytuj</button>
               </a>

               <br>
               {{$pizza->ingredients}}

          </div>
        @endforeach
  <b style="color:#083efd;"> Napoje </b>
        @foreach($beverages as $beverage)
          <div class="menu-item">

               <h5>{{$beverage->name_item}}</h5>
               <form action="/menu/{{$beverage->id}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button>Usuń</button>
               </form>
               <a href="/menu/{{$beverage->id}}">
                <button>Edytuj</button>
               </a>
               <br>
               {{$beverage->ingredients}}

          </div>
        @endforeach


</div>
@endsection
