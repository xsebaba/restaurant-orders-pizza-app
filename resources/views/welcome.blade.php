@extends('layouts.app')

@section('content')


    <div class="content">
        <div class="title m-b-md">
            Zapraszamy do naszej pizzerii!!
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/pizzas/create">Zamów pizzę</a>
    </div>
</div>
@endsection
