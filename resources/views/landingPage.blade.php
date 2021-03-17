<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <!-- Scripts -->
    <script src="https://raw.githubusercontent.com/anmanhcong/football/master/public/js/app.js" defer></script>

    <!-- Styles -->
    <link href="https://raw.githubusercontent.com/anmanhcong/football/master/public/css/app.css" rel="stylesheet">
    <link href="http://livefootball.top/static/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

</head>
<body class="layout-wrapper ">
    <div class="container">
       <div class="wrapper">
           <div class="page-left">
               <div class="logo">
                   <span class="logo-live">LIVE</span>
                   <span class="logo-football">FOOTBALL</span>
               </div>
               <div class="ball">
                   <div class="ball-line">
                       <img src="{{asset('image/ball.png')}}" class="google-play">
                       <span class="ball-text">GOAL ALERTS</span>
                   </div>
                   <div class="ball-line">
                       <img src="{{asset('image/ball.png')}}" class="google-play">
                       <span class="ball-text">MATCH STATISTICS</span>
                   </div>
                   <div class="ball-line">
                       <img src="{{asset('image/ball.png')}}" class="google-play">
                       <span class="ball-text"> HEAD-TO-HEAD DATA</span>
                   </div>
                   <div class="ball-line">
                       <img src="{{asset('image/ball.png')}}" class="google-play">
                       <span class="ball-text">LIVE LEAGUE TABLES</span>
                   </div>
                   <div class="ball-line">
                       <img src="{{asset('image/ball.png')}}" class="google-play">
                       <span class="ball-text">BREAKING NEWS</span>
                   </div>
                   <div class="ball-line">
                       <img src="{{asset('image/ball.png')}}" class="google-play">
                       <span class="ball-text">DOWNLOAD WALLPAPERS</span>
                   </div>
               </div>
           </div>
           <div class="right position-relative">
               <div class="store">
                   <img src="{{asset('image/google.png')}}" class="google-play">
                   <img src="{{asset('image/app_store.png')}}" class="app_store">
               </div>
              <div class="device">
                  <img src="{{asset('image/team.png')}}" class="team">
                  <img src="{{asset('image/mobile.png')}}" class="mobile">
                  <img src="{{asset('image/shoot.png')}}" class="shoot">
              </div>
           </div>
       </div>
    </div>
</body>
</html>
