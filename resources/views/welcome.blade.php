@extends('layouts.app')

@section('content')


    <div class="content">
        <div class="title m-b-md" style="
        background-image:url('img/bcg2.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        height:40vh;
        font-weight:900;
        opacity:0.8;
        text-shadow: 2px 2px #1f0000;">
            <p style="color: #a2e4e4;">Zapraszamy do naszej pizzerii!!</p>
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <h4><a href="/pizzas/create">Zamów pizzę</a></h4>
    </div>
</div>
@endsection
