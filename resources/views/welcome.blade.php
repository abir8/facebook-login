<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: monospace;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


.h1{
    background-color:white;
    
}

.green{
    background-color:green;
    
}
.k{
    background-color:#1affb2;
    
}
.l{
    background-color:#ffff1a;
    
}
.m{
    background-color:#cc00cc;
    
}
.n{
    background-color: #33ffff;
    
}
.o{
    background-color:#944dff;
    
}

.typewriter{
    background-color: rgba(255, 255, 255, 0.11);
    
}
/* DEMO-SPECIFIC STYLES */
.typewriter h1 {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 6.5s steps(40, end),
    blink-caret .75s step-end infinite;
}

.typewriter h2 {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <div style="padding: 5px;">
                        <a href="{{ url('/login') }}" class="btn btn-info"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        <a href="{{ url('/register') }}" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Register</a>
                        </div><hr>
                    @endif
                </div>
            @endif
            <div class="typewriter">
               <h1 class="h1">Developed By:</h1><hr>
               <h2 class="k">ASHRAF HOSSAIN KHAN</h2>
               <h2 class="l">Facebook Authentication System</h2>

  
            </div>
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
            
                
            </div>
        </div>
    </body>
</html>
