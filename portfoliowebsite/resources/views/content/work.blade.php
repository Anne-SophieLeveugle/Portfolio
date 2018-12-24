@extends('Layout.basic')

@section('content')
    <div class="something" style="padding-top: 240px;">
    <h1  id="overmij" class="werktitel1 groottetitel">Werken</h1>
        <div class="werken">
        @foreach($werken as $werk)
        <div class="apartwerk">
            @foreach($werk->tags as $tag)
                <p><b>- {{$tag->name}} -</b></p>
            @endforeach
            <a href="{{ route('detail', ['id' => $werk['id']]) }}" role="button"><img  class="imagework" src="./images/IMG_1715.jpg" alt="image" style="width: 100%;"/> </a>
                <h1 class="titelwerk">{{$werk['title']}}</h1>
        </div>
        @endforeach
            <div class="text-center paginationwork">
       {{$werken->links()}}
            </div>
        </div>
    </div>
@endsection