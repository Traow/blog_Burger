<!doctype html>
<html data-theme="dracula" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('partials.nav')


<style>
    .hero{
        background-image: 
        url("https://duyt4h9nfnj50.cloudfront.net/resized/59ffb80dedc07b46ebe363a596f738a7-w2880-a6.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        opacity: 100%;
    }   
</style>

<section class="hero is-medium">
  <div class="hero-body">
  <p class="subtitle" style="font-size: 80px; color:white; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
      Tra see on
    </p>
    <p class="title" style="font-size: 80px; color:white; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
      Mr.Burx
    </p>
  </div>
</section>


@yield('content')
</body>
</html>
