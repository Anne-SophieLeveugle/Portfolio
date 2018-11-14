@extends('Layout.basic')

@section('content')
    <div class="container">
        <h1>Detail</h1>
        <p>Titel: {{$werk->title}}</p>
        <p>Details: {{$werk->content}}</p>
        <hr>
        <p><b>{{count($werk->likes)}} likes</b> |
         <a class="btn btn-outline-primary btn-sm" href="{{route('worklike', ['id' => $werk['id']])}}">Like</a> </p>
    </div>
@endsection