<html>
<head>
    <title>Servicos </title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('cliente') }}">Ver Clientes</a></li>
        <li><a href="{{ URL::to('cliente/create') }}">Criar Clientes</a>
        <li><a href="{{ URL::to('cliente/create') }}">Ver Factura</a>

    </ul>
</nav>

<div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading"></h4>


    <p class="list-group-item-text"><strong>Tipo:</strong>{{ $serv->Tipo }}</p>
     <p class="list-group-item-text"><strong>Tarifario:</strong>{{$serv->Tarifario}}</p>
  </a>
</div>
</body>
</html>