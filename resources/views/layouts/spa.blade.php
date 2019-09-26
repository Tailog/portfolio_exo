<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title_site',"Potato Design")</title>

    @yield('css_link')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body id="top">

@yield('nav_bar')

@yield('banner')

@yield('about')

@yield('services')

@yield('choose_me')

@yield('portfolio')

@yield('contact')

@yield('footer')

@yield('js_script')

</body>
</html>
