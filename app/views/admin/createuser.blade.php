<div class="row" style="margin-top: 20px">
	<div class="col-md-6 col-md-offset-2">
	<div class="row">
	<form role="form" method="post" action="{{ URL::to('/users') }}">
		<fieldset>
			<legend>Adicionar Usuário</legend>
			 <ul>
			  @foreach ($errors->all() as $e)
			  <li>{{ $e }}</li>
			  @endforeach
			 </ul>
		<div class="row">
		  <div class="form-group col-md-4">
		    <label for="nome">Nome</label>
		    <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome...">
		  </div>

		  <div class="form-group col-md-6">
		    <label for="sobrenome">Sobre Nome</label>
		    <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="Digite o sobrenome...">
		  </div>
		</div>
		<div class="row">  
		  <div class="form-group col-md-6">
		    <label for="email">E-mail</label>
		    <input type="email" name="email" class="form-control" id="email" placeholder="Digite o E-mail...">
		  </div>
		  <br>
		</div>
		<div class="row"> 
		  <div class="form-group col-md-4">
		    <label for="username">Nome de Usuário</label>
		    <input type="text" name="username" class="form-control" id="username" placeholder="Username...">
		  </div>
		</div>
		<div class="row">
		  <div class="form-group col-md-4">
		    <label for="password">Senha</label>
		    <input type="password" name="password" class="form-control" id="password" placeholder="Digite a senha...">
		  </div>
		</div>
		<div class="row">
		  <div class="form-group col-md-4">
		    <label for="password_confirmation">Confirmação da Senha</label>
		    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Enter email">
		  </div>
		</div>
		<div class="form-group col-md-10">
			<label>Nivel de Acesso</label>
			<br>
		<label class="checkbox-inline">
			  <input type="radio" id="inlineCheckbox1" value="1" name="nivelid"> Administrador
		</label>
		<label class="checkbox-inline">
			  <input type="radio" id="inlineCheckbox2" value="2" name="nivelid" checked> Usuário
		</label>
			<p class="help-block">Nivel de acesso do usuário do sistema.</p>
		</div>

		<div class="form-group col-md-10">
			<label>Status</label>
			<br>
		<label class="checkbox-inline">
			  <input type="radio" id="inlineCheckbox1" value="1" name="status"> Ativado
		</label>
		<label class="checkbox-inline">
			  <input type="radio" id="inlineCheckbox2" value="0" name="status" checked> Desativado
		</label>
			<p class="help-block">Status do usuário, caso desativado o mesmo não poderá efetuar login.</p>
		</div>


		

		
		<div class="row">
		<div class="col-md-10">
			<hr>
 		 <input type="submit" class="btn btn-default" value="Inserir">
 		 <input type="reset" class="btn btn-default" value="Limpar">
 		 </div>
 		</div>
 	</fieldset>	
	</form>
	</div>
	</div>
</div>