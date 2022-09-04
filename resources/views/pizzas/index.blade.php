@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">



        @foreach($pizzas as $pizza)
          <div class="pizza-item">
             <h4><a href="/pizzas/{{$pizza->id}}"> {{ $pizza->name }} zamówił {{$pizza->type}} dodatki {{$pizza->base}}
               @foreach($pizza->toppings as $topping)
               {{$topping}}
               @endforeach

               @if(isset($pizza->delivery))
               <b style="color:#083efd;"> Dostawa</b>
               @else
               <b style="color:#1134fd;"> Na miejscu</b>
               @endif
             </a></h4>
          </div>
        @endforeach


</div>
@endsection
