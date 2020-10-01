<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- jQuery Plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/gifto.js"></script>

        <!-- estilos y fuentes -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link type="text/css" rel="stylesheet" href="css/main.css"/>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>

        <!-- //Nuevos estilos -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

        <link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
     @include('includes.headeren')
        
      @yield('content')  
        
    <footer>
  @include('includes.footer')
</footer>
    </body>
    </html>