<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('about.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ABOUT</title>
    <link rel="shortcut icon" href="https://free-icon-rainbow.com/i/icon_02483/icon_024830_256.jpg">
</head>
<body>

<div class="full">
   <div class="header" id="header">

       <div class="bg-color"><div class="page2">
<div class="mid" id="mid">
<p id="mid_p">{{__('customlang.difference')}} <span style="color:  rgb(247, 12, 12); font-weight:bold">{{__('customlang.quality')}}</span>.<br>
{{__('customlang.wecan')}} <span style="color:  rgb(247, 12, 12); font-weight:bold"> {{__('customlang.everything')}} </span>{{__('customlang.youwant')}} <span style="color:  rgb(247, 12, 12); font-weight:bold"> {{__('customlang.ord')}} </span> {{__('customlang.fromus')}} </p>

</div>

<div class="row1">

<div class="card1">

    <div class="img1">
        <img id="img1" src="https://st2.depositphotos.com/3921439/7704/v/600/depositphotos_77040571-stock-illustration-the-tie-icon-necktie-and.jpg" alt="">
    </div>

    <div class="info">
        <h1>{{__('customlang.tie')}}</h1>
        <p id="info_p">{{__('customlang.tietxt')}}
            <br><a class="buy1" href="{{ route('add-order') }}">{{__('customlang.buy')}}</a></br>
        </p>
    </div>

</div>


<div class="card2">

    <div class="img2">
        <img id="img2" src="https://image.shutterstock.com/image-vector/bowties-icon-design-vector-template-260nw-1542937175.jpg" alt="">
    </div>

    <div class="info">
        <h1>{{__('customlang.bowtie')}}</h1>
        <p id="info_p">{{__('customlang.bowtxt')}}
            <br><a class="buy2" href="{{ route('add-order') }}">{{__('customlang.buy')}}</a></br>
        </p>
    </div>

</div>

</div>

<div class="row2">

<div class="card3">

    <div class="img3">
        <img id="img3"src="https://png.pngtree.com/element_our/png/20181129/sunglasses-graphic-design-template-vector-png_248576.jpg" alt="">
    </div>

    <div class="info">
        <h1>{{__('customlang.glasses')}}</h1>
        <p id="info_p">{{__('customlang.glastxt')}}
            <br><a class="buy3" href="{{ route('add-order') }}">{{__('customlang.buy')}}</a></br>  
        </p>
    </div>

</div>


<div class="card4">

    <div class="img4">
        <img id="img4" src="https://st2.depositphotos.com/3638669/9542/v/600/depositphotos_95427844-stock-illustration-mens-dress-shoes-icon-vector.jpg" alt="">
    </div>

    <div class="info">
        <h1>{{__('customlang.shoes')}}</h1>
        <p id="info_p">{{__('customlang.shoestxt')}}
            <br><a class="buy4" href="{{ route('add-order') }}">{{__('customlang.buy')}}</a></br>  
        </p>
    </div>

</div>

</div>

<div class="row3">

    <div class="card5">

        <div class="img5">
            <img id="img5"src="https://png.pngtree.com/element_origin_min_pic/16/11/30/2ef517641fa1843e90da271847319c08.jpg" alt="">
        </div>

        <div class="info">
            <h1>{{__('customlang.suit')}}</h1>
            <p id="info_p">{{__('customlang.suittxt')}}
                <br><a class="buy5" href="{{ route('add-order') }}">Buy</a></br> </p>
                
        </div>

    </div>


    <div class="card6">

        <div class="img6">
            <img id="img6" src="https://image.shutterstock.com/image-vector/retro-tophat-vector-icon-on-260nw-730662034.jpg" alt="">
        </div>

        <div class="info">
            <h1>{{__('customlang.hat')}}</h1>
            <p id="info_p">{{__('customlang.hattxt')}}
                <br><a class="buy6" href="{{ route('add-order') }}"id="order">Buy</a></br></p>
             
        </div>

    </div>
    
    </div>
</div>
        <div class="menu"> 
            <a href="{{ route('home') }}" id="home">{{__('customlang.home')}}</a>
            <a href="{{ route('about') }}" id="about">{{__('customlang.about')}}</a>
            <div class="language">
                <a href="lang/en">{{__('customlang.en')}}</a>
                <a href="lang/ru">{{__('customlang.ru')}}</a>
                <a href="lang/kz">{{__('customlang.kz')}}</a>
            </div>
        </div> 
    </div> 
    </div>    
</div> 
<div class="footer">
    <div class="footer_text">
            <div class="links">
                <div class="title1">
                    <h5>{{__('customlang.links')}}</h5>
                </div>
                <div class="title1_content">
                    <a class="home" href="{{ route('home') }}">{{__('customlang.home')}}</a>
                    <a class="about" href="{{ route('about') }}">{{__('customlang.about')}}</a>
                    <a class="order" href="{{ route('add-order') }}">{{__('customlang.order')}}</a>
                </div>
            </div>

            <div class="contacts">
                <div class="title2">
                    <h5>{{__('customlang.contacts')}}</h5>
                </div>
                <div class="title2_content">
                    <address class="fa" id="ad">&#xf015;{{__('customlang.address')}}</address>
                    <div class="gmail"> <a class="email" href="{{ route('email') }}" target="_blank"><p class="fa" >&#xf003; {{__('customlang.email')}}</p></a></div>
                    <div class="num"><p class="fa">&#xf095; {{__('customlang.num')}}</p></div>
                </div>
            </div>

            <div class="socials">
                <div class="title3">
                    <h5>{{__('customlang.socials')}}</h5>
                </div>
                <div class="title3_content">
                    <a href="https://www.instagram.com/_zhanysbayev_/" class="fa">&#xf16d; _zhanysbayev_</a>
                </div>
            </div>
        </div>
    </div>
</div>    

    
</body>
</html>