<!DOCTYPE html>
<html lang="es">
<!-- Head -->
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="css/main.css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
</head>
<!-- //Head -->

<body>

<h1 style="color: black">Hola {{session()->get('name')}}</h1>

<br>
<a href="{{ url('/') }}"><h1 style="color: black">logout</h1></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
</body>
</html>