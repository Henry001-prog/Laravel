<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto Laravel</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style-home.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
</head>
<body>
    <!--<div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="">Panel</a></li>                  
                            <li><a href="{{route('client.index')}}">Produtos</a></li>                  
                            <li class="active">Cadastro</li>
                        </ol>              
                    </div>          
                </div>-->

    <form method="post" action="{{route('client.store')}}" 
                          enctype="multipart/form-data"
>
{{ csrf_field() }}
<p align="center"><br/>
    <font face="Arial" size="4">Nome: <input name="name" class="form-control" type="text" /><br/></br/>
        Telefone: <input name="phone" class="form-control" type="text" /><br/><br/>
        
        <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <input type="text" name="description" 
                        class="form-control" 
                        required>
                    </div>
                </div>
                <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_client">ID do Cliente</label>
                                <input type="text" name="id_client" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type">Tipo de Conta</label>
                                <input type="text" name="type" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="value">Valor</label>
                                <input type="text" name="value" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>

        <button type="submit" class="btn btn-warning" id="black">Cadastrar
        </button></font>
    </form>        
</body>
</html>
