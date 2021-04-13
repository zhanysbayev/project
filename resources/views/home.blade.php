<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('home.css') }}">
    <title>PROJECT</title>
    <link rel="shortcut icon" href="https://free-icon-rainbow.com/i/icon_02483/icon_024830_256.jpg">
</head>
<body>
<div class="full">
   <div class="header" id="header">

       <div class="bg-image"></div>
        <div class="menu"> 
            <a href="{{ route('home') }}" id="home">HOME</a>
            <a href="{{ route('about') }}" id="about">ABOUT</a>
            <a href="{{ route('contact') }}" id="contact">CONTACT</a>
        </div> 
    </div> 
    <div class="text_on_img">
        <p id="p1">Order from us and be success</p>
        <h1 id="h11">EASY WITH OUR <span style="color:  rgb(247, 12, 12); font-weight:bold">STORE</span></h1>
    </div>
</div>       
    
</body>
</html>