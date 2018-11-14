@extends('Layout.basic')

@section('content')
    <h1>Work</h1>
    <div class="container">
        @foreach($werken as $werk)
        <div class="jumbotron">
            <h1 class="display-4">{{$werk['title']}}</h1>
            <hr class="my-4">
            @foreach($werk->tags as $tag)
                <p><b>- {{$tag->name}} -</b></p>
                @endforeach
            <p>{{$werk['content']}}</p>
            <a class="btn btn-primary btn-lg" href="{{ route('detail', ['id' => $werk['id']]) }}" role="button">Details</a>
        </div>
        @endforeach
        {{$werken->links()}}
    </div>
@endsection