@extends('Layout.basic')

@section('content')
    <div class="start">
        <img src="./images/logo2.png" alt="logo" id="logo"/>
        <div class="achtergrond"></div>
        <div class="beschrijving">
            <p>Multimedia expert</p>
    <h1 id="start">Anne-Sophie<br/>Leveugle</h1>
        </div>
        <img src="./images/profielfoto.jpg" alt="profielfoto" id="startimage"/>
        <p class="scroll">scroll down  <i class="down"></i></p>
    </div>
    <div class="start1">
        <div class="clearfix">
        <div class="overmij">
        <h2 id="overmij">Over mij</h2>
        <p>Hallo! Ik ben een laatstejaarsstudente Multimedia- en communicatietechnologie aan de Erasmus Hogeschool Brussel.

            Wat me erg aanspreekt aan mijn richting is het creatieve aspect. Tijdens mijn opleiding heb ik verschillende keren rond branding, promotiecampagnes en online marketing gewerkt. Ik zoek graag creatieve oplossingen voor problemen, gericht op de juiste doelgroepen.


        </p>
        </div>
        <div class="navhome">
            <ul>
                <li><a class="nav-link" href="{{ route('home') }}"><span>01</span>Home</a></li>
                <li><a class="nav-link" href="{{ route('about') }}"><span>02</span>About me</a></li>
            </ul>
        </div>
        </div>
        <div class="clearfix marginhome">
        <img src="./images/IMG_1715.jpg" alt="image" class="imagehome"/>
            <div class="quotediv">
            <p class="quotes"><span>"</span> Hard work beats talent if talent doesn't work hard <span>"</span></p>
            </div>
            </div>
        <div class="clearfix marginhome">
        <div class="navhomeleft float-left">
            <ul>
                <li><a class="nav-link" href="{{ route('work') }}"><span>03</span>Work</a></li>
                <li><a class="nav-link" href="{{ route('contact') }}"><span>04</span>Contact</a></li>
            </ul>
            <p>Tijdens mijn studie en werkervaringen ben ik al verschillende keren in aanraking gekomen met branding en online marketing. Door vakken als online marketing, cross-media design en concept design werd ik enthousiast om als marketeer aan de slag te gaan en hierover nog vele nieuwe technieken en werkwijzen te ontdekken.</p>
        </div>
            <img src="./images/zee.jpg" alt="image" class="imagezee"/>
        </div>
    </div>
@endsection