@extends('layout')

@section('content')

 <body>
        <div class="container">
            <div class="content">
                <div class="title"> Cards </div>
                <div> 
                	
                		<h1><li class="list-group"> {{ $card->title }}</li></h1>
                        @foreach ($card->notes as $note)
                            <h3><li> {{ $note->body }}</li></h3>
                        @endforeach
                        <hr/>
                        <form method="POST" action="/cards/{{ $card->id }}/notes">
                            {{ csrf_field() }}
                            <textarea name="body"> Note</textarea><br/>
                            <button type="submit">Add Note</button>

                        </form>
                	
                </div>
            </div>
        </div>
    </body>
</html>

@stop