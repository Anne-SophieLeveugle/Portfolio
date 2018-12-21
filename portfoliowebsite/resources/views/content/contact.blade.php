@extends('Layout.basic')

@section('content')
    <img src="./images/contact.jpg" alt="background" class="backgroundcontact">
    <h1 class="contacttitel">Contact</h1>
    <div class="container" id="contactgegevens">
        <h2>Contacteer me</h2>
        <p>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerc
            i tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
            commodo consequat. Duis autem vel eum iriure dolor in hendrerit in </p>
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