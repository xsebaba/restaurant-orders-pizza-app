@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">



        @foreach($pizzas as $pizza)
          <div class="pizza-item">
             <h5><a href="/pizzas/{{$pizza->id}}">
               <b style="color:#083efd;"> {{ $pizza->type }} </b>  dodatki: {{$pizza->base}}
               @foreach($pizza->toppings as $topping)
               {{$topping}}
               @endforeach

               @if(isset($pizza->delivery))
                  <b style="color:#083efd;"> Dostawa </b>
               @else
                  <b style="color:#1134fd;"> Na miejscu </b>
               @endif

               @if($pizza->finalized==true)
                 <b> Zamówienie zrealizowane </b>
               @else
                 <b style="color:#ff8c00"> W trakcie przygotowania </b>
               @endif
             </a></h5>
          </div>
        @endforeach


</div>
@endsection
