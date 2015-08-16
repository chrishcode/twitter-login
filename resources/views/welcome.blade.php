<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href='http://fonts.googleapis.com/css?family=Finger+Paint' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            
            .img-circle {
                width: 100px;
                height: auto;
                margin-right: 20px;
            }
            
            .tweetlogo {
                margin-left: -20px;
                width: 100px;
                height: auto;
            }
            
            .loginbtn {
                background-color: #55ACEE;
                border-radius: 5px;
                padding-left: 20px;
                padding-right: 20px;
                color: #ffffff;
            }
            
            .loginbtn:hover {
                background-color: #50a0dd;
            }
            
            .login:hover {
                text-decoration: none;
            }
            
            h1 {
                margin-top: -200px;
                font-family: 'Finger Paint', cursive;
                color: #55ACEE;
            }

            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Logga in med twitter test!</h1><br><br><br><br>
                @if(Auth::guest())
                <a class="login" href="{{ url('twitterlogin') }}"><h2 class="loginbtn"><img class="tweetlogo" src="tweetlogo.png">Logga in med twitter</h2></a>
                @else
                    <h2>Inloggad som:</h2><br><br>
                    <h2><img class="img-circle" src="{{ Auth::user()->avatarimg }}"> {{ Auth::user()->name }}</h2>
                    <br><br>
                    <h3><a href="{{ url('logout') }}">Logga ut</a></h3>
                @endif
            </div>
        </div>
    </body>
</html>
