<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar CRUD</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<script>
function validarCampo() {
  /* variável ValorDoInput é igual a Id do campo "tamanho" */
var valorDoInput = document.getElementById("tamanho").value;

if (valorDoInput % 2 == 0) 
  /* Se o valor inserido no campo de entrada "tamanho", for Multiplo/Divisivel por Dois*/
  { }
else
{ /* Se Não fot ele reseta o formulário e exibe o Alert*/
  document.formulario.reset();
  alert("Por Favor! \nPreencha o campo Tamanho com um número multiplo de 2. :D ");

}}
</script>

	<style>
		body {
			width: 450px;
			margin: 50px auto;
		}
		.badge {
			float: right;
		}
	</style>
</head>
<body>
	<h1>Avaliação Back-End</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="http://www.velrino.com.br" target="a_blank" >Velrino</a>
  			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li><a href="/users">Todos</a></li>
        			<li><a href="/users/create">Novo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Editar usuario</h4>
  		</div>

  		<div class="panel-body">
        @if (!empty($users))
    			<form method="post" name="formulario" action="/users/update/{{ $users->id }}">
          <p>
            <!-- Campo Titulo -->
            <input value="{{ $users->titulo }}" type="text" name="titulo" placeholder="Titulo" class="form-control" required>
          </p>
          <p>
            <!-- Campo Tamanho -->
            <input value="{{ $users->tamanho }}" type="text" name="tamanho" id="tamanho" placeholder="Tamanho" class="form-control" required>
          </p>
          <!-- Botão de Salvar -->
          <input type="submit" value="Salvar Edição" onclick="validarCampo()" class="btn btn-success">
          @else
          <p>
            Não existe informação para este usuário
          </p>
          @endif
        <a href="/users" class="btn btn-default">Regresar</a>
      </form>
		</div>
	</div>

  @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
</body>
</html>