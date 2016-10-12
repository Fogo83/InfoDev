<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <header class="header"></header>
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('cliente') }}">Ver todos Fornecedores</a></li>
        {{-- <li><a href="{{ URL::to('cliente/create') }}">Criar Clientes</a> --}}
        <li><a href="{{ URL::to('servicos/create') }}">Criar Servicos</a>
        <li><a href="{{ URL::to('servicos') }}">Ver todos Servicos</a>
      
 </ul>
   <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                   
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                </ul>  
</nav>

  <div class="panel panel-default">
  <div class="panel-heading">Facturas de Forncecedores</div>
  <div class="panel-body">


    
  </div>
</div>
 

    </h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-bordered table-condensed table-striped table-hover">
    <thead>
        <tr>
            <th id="element-container-Nome" style="cursor: pointer;">Nome Fornecedor<span></span></th>
            <th id="element-container-nome" style="cursor: pointer;">Endereco<span>&nbsp;↑</span></th>
            <th id="element-container-cnpj" style="cursor: pointer;">Telefone<span></span></th>
            <th id="element-container-contato" style="cursor: pointer;">Valor<span></span></th>

            <th id="element-container-status" class="center" style="width: 0.5em;"><i class="icon-filter" style="cursor: pointer; color: black; padding: 0.3em 0.5em 0.3em 0.5em;" data-rel="popover" data-placement="bottom" data-title="Adicionar Filtro" data-content="<span class=&quot;label label-success filter-label&quot; data-field=&quot;status&quot; data-value=&quot;1&quot;><i class=&quot;icon-check&quot; /> Cliente Ativo</span><br><span class=&quot;label label-danger filter-label&quot; data-field=&quot;status&quot; data-value=&quot;2&quot;><i class=&quot;icon-ban&quot; /> Cliente Inativo</span>" data-container="body" data-original-title="" title=""></i><i class="icon-ban" title="Cliente Inativo."></i><span></span></th>
          
          <span></span></th>
           
        </tr>
    </thead>


    <tbody>
 

    @foreach($clientes as $key => $value)
           
       
        <tr>
           
            <td class="right"> <a href="{{ URL::to('cliente/'. $value->id)}}">{{ $value->Nome_Fornecedor}}</a></td>
            <td>{{ $value->Endereco }}</td>
            <td>{{ $value->Telefone }}</td>
            <td>{{ $value->valor."$00"}}</td>
             
            <!-- we will also add show, edit, and delete buttons -->
            
     
              
             
          @if (Auth::user()->TipoUtilizador == 1)
          
          <td>

            <a class="glyphicon glyphicon-pencil""  title=" Editar" href="{{ URL::to('cliente/' . $value->id . '/edit') }}"></a>

            {{-- <a class="glyphicon glyphicon-eye-open" title=" Ver Ficheiro"  href="{{ url('storage/ficheiros')}}/{{ $value->Contrato }}"> </a> --}}

            {!! Form::open(['method' => 'DELETE','route' => ['cliente.destroy', $value->id] ,'style'=>'display:inline']) !!}

            {{-- {!! Form::submit('remover', ['class' => 'btn btn-danger']) !!} --}}


           <a class="glyphicon glyphicon-usd""  title="Pagamento" href="{{ URL::to('cliente/' . $value->id . '/edit') }}"></a>

           <button type="submit" class="btn  btn btn-white no-hover glyphicon icon-trash-o" Title="Remover" > <i class="glyphicon glyphicon-trash"></i></button>

            {!! Form::close() !!}
           </td>
         @endif  
           

        </tr>
    @endforeach
        <tr> <td colspan="3">
                 <b><font color="black">Total</b>
              </td>
              <td> <font color="red">{{ $soma."$00"}}</td>
        </tr>
     <a  id="buttons-page"  class="glyphicon glyphicon-plus"   title=" Adicionar"  href="{{ URL::to('cliente/create') }}"></a> 

   
    </tbody>
</table>
 
</div>


 <script src="{{ url('/js/app.js') }}"></script>

  
</body>
  <footer>
</html>

