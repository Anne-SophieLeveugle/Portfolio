@extends('Layout.basic')

@section('content')
    <img src="./images/contact.jpg" alt="background" class="backgroundcontact">
    <h1 class="contacttitel">Contact</h1>
    <div class="container" id="contactgegevens">
        <h2>Contacteer me</h2>
        <p>Contacteer me indien je vragen hebt over mijn portfolio! Ik doe mijn best om alle vragen zo snel mogelijk te beantwoorden.</p>
        <div class="row">
            <div class="col-sm">
                <img src="./images/mail.png" alt="icoon" class="icooncontact"/>
                <h4>Mail</h4>
                <p>annesophie.leveugle@hotmail.com</p>
            </div>
            <div class="col-sm">
                <img src="./images/adres.png" alt="icoon" class="icooncontact"/>
                <h4>Adres</h4>
                <p>Hof ter Bollen 8 <br/> 2870 Puurs</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <img src="./images/tel.png" alt="icoon" class="icooncontact"/>
                <h4>Telefoonnummer</h4>
                <p>0470/92.53.34</p>
            </div>
            <div class="col-sm">
                <img src="./images/facebook.png" alt="icoon" class="icooncontact"/>
                <h4>Facebookpagina</h4>
                <p>Facebook</p>
            </div>
        </div>
    </div>
@endsection