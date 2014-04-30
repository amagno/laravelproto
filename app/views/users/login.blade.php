{{ Form::open(array('url'=>'login', 'class'=>'form-signin')) }}
<fieldset>
<legend>Login</legend>
  <ul>
 	@foreach ($errors->all() as $e)
		<li style="color: red">{{ $e }}</li>
	@endforeach
  </ul>


{{ Form::label('Usuário') }}
{{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
{{ Form::label('Senha') }}
{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}

{{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))}}


</fieldset>
{{ Form::close() }}
