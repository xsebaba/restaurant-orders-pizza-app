@extends('layouts.app')

@section('content')

<div class="wrapper menu-index">
  <h1> Sprawdź nasze menu</h1>
          @foreach($types as $type)
            
            <div class="menutype-item">
                <h6>{{$type->typename}}</h6>
                @auth
                <form action="/type/{{$type->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button>Usuń</button>
                </form>
                <a href="/type/{{$type->id}}">
                <button>Edytuj</button>
                </a>
                @endauth
            </div>

            
            @foreach($type->menu as $ty)
              <div class="menu-item">
                <h5>{{strtoupper($ty->name_item)}}</h5>
                @auth
                  <form action="/menu/{$menu->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Usuń</button>
                  </form>
                  <a href="/menu/{$menu->id}}">
                    <button>Edytuj</button>
                  </a>
                @endauth
               {{$ty->ingredients}}
              </div> 
            @endforeach
            
          @endforeach
          @auth
          <a href="/type/create"><h2>Dodaj nową pozycję</h2></a>
          @endauth



</div>
@endsection
