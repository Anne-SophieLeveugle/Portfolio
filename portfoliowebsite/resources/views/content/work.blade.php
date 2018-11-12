@extends('Layout.basic')

@section('content')
    <h1>Work</h1>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Werk 1</h1>
            <p class="lead">design</p>
            <hr class="my-4">
            <p>Verzameling van alle werken</p>
            <a class="btn btn-primary btn-lg" href="{{ route('detail', ['id' => 1]) }}" role="button">Details</a>
        </div>
        <div class="jumbotron">
            <h1 class="display-4">Werk 2</h1>
            <p class="lead">design</p>
            <hr class="my-4">
            <p>Verzameling van alle werken</p>
            <a class="btn btn-primary btn-lg" href="{{ route('detail', ['id' => 2]) }}" role="button">Details</a>
        </div>
        <div class="jumbotron">
            <h1 class="display-4">Werk 3</h1>
            <p class="lead">design</p>
            <hr class="my-4">
            <p>Verzameling van alle werken</p>
            <a class="btn btn-primary btn-lg" href="{{ route('detail', ['id' => 3]) }}" role="button">Details</a>
        </div>
    </div>
@endsection