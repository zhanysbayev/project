<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('home.css') }}">
    <title>PROJECT</title>
    <link rel="shortcut icon" href="https://free-icon-rainbow.com/i/icon_02483/icon_024830_256.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="full">
        <div class="header" id="header">

            <div class="bg-image"></div>
            <div class="menu">
                <a href="{{ route('home') }}" id="home">{{__('customlang.home')}}</a>
                <a href="{{ route('about') }}" id="about">{{__('customlang.about')}}</a>
                <button class="bt" id="bt2" onclick="popup2()">LOG IN</button>
                <div class="language">
                    <a href="lang/en">{{__('customlang.en')}}</a>
                    <a href="lang/ru">{{__('customlang.ru')}}</a>
                    <a href="lang/kz">{{__('customlang.kz')}}</a>
                </div>
            </div>
        </div>
        <div class="user_profile">
            <img id="profile_img" src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/21760012/original/d4c0c142f91f012c9a8a9c9aeef3bac28036f15b/create-your-cartoon-style-flat-avatar-or-icon.jpg" alt="">
            <p id="user_name">John</p>
        </div>
        <div class="text_on_img">
            <p id="p1">{{__('customlang.txt')}}</p>
            <h1 id="h11">{{__('customlang.easywith')}} <span style="color:  rgb(247, 12, 12); font-weight:bold">{{__('customlang.store')}}</span>.</h1>

            <a id="btn1" href="{{ route('about') }}">{{__('customlang.shop')}}</a>
        </div>
        <div class="popup2">
            <div class="popup-content2">
                <img onclick="close_popup2()" class="closed2" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAV1BMVEX///8jHyAAAAAJAAALAAMNBAdoZmdiYGFmZGRta2sFAABpZ2hwbm8YExRbWFlhXl+dnJweGhsTDQ/T09O0s7M2MzNMSUqHhYbFxMWWlJQXEhNWVFRzcnIz5JTBAAAEQklEQVR4nO2d63aqMBCFBUVEpFatWtu+/3MeKeUUJbsEGEgya3+/XbMyzhWSDIsFIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIEeR026X59X0i6e/XLN3dThNJt+F0iZOPojjG57cJpL+d42NRfCTxxZmOr3ERVRzijbj0dXz4kV7Er+LSrXiNo19WL8LSX1YN6W5UPDUVjKJkLyp9nzxIj1046qWIplPxScGouAgKt+TJhKWKn2LCP5Nn4Q6MeGstQs6KzxYsZd+EZNuzK1qriJJURPSmrWD0sRMR3YfUoGGUSGRUgwXvgSjz5/UhM2kooeKLScGoyATW3I/r0bSQ8Y5qctE7x6vIqvvw3sqlIioCBaN4qt73D84H81pGdTcPnUyDw1ls3fa8ASOOsWIKFIziKVr7TtZoOcnQNhy5aLRai67cGnPWG27FFMqTbuvHL2lQLKIYlG7qe2Eszt8q9nfUDVTQmQVL2i1yvay+KuKolmvoB4EdtZ9rwSzq0kUrcP7rk27SJVJw/n60xR79+6vcWkYGFXQagzVYRdsqlvuZZH6Bjrq0iyGvXbQCJvqlTUbN/Vfwj2JtEYuZ7y5aAZN9Z+nHddB5mXhkPTAWcQzKv0UfCY7FvxwVlwmPYrBmSF2EMSi+SSACLhrIHpuQLFgCkwYoGrBMDHgymQmYNpamd4E7qKBnWbQJdLtVW0WsoKcuWgFTR8tR8y1S0L5hdwJM/9tHK+6QgktHL53swbHY3Fv5gr/yOAZr4KNQo/RDS/ubRZvA5f93wGBjsAbWuR9H/YIxGIQFS2DR+FYx6BisgUVjmy8ytN8RiotWwFg8ns37jqDv8RjoqGBPDrfn3gLTDVAwmCTzC+w7jQrOf9RCANiYtdkGFoM1sLC3FAzQRSssHTW0LNoEFvcHBYOMwZqs21FDtmBJp4r+Pw920eGoYbtoxRfqQ0u2ChS8OyrqRO9dalDNNgadD3NzlmsC1NtQfRyqz6Xq66FNTxN0LKrvS9U/W6h/PlT/jN/rPY1hf9F71L9rU/++dMg776Dqovp9C/V7T2vt+4fde8CwWw3DUdXv46s/iwELvZbzNLhMKDkTpf5cm10M1sBY9PdsIj5fao4tfATa04yq/oyw+nPe8MaFlrP6Q+9bYEf1LBbxRUsld2bU33tSf3dN/f3D8XdIPXdU9feAZe5ye9zd4KkK/ZaGJyo4LhqCMxWgJKczFaQsWOLlXAzZ2SYwZblzVPXzabBbyc8YctKG658TpX7Wl/55bWjm3tiI8Wfm3nrmuYnzvwrfzzz7cv6aaJp9OeH8UgezL00zaKWeAwyl38EMWv1zhPXPgm7N85Z9VH1yVCfzvPXPZH+cqy9frjyYq199G6GY+NsIhctvIyzK71tk+/WE37fI95nT71sQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQo5B8vlDCBniO5qwAAAABJRU5ErkJggg==" alt="" width="7%">
                <img src="https://st2.depositphotos.com/3921439/7704/v/600/depositphotos_77040571-stock-illustration-the-tie-icon-necktie-and.jpg" alt="" width="17%">
                <input id="username2" type="text" name="username" placeholder="Username">
                <input type="password" id="pass" name="pass" placeholder="Password">
                <button onclick="login(username2.value)" class="btn btn-outline-dark" id="bt1">Luv u</button>
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
                        <div class="gmail"> <a class="email" href="{{ route('email') }}" target="_blank">
                                <p class="fa">&#xf003; {{__('customlang.email')}}</p>
                            </a></div>
                        <div class="num">
                            <p class="fa">&#xf095; {{__('customlang.num')}}</p>
                        </div>
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

    <script>
        function popup2() {
            var btn = document.getElementById("bt2").innerHTML;
            if (btn == "LOG IN") {
                document.querySelector(".popup2").style.display = "flex";
                document.body.style.overflow = "hidden";
            } else {
                logout();
            }
        }

        function close_popup2() {
            document.querySelector(".popup2").style.display = "none";
            document.body.style.overflow = "scroll";
            document.getElementById("username2").value = "";
            document.getElementById("pass").value = "";
        }

        function login(name) {
            document.querySelector(".user_profile").style.display = "inline";
            document.getElementById("user_name").innerHTML = name;
            document.getElementById("bt2").innerHTML = "LOG OUT";
            close_popup2();
        }

        function logout() {
            document.querySelector(".user_profile").style.display = "none";
            document.getElementById("bt2").innerHTML = "LOG IN";
        }
    </script>

</body>

</html>