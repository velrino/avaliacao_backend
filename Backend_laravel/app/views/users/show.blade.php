<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exibir CRUD</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

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
        			<li><a href="#">Todos</a></li>
        			<li><a href="#">Novo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Informação</h4>
  		</div>

  		<div class="panel-body">
        @if (!empty($users))
  			<p>
          <!-- Exibir Titulo -->
  				Titulo: <strong>{{ $users->titulo }}</strong>
  			</p>
  			<p>
          <!-- Exibir Tamanho -->
  				Tamanho: <strong>{{ $users->tamanho }}</strong>
  			</p>
        @else
        <p>
          Não existe infomação.
        </p>
        @endif
        <a href="/users" class="btn btn-default">Voltar</a>
		</div>
	</div>
</body>
</html>