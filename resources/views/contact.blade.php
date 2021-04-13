<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('contact.css') }}">
    <title>PROJECT</title>
</head>
<body>
<div class="full">
   <div class="header" id="header">

       <div class="bg-image"><div class="contact" id="contact">
            <div class="hero_img">
                <form class="needs-validation">
                <h1 id="shh2">Hi</h1>
                <p id="shp"> qs </p>
                <div class="form-group">
                     <label id="labn" for="name">name</label><br> 
                     <input id="name" type="text" class="form-control" name = "name" placeholder="enteryourname" required>
                </div>
                <div class="form-group">
                     <label id="labe" for="email">email</label><br> 
                     <input id="email" type="email" class="form-control" name = "email" placeholder="enteryouremail" required >
                </div>
                <div class="form-group">
                    <label id="labm" for="mes">message</label> 
                    <input id="mes" type="text" class="form-control" name = "message" placeholder="enteryourmessage" required>
                </div>
                <div class="end">
                     <button id="but2" class="btn">sendmessage</button> 
                </div>
              </form>
            </div>
        </div>
    </div>
        <div class="menu"> 
            <a href="{{ route('home') }}" id="home">HOME</a>
            <a href="{{ route('about') }}" id="about">ABOUT</a>
            <a href="{{ route('contact') }}" id="contact">CONTACT</a>
        </div> 
    </div> 
    
</div>            
    
</body>
</html>