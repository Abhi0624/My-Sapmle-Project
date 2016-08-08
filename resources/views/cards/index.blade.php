@extends('layout')

@section('content')

 <body>
        <div class="container">
            <div class="content">
                <div class="title"> Show all cards </div>
                <div> 
                	@foreach($cards as $card)
                		<!-- <a href="/cards/{{$card->id}}"><h1><li> {{ $card->title }}</li></h1> -->
                        <a href="{{ $card->path() }}"><h1><li> {{ $card->title }}</li></h1>
                	@endforeach
                </div>
            </div>
        </div>
    </body>
</html>

@stop