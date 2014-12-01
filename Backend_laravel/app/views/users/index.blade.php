<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD em Lavarel</title>
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
        			<li class="active"><a href="/users">Todos</a></li>
        			<li><a href="/users/create">Novo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Lista de usuarios</h4>
  		</div>

  		<div class="panel-body">
    		<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Titulo</th>
						<th>Tamanho</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($avalicao_backend as $avalicao_backend)
						<tr>
							<td>{{ $avalicao_backend->id }}</td>
							<td>{{ $avalicao_backend->titulo }}</td>
							<td>{{ $avalicao_backend->tamanho }}</td>
							<td>
								<a href="/users/show/{{ $avalicao_backend->id }}"><span class="label label-info">Ver</span></a>
								<a href="/users/edit/{{ $avalicao_backend->id }}"><span class="label label-success">Editar</span></a>
								<a href="{{ url('/users/destroy',$avalicao_backend->id) }}"><span class="label label-danger">Eliminar</span></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
  	</div>

  	@if(Session::has('message'))
	    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
	@endif
</body>
</html>