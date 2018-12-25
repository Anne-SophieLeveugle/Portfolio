@extends('Layout.admin')

@section('content')
    <div class="achtergrond"></div>
<div class="verzameling" style="padding-top: 240px;">
    <h1 class="titeladmin">Index</h1>
@if(session('forminput'))
    <div class="alert alert-success" role="alert">
        Zoekertje aangemaakt met titel: {{session('forminput')}}
    </div>
@endif
    <div class="container" style="margin-bottom: 50px; padding: 40px">
<hr>
    <a class="btn btn-primary btn-lg" href="{{ route('admin.create')}}" role="button" style="margin: 30px">Nieuw werk toevoegen</a>
<hr>

    @foreach($werken as $werk)
    <div class="row">
        <h2 class="col-7" style="margin: 30px 5px; color: #1b4b72; font-size: 20px">{{$werk->title}}</h2>
        <a class="col-2 btn btn-info btn-xs" href="{{ route('admin.edit', ['id' => $werk->id])}}" role="button" style="margin: 30px 5px">Edit</a>
        <a class="col-2 btn btn-danger btn-xs" href="{{ route('admin.delete', ['id' => $werk->id])}}" role="button" style="margin: 30px 5px">Delete</a>
    </div>
    @endforeach
</div>
</div>
@endsection