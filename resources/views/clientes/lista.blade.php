<html>
<head>
    <title>Cliente </title>
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
    </ul>
</nav>


<div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading"></h4>

     <p class="glyphicon glyphicon-usd"><strong></p>
    <p class="list-group-item-text"><strong>Endereco: </strong>{{ $det->Endereco }}</p>
     <p class="list-group-item-text"><strong>Telefone: </strong>{{ $det->Telefone }}</p>
  </a>
</div>

</body>
</html>