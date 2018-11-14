@extends('Layout.admin')

@section('content')
    <h1>index</h1>
<div class="container">
@if(session('forminput'))
    <div class="alert alert-success" role="alert">
        Zoekertje aangemaakt met titel: {{session('forminput')}}
    </div>
@endif
<hr>
    <a class="btn btn-primary btn-lg" href="{{ route('admin.create')}}" role="button">Create</a>
<hr>

    @foreach($werken as $werk)
    <div class="row">
        <h2 class="col-8">Title: {{$werk->title}}</h2>
        <a class="col-2 btn btn-info btn-xs" href="{{ route('admin.edit', ['id' => $werk->id])}}" role="button">Edit</a>
        <a class="col-2 btn btn-danger btn-xs" href="{{ route('admin.delete', ['id' => $werk->id])}}" role="button">Delete</a>
    </div>
    @endforeach
</div>
@endsection