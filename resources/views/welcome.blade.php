<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Personal WebSite</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: url({{asset('image/bg.jpeg')}}) no-repeat;
            background-size: cover;
        }
        .box{
            width: 450px;
            background: rgba(0, 0, 0, 0.4);
            padding: 40px;
            text-align: center;
            margin: auto;
            margin-top: 5%;
            color: white;
            font-family: 'Century Gothic',sans-serif;
        }
        .box-img{
            border-radius: 89px 99px 89px 123px;
            width: 200px;
            height: 200px;
        }
        .box h1{
            font-size: 40px;
            letter-spacing: 4px;
            font-weight: 100;
            background-color:  #black;
            color:blue;

        }
        .box h5{
            font-size: 20px;
            letter-spacing: 3px;
            font-weight: 100;
            color:skyblue;
        }
        .box p{
            text-align: justify;
            color: papayawhip;
        }
        ul{
            margin: 0;
            padding: 0;
        }
        .box li{
            display: inline-block;
            margin: 6px;
            list-style: none;
        }
        .box li a{
            color: white;
            text-decoration: none;
            font-size: 60px;
            transition: all ease-in-out 250ms;
        }
        .box li a:hover{
            color: #fd7e14;
        }
        .dream{
            font-size: 16px;
            font-family: lato;
        }


    </style>
</head>
<body>
<div class="container">
<div class="box">
    <img src="{{asset('image/sanjay.jpeg')}}" alt="" class="box-img">
    <h1>
        <b>Sanjay Adhikari</b></h1>
    <h5>
        <i>jr laravel developer</i></h5>
    <p class="dream">
        I am sanjay Adhikari from machapokhari kathmandu.my dream job would allow me to develop web content for a variety companies. i love getting to know different clients and developing content to suit their unique neeeds</p>
    <ul>
        <li><a href="https://www.facebook.com/sangita.dhungana.129"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
    </ul>
</div>
</div>
<marquee width="60%" direction="right" height="100px">
    This is a sample scrolling text that has scrolls texts to right.
</marquee>
</body>
</html>



