<html>
<head>
    <title>Gestao de Clientes</title>
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

<h1>Editar{{  $det->name }}</h1>

<!-- if there are creation errors, they will show here -->


{{ Form::model($det, array('route' => array('cliente.update', $det->id), 'method' => 'PUT','class'=>"form-horizontal")) }}

    <div class="form-group col-md-4" >
         {{ Form::label('Nome_Fornecedor', 'Nome_Fornecedor') }}
        {{ Form::text('Nome_Fornecedor' ,$det->Nome_Fornecedor, array('class' => 'form-control', 'readonly')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Endereco', 'Endereco') }}
        {{ Form::text('Endereco',$det->Endereco,array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
         {{ Form::label('Telefone', 'Telefone') }}
        {{ Form::text('Telefone',$det->Telefone ,array('class' => 'form-control col-xs-6 col-sm-3')) }}
    </div>

     <div class="form-group">   
         {{ Form::label('valor', 'valor') }}
        {{ Form::text('valor',$det->valor."$00" ,array('class' => 'form-control' , 'readonly', 'style'=>'size:100px')) }}
    </div>


    <div class="form-group">
    {!! Form::label('Contrato') !!}
    {!! Form::file('image', null) !!}
</div>

    {{ Form::submit('Editar Cliente!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>