<html>
    <head>
        <title>Praktikum 2</title>
        <link rel="stylesheet" href="{{asset("css/materialize.min.css")}}">
        <link rel="stylesheet" href="{{asset("css/ionicons.min.css")}}">
        <link rel="stylesheet" href="{{asset("css/nav.css")}}">
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/materialize.min.js"></script>
    </head>
<body>
    <nav style="background-color: #96281B;">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo">Praktikum 2</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="ion-drag" style="margin-top: 17px;"></i></a>
            <ul class="right hide-on-med-and-down"> 
            </ul>
        </div>
    </nav>
    @yield('container')

    <script>
        $(".button-collapse").sideNav();
    
    </script>
</body>

</html>