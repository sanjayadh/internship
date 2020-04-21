<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup Page Like instagram</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <style>
        *{
            margin:0;
            padding: 0;
        }
        .phone{
            padding-top: 70px;
            height: 650px;
            float: right;
            margin:10px;
        }
        body{
            background-color: #fafafa !important;
        }
        .container{
            margin-top: 20px;
        }
        .right-column{
            background: #fff;
            border: 1px solid #e6e6e6;
            width: 350px;
            margin:10px;
            padding: 40px;
        }
        .instragram-logo{
            margin:15px;
            height: 103px;
                 }
        .info{
            font-weight: 600px;
            line-height: 20px;
            font-size: 17px;
            color: #999999;
        }
        button img{
            height: 18px !important;
            padding: 0 8px 2px;
        }
        .or{
            font-size: 13px !important;
            color: #999;
            font-weight: 600;
        }
        .or::before
        {
            content: '';
            background: #efefef;
            display: block;
            height: 2px;
            width: 110px;
            position: relative;
            top: 11px;
        }
        .or::after
        {
            content: '';
            background: #efefef;
            display: block;
            height: 2px;
            width: 110px;
            position: relative;
            bottom: 10px;
            left: 160px;
        }
        .form-group{
            margin-bottom: 6px !important;
        }
        .form-control{
            background: #fafafa !important;
            border: 1px solid #efefef !important;
            font-size: 12px !important;
        }
        ::placeholder{
            color: #999 !important;
        }
        .btn {
            margin:12px auto;
            padding: 2px !important;
            font-weight: 600!important;
        }
        .btn-primary{
            background-color: #3897f0!important;
            border: 1px solid #3897f0!important;
        }
        .terms{
            line-height: 18px;
            font-size: 14px;
            color: #999;
            margin: 5px 20px ;
        }
        .right-column-login{
            background: #fff;
            border: 1px solid #e6e6e6;
            width: 350px;
            margin: 10px;
            padding: 10px;
        }
        .right-column-login a:hover{
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('image/sanjay.jpeg')}}" class="phone">
        </div>
        <div class="col-sm-6">
            <div class="right-column text-center">
                <img src="{{asset('image/instragram.png')}}" class="instragram-logo">
                <p class="info">Sign up to see photos and video from your friends.</p>
                <button type="submit" class="btn btn-primary btn-block"><img src="{{asset('image/fb.jpg')}}" class="fb-logo">
                    login with facebook</button>
                <p class="or">OR</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control"placeholder="Mobile number Or Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name:">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username:">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="password:">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                </form>
                <p class="terms">By signing up, you agree to our &&nbsp;<b>terms,Data policy</b> and <b>cookies policy</b></p>
            </div>
            <div class="right-column-login text-center">
                <p>Have an account?<a href="#">Login</a> </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
