<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto Laravel</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
    </head>
    <body>
                      
        <h1><b>Cliente</b></h1>
        <br>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="">Panel</a></li>                  
            <li><a href="{{route('client.index')}}">Produtos</a></li>                  
            <li class="active">Alteração</li>
        </ol>              
    </div>          
</div>
<div class="row">  
    <br>
    <h4 id="center"><b>ALTERAÇÃO DOS DADOS DO PRODUTO</b></h4>
    <br> 
    <form method="post" 
    action="{{route('client.update', $client->id)}}" 
    enctype="multipart/form-data">
    {!! method_field('put') !!}
    {{ csrf_field() }}
    <div class="col-md-6">              
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" 
            class="form-control" 
            value="{{$client->name or old('name')}}"
            placeholder="Digite o novo nome">
        </div>
    </div>
</div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="number" name="phone" 
        class="form-control" 
        value="{{$client->phone or old('phone')}}"
        required="">
    </div>
</div> 
<div class="col-md-6">
    <div class="form-group">
        <label for="description">Descrição</label>
        <input type="text" name="description" 
        class="form-control" 
        value="{{$client->description or old('description')}}"
        >
        <div class="col-md-6">
            <div class="form-group">
                <label for="id_client">ID do Cliente</label>
                <input type="text" name="id_client" 
                class="form-control" 
                value="{{$client->id_client or old('id_client')}}"
                >
                <div class="col-md-6">
            <div class="form-group">
                <label for="type">Tipo de Conta</label>
                <input type="text" name="type" 
                class="form-control" 
                value="{{$client->type or old('type')}}"
                >
                <div class="col-md-6">
            <div class="form-group">
                <label for="value">Valor</label>
                <input type="text" name="value" 
                class="form-control" 
                value="{{$client->value or old('value')}}"
                >

        <div class="col-md-12">                   
            <button type="reset" class="btn btn-default">
                Limpar
            </button>
            <button type="submit" 
            class="btn btn-warning" id="black">
            Alterar
        </button>
    </div>
</form>             
</div>
</div>
</div>
</body>
</html>