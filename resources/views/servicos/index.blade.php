<!DOCTYPE html>
<html>
<head>
    <title>Servicos</title>
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
        <li><a href="{{ URL::to('servicos/create') }}">Criar Servicos</a>
        <li><a href="{{ URL::to('servicos') }}">Ver todos Servicos</a>

    </ul>
</nav>

<h1>Todos Servicos</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            
            <td>Nome</td>
            <td>Tipo</td>
            <td>Tarifario</td>
           
        </tr>
    </thead>
    <tbody>
    @foreach($serv as $key => $value)
        <tr>
            
            <td><a href="{{ URL::to('servicos/'. $value->id)}}">{{ $value->Nome }}</a></td>
            <td>{{ $value->Tipo}}</td>
            <td>{{ $value->Tarifario}}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
             
           
                   
              
              @if (Auth::user()->TipoUtilizador == 1)
                   

            <a class="glyphicon glyphicon-pencil""  title=" Editar" href="{{ URL::to('servicos/' . $value->id . '/edit') }}"></a>  


                {!! Form::open(['method' => 'DELETE','route' => ['servicos.destroy', $value->id] ,'style'=>'display:inline']) !!}

            {{-- {!! Form::submit('remover', ['class' => 'btn btn-danger']) !!} --}}

                <button type="submit" class="btn btn-danger" Title="Remover" > <i class="glyphicon glyphicon-trash"></i></button>

                  {!! Form::close() !!}
                @endif  <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
            
             


            </td>
        </tr>
    @endforeach
   

</footer>
    </tbody>
</table>
 
</div>
</body>
  <footer>
 
</html>