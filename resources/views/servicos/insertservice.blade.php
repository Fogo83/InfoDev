

<!DOCTYPE html>
<html>
<head>
    <title>Cliente</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    
</head>
<body>



<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
     
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('cliente') }}">Ver todos Clientes</a></li>
        <li><a href="{{ URL::to('servicos/create') }}">Criar Clientes</a>
    </ul>
</nav>

<h3> Criar Servicos</h3>

<!-- if there are creation errors, they will show here -->


{{ Form::open(array('url' => 'servicos')) }}

    <div class="form-group" >
        {{ Form::label('Nome', 'Nome') }}
        {{ Form::text('Nome' ,'', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Tipo', 'Tipo') }}
        {{ Form::text('Tipo','',array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Tarifario', 'Tarifario') }}
        {{ Form::text('Tarifario','',array('class' => 'form-control')) }}
    </div>

    

    {{ Form::submit('Criar Servicos!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>