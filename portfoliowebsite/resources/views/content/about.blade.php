@extends('Layout.basic')

@section('content')
    <div class="start">
        <img src="./images/logo2.png" alt="logo" id="logo"/>
        <div class="achtergrond"></div>
        <div class="beschrijving">
            <h1 id="start">About<br/>Anne-Sophie</h1>
        </div>
        <img src="./images/aboutme.jpg" alt="image" class="aboutme" id="startimage">
    </div>
    <div class="contentabout">
        <div class="row">
            <div class="col-sm">
                <ul class="list-group">
                    <li class="list-group-item"><span>Persoonlijke Skills</span></li>
                    <li class="list-group-item">Creatief</li>
                    <li class="list-group-item">Flexibel</li>
                    <li class="list-group-item">Probleemoplossend denker</li>
                    <li class="list-group-item">Communicatievaardig</li>
                    <li class="list-group-item">Teamplayer</li>
                    <li class="list-group-item">Leergierig</li>
                </ul>
            </div>
            <div class="col-sm">
                <ul class="list-group">
                    <li class="list-group-item"><span>Werkervaring</span></li>
                    <li class="list-group-item">Mise en Place</li>
                    <li class="list-group-item">Jemasoft</li>
                    <li class="list-group-item">Marqiz</li>
                    <li class="list-group-item">Lemca</li>
                </ul>
            </div>
            <div class="col-sm">
                <ul class="list-group">
                    <li class="list-group-item"><span>Hobbies</span></li>
                    <li class="list-group-item">Paardrijden</li>
                    <li class="list-group-item">Zwemmen</li>
                    <li class="list-group-item">Lopen</li>
                    <li class="list-group-item">Cornet</li>
                </ul>
            </div>
        </div>
    </div>
@endsection