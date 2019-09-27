<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto Laravel</title>
        
        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" /> 
        

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
        <script src="{{URL::asset('js/lightbox.js')}}"></script>
</head>
<body>
    <a href="{{route('client.create')}}" 
                           class="btn btn-default btn-sm pull-right">
                            <span class="glyphicon glyphicon-plus"></span> Adicionar</a>
                        <a href="" 
                           class="btn btn-default btn-sm pull-right">
                            <i class="fa fa-book"></i> Relatório</a>
                        <div id="pesquisa" class="pull-right">
                            <form class="form-group" method="post" 
                                  action="#">                                   
                                <input type="text" name="pesquisar" 
                                       class="form-control input-sm pull-left" 
                                       placeholder="Pesquisar por nome..." required> 
                                <button class="btn btn-default btn-sm pull-right" 
                                        id="color"> 
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </form>
                        </div>
                    

     <h4 id="center"><b>CLIENTES CADASTRADOS ({{$total}})</b></h4>
        <br>
        <div class="table-responsive">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th id="center">Código</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Descrição</th>
                        <th>ID do Cliente</th>
                        <th>Tipo</th>
                        <th>Valor</th>              
                    </tr>
                </thead>
                </table>
                </div>
                
                    @foreach($clientes as $cliente)
                    <tr class="all">
                        <font class="cod"><td id="center">{{$cliente->id}}</td></font>
                        <td class="no" title="Nome">{{$cliente->name}}</td>
                        <td class="te" title="Telefone">{{$cliente->phone}}</td>
                        <td class="des" title="Descrição" id="center">{{$cliente->description}}</td></tr>
                        <td class="idc" title="ID" id="center">{{$cliente->id_client}}</td>
                        <td class="tip" title="Tipo">{{$cliente->type}}</td>
                        <td class="val" title="Valor">R$ {{number_format($cliente->value, 2,',','.')}}</td>    
                        <!--<td title="Descrição">{{$cliente->description}}</td>
                        <td title="Quantidade" id="center">{{$cliente->quantity}}</td>
                        <td title="Preço">R$ {{number_format($cliente->price, 2,',','.')}}</td>--> 
                        <!--<td id="center">
                            <a href="{{URL::asset('clientes/'. '1' . $cliente->imagem)}}" 
                             data-lightbox="{{URL::asset('clientes/'. '1' . $cliente->imagem)}}">
                             <img src="{{URL::asset('clientes/'. $cliente->imagem)}}" />-->
                         
                         <td id="center">
                            <a class="c" href="{{route('client.edit', $cliente->id)}}" 
                             data-toggle="tooltip" 
                             data-placement="top"
                             title="Alterar"><i class="fa fa-pencil"></i></a>
                             &nbsp;<form style="display: inline-block;" method="POST" 
                             action="{{route('client.destroy', $cliente->id)}}"                                                        
                             data-toggle="tooltip" data-placement="top"
                             title="Excluir" 
                             onsubmit="return confirm('Confirma exclusão?')">
                             {{method_field('DELETE')}}{{ csrf_field() }}                      

                             <button type="submit" style="background-color: #fff">
                                <a><i class="fa fa-trash-o"></i></a>                                                   
                            </button></form></td><br/>               
                        
                        @endforeach
                    
                
</body>
</html>
        
 


