@extends('Layout.basic')

@section('content')
    <div class="something" style="padding-top: 240px;">
    <h1  id="overmij" class="werktitel1 groottetitel">Werken</h1>
        <div class="werken">
        @foreach($werken as $werk)
        <div class="apartwerk">
            <a href="{{ route('detail', ['id' => $werk['id']]) }}" role="button">
            @foreach($werk->images as $image)
                @if ($loop->first)
                        <img  class="imagework" src="{{ URL::asset($image->imagepath) }}" alt="image" style="width: 100%;"/>
                @endif
            @endforeach

            </a>
                <h1 class="titelwerk">{{$werk['title']}}</h1>
        </div>
        @endforeach
            <div class="text-center paginationwork">
       {{$werken->links()}}
            </div>
        </div>
    </div>
@endsection