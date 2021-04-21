<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('create.css') }}">
    <title>ORDER</title>
    <link rel="shortcut icon" href="https://free-icon-rainbow.com/i/icon_02483/icon_024830_256.jpg">
</head>
<body>
<div class="full">
   <div class="header" id="header">

       <div class="bg-image"><div class="contact" id="contact">
            <div class="hero_img">
                <form  method="POST" action="{{ route('add-order')}}" class="needs-validation" enctype="multipart/form-data">
                @csrf
                <h1 id="shh2">{{__('customlang.hello')}}</h1>
                <p id="shp"> {{__('customlang.ifqs')}} </p>
                <div class="form-group">
                     <label id="labn" for="name">{{__('customlang.name')}}</label><br> 
                     @csrf
                     <input id="name" type="text" class="form-control" name = "name" placeholder="{{__('customlang.entername')}}" required>
                </div>
                <div class="form-group">
                     <label id="labe" for="id_of_product">{{__('customlang.prodid')}}</label><br>
                     @csrf 
                     <input id="pro" type="integer" class="form-control" name = "id_of_product" placeholder="{{__('customlang.enterid')}}" required >
                </div>
                <div class="form-group">
                    <label id="labm" for="size">{{__('customlang.size')}}</label> 
                    @csrf
                    <input id="mes" type="text" class="form-control" name = "size" placeholder="{{__('customlang.entersize')}}" required>
                </div>
                <div class="form-group">
                    <label id="labs" for="file">{{__('customlang.upload')}}<br><br></label> 
                    @csrf
                    <input type="file" name="file" placeholder="profile photo" required>
                </div>
                <div class="end">
                     <button id="but2" class="btn">{{__('customlang.createorder')}}</button> 
                </div>
              </form>
            </div>
        </div>
    </div>
        <div class="menu"> 
            <a href="{{ route('home') }}" id="home">{{__('customlang.home')}}</a>
            <a href="{{ route('about') }}" id="about">{{__('customlang.about')}}</a>
        </div> 
    </div> 
    
</div>            
    
</body>
</html>