@extends('layout.app')

@section('content')

    <section class="pg-kontact">
        <div class="container">
            <h1 class="page-kontact">Корзина</h1>
        </div>
    </section>

    <div id="content" class="site-content">
        <div class="container">
          @foreach($cart as $k => $c)
		  {{$c}} <a href="/removeCart/{{$k}}">Удалить</a> <br>
		  @endforeach
        </div>
    </div>
@endsection

