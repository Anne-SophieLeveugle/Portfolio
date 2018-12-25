@extends('Layout.basic')

@section('content')
    <div class="achtergrond"></div>
    <div class="something" style="padding-top: 240px;">
        <h1 id="overmij" class="werktitel groottetitel">{{$werk->title}}</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($werk->images as $image)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner" style=" width:100%; height: 500px !important;">
                @foreach($werk->images as $image)
                    <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                        <img id="{{ $image->index }}" class="d-block w-100" src="{{ URL::asset($image->imagepath) }}" alt="First slide">
                    </div>
                @endforeach
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="contentwerk">
            <h3>Details</h3>
        <p>{{$werk->content}}</p>
        </div>
        <hr>
        <p class="likeswork"><b>{{count($werk->likes)}} likes</b> |
         <a class="btn btn-outline-primary btn-sm" href="{{route('worklike', ['id' => $werk['id']])}}">Like</a> </p>
    </div>
@endsection