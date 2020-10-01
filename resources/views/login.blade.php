<!DOCTYPE html>
<html lang="es">
<!-- Head -->
<head>
<title>Login</title>
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
<div style="background-color: #f9f9fb;">
                   {!!Form::open(['route'=>'complaint.create', 'method'=>'GET','id' => 'complaintregister'])!!}
    
					<div class="form-group">
						{!!Form::label('name','E-mail',['class'=>'lblform2'])!!}	
						{!!Form::email('email',null,['class'=>'inputform', 'required'])!!}
					</div>

					<div class="form-group">
						{!!Form::label('email','Contraseña',['class'=>'lblform2'])!!}	
						{!!Form::text('pass',null,['class'=>'inputform', 'required'])!!}
					</div>
					{!!Form::submit('Iniciar Session',['class'=>'btnform3'])!!}
					{!!Form::button('Limpiar',['class'=>'btnform3','onclick' => 'limpiarFormulario()'])!!}
 {!!Form::close()!!}    
</div>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
</body>
</html>