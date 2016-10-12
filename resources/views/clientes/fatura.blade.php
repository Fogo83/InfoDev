<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
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

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            
            <td>Nome Fornecedor</td>
            <td>Endereco</td>
            <td>Telefone</td>
            <td>Valor</td>
            

           
        </tr>
    </thead>


    <tbody>

    @foreach($clientes as $key => $value)
           
        <tr>
           
            <td><a href="{{ URL::to('cliente/'. $value->id)}}">{{ $value->Nome_Fornecedor}}</a></td>
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

           <button type="submit" class="btn btn-danger" Title="Remover" > <i class="glyphicon glyphicon-trash"></i></button>

            {!! Form::close() !!}
           </td>
         @endif  
           

        </tr>
    @endforeach
        <tr> <td colspan="3">
                 <b><font color="black">Total</b>
              </td>
              <td><font color="red">{{$soma."$00"}}</td>
        </tr>
     <a class="glyphicon glyphicon-plus"  title=" Adicionar"  title="Adicionar" href="{{ URL::to('cliente/create') }}"></a>
    </tbody>
</table>
 
</div>
 <script src="{{ url('/js/app.js') }}"></script>
 <div class="panel panel-default">
  <div class="panel-body">
   <font color="blue"> Gestao de Fornecedores
  </div>

  <tr><td colspan="4" style="background-color: white;"><div id="grid_contato"><table class="table table-bordered table-condensed table-striped table-hover"><thead><tr><th id="grid_contato-contato_principal" class="center" style="width: 5em;">Principal<span></span></th><th id="grid_contato-contato_nome">Nome<span></span></th><th id="grid_contato-contato_email">Email<span></span></th><th id="grid_contato-contato_telefone" style="width: 9em;">Telefone<span></span></th><th id="grid_contato-contato_celular" style="width: 9em;">Celular<span></span></th><th id="grid_contato-contato_outros" style="width: 4em;"><span></span></th></tr></thead><tbody><tr><td class="center" style="width: 5em;"><label class="checkbox middle" style="margin-left: -1.5em; margin-top: 5px;"><input type="checkbox" id="contato_principal[-1]" name="contato_principal[-1]" value="1" class="ace"><span class="lbl" title="" data-placement="top" data-rel="tooltip" data-original-title="Definir como um contato principal"></span></label></td><td><input type="text" autocomplete="off" id="contato_nome" name="contato_nome[-1]" value="" maxlength="255" style="width: 100%;"></td><td><input type="text" autocomplete="off" id="contato_email" name="contato_email[-1]" value="" maxlength="255" style="width: 100%;"></td><td style="width: 9em;"><input type="text" autocomplete="off" id="contato_telefone" name="contato_telefone[-1]" value="" maxlength="undefined" style="width: 8.5em;"></td><td style="width: 9em;"><input type="text" autocomplete="off" id="contato_celular" name="contato_celular[-1]" value="" maxlength="undefined" style="width: 8.5em;"></td><td style="width: 4em;"><input type="hidden" name="contato_outros[-1]" value=""><span class="btn btn-white icon icon-plus" data-rel="tooltip" title="" data-original-title="Detalhes"></span></td></tr><tr><td colspan="6" style="text-align: center;"> <span class="btn btn-white icon icon-plus" title="">&nbsp;Incluir Contato</span> </td></tr></tbody></table></div></td></tr>
  
</body>
  <footer>
</html>

