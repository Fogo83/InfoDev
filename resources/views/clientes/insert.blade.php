<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
    <title>Cliente</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <link rel="shortcut icon" type="image/x-icon" href="https://fatdev.faturasimples.com.br/nfse/img/favicon.ico"> --}}
        {{-- <link rel="apple-touch-icon" href="https://fatdev.faturasimples.com.br/nfse/img/apple-touch-icon.png"> --}}
        <link rel="apple-touch-icon" sizes="57x57" href="https://fatdev.faturasimples.com.br/nfse/img/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://fatdev.faturasimples.com.br/nfse/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://fatdev.faturasimples.com.br/nfse/img/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://fatdev.faturasimples.com.br/nfse/img/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://fatdev.faturasimples.com.br/nfse/img/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="https://fatdev.faturasimples.com.br/nfse/img/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://fatdev.faturasimples.com.br/nfse/img/apple-touch-icon-152x152.png">
        <link rel="stylesheet" href="https://fatdev.faturasimples.com.br/4a20f029999d499f586ebce41fe9b059.css?v=1.0a596">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('cliente') }}"></a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('cliente') }}">Ver todos Fornecedores</a></li>
        <li><a href="{{ URL::to('cliente/create') }}">Criar Clientes</a>
    </ul>
</nav>







<h3>Enserir Faturas Fornecedores</h3> <hr>

<!-- if there are creation errors, they will show here -->

{{ Form::open(array('url' => 'cliente', 'enctype'=>'multipart/form-data')) }}



    <div class="theme-onion">
        {{ Form::label('Nome_Fornecedor', 'Nome Fornecedor *') }}
        {{ Form::text('Nome_Fornecedor' ,'', array('class' => 'form-control','required')) }}
    </div>
    
<div class="theme-onion">

 {{-- {{ Form::label('Tipo_Servico', 'TipoServico') }}<br> --}}
 {{-- {{ Form::select('feeling', array( --}}
   {{-- 'Serviços de Voz' => array('Aviso de Chamada em Espera', 'Chamadas em espera'), --}}
   {{-- 'Serviços de dados' => array('Acesso à Internet (3G/WAP/EDGE) ', 'Net N@ Mon 3G '), --}}
{{-- ))}}--> --}}

</div>
    <div class="form-group">
        {{ Form::label('Endereco', 'Endereco') }}
        {{ Form::text('Endereco','',array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Telefone', 'Telefone') }}
        {{ Form::text('Telefone','',array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('Nu_Factura ', 'Numero Factura ') }}
        {{ Form::text('Nu_Factura ','',array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('valor ', 'valor') }}
        {{ Form::text('Nu_Factura ','',array('class' => 'form-control' )) }}
    </div>


 <div class="form-group">
    {!! Form::label('Fatura') !!}
    {!! Form::file('image', null) !!}
</div>

  

    {{ Form::submit('Enserir Fatura!', array('class' => 'btn btn-info')) }}

{{ Form::close() }}
</div>
</body>
</html>