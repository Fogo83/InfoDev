<html>
<head>
    <title>Gestao de Servico</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('cliente') }}">Ver todos Clientes</a></li>
        <li><a href="{{ URL::to('cliente/create') }}">Criar Clientes</a>
    </ul>
</nav>

<h1>Editar{{  $serv->name }}</h1>

<!-- if there are creation errors, they will show here -->


{{ Form::model($serv, array('route' => array('servicos.update', $serv->id), 'method' => 'PUT')) }}

    <div class="form-group">
         {{ Form::label('Nome', 'Nome') }}
        {{ Form::text('Nome' ,$serv->Nome, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Tipo', 'Tipo') }}
        {{ Form::text('Tipo',$serv->Tipo, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
         {{ Form::label('Tarifario', 'Tarifario') }}
        {{ Form::text('Tarifario',$serv->Tarifario ,array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Editar Servico!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>