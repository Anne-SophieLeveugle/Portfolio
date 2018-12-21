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
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerc
            i tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
            commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et a
            ccumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed </p>
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
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
        </div>
            <img src="./images/zee.jpg" alt="image" class="imagezee"/>
        </div>
    </div>
@endsection