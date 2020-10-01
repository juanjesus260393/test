<div style="background-color: #f9f9fb;">
                   {!!Form::open(['route'=>'complaint.store', 'method'=>'POST','id' => 'complaintregister'])!!}
    
                    <div class="form-group">
						{!!Form::label('npd','*Nombre(s):',['class'=>'lblform2'])!!}	
						{!!Form::text('name',null,['class'=>'inputform', 'required'])!!}
					</div>
    
                    <div class="form-group">
						{!!Form::label('ppd','*Apellido materno',['class'=>'lblform2'])!!}	
						{!!Form::text('am',null,['class'=>'inputform', 'required'])!!}
					</div>
				   
                    <div class="form-group">
						{!!Form::label('ppd','*Apellido paterno',['class'=>'lblform2'])!!}	
						{!!Form::text('ap',null,['class'=>'inputform', 'required'])!!}
					</div>
    
                    <div class="form-group">
						{!!Form::label('nppv','Genero',['class'=>'lblform2'])!!}
						<select name="gen" id="gen" class="inputform" required="true">
     					@foreach($gerder_list as $gender)
    					 <option value="{{ $gender->gender}}">{{ $gender->gender }}</option>
    					@endforeach
    					</select>	
					</div>

					<div class="form-group">
						{!!Form::label('nppv','Interes',['class'=>'lblform2'])!!}
						<select name="inte" id="inte" class="inputform" required="true">
    					<option value="Preparatoria">Preparatoria</option>
    					<option value="Licenciatura ">Licenciatura </option>
    					<option value="Posgrado">Posgrado</option>
    					</select>	
					</div>

					<div class="form-group">
						{!!Form::label('nppv','Opcion',['class'=>'lblform2'])!!}	
						<input type="text" name="opcion" id="opcion" required="true" class="inputform">
					</div>

					<div class="form-group">
						{!!Form::label('nppv','Edad',['class'=>'lblform2'])!!}	
						{!!Form::text('edad',null,['class'=>'inputform', 'required'])!!}
					</div>

					<div class="form-group">
						
						{!!Form::label('nppv','Estado civil',['class'=>'lblform2'])!!}
						<select name="ec" id="ec" class="inputform" required="true">
     					@foreach($status_list as $country)
    					 <option value="{{ $country->maritalstatus}}">{{ $country->maritalstatus }}</option>
    					@endforeach
    					</select>
					</div>
    
					<div class="form-group">
						{!!Form::label('name','E-mail',['class'=>'lblform2'])!!}	
						{!!Form::email('email',null,['class'=>'inputform', 'required'])!!}
					</div>

					<div class="form-group">
						{!!Form::label('email','Contraseña',['class'=>'lblform2'])!!}	
						{!!Form::text('pass',null,['class'=>'inputform', 'required'])!!}
					</div>
					{!!Form::submit('Registrar',['class'=>'btnform3'])!!}
					{!!Form::button('Limpiar',['class'=>'btnform3','onclick' => 'limpiarFormulario()'])!!}
 {!!Form::close()!!}    
</div>
