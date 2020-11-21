<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>

        <!-- Fonts -->
     //   <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
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
        </style>
    </head>
    <body>    
        <div class="flex-center position-ref full-height">
            <div class="content"> 
                <div class="title m-b-md">
                    Laravel Learning Forum {{$name}}
                    <?php
                 //   foreach ($pic_name as $pics) {
                 //       echo $pics->pic_name;
                 //   }  
                 //   foreach ($db_name as $db_list) {
                 //       echo $db_list->db_name;
                 //      echo "\n";
                 //   } 
                    ?>                    
                        
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                    <a href="https://laravel.com/docs/8.x/redis">DB: <?php             
                        foreach ($db_name as $db_list) {
                            echo $db_list->db_name;
                            echo " ";
                        }?>
                    </a>
                </div>
                <br>
                <hr>
                <form action="{{ route('master')}}" >
                    Name: <input type="text" name="name"><br>
                    E-mail: <input type="text" name="email"><br>
                    <input type="submit">  
  
                </form>
                <!-- React root DOM -->
                <div id="user">
                </div>
            
                <!-- React JS -->
                <script src="{{ asset('js/app.js') }}" defer></script>                
                <div class="content">
                <pre style="font-size:110%;color:tomato;">Copyright 2020 by Self. All Rights Reserved.
                </pre>
                </div>
            </div>
        </div>
   </body>
</html>
