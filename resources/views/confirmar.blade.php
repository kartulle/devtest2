<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Confirmação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a6a989f522.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light px-md-5">
        <a href="#" class="navbar-brand">Petiko</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ Route("home") }}">Home</a>
                <a class="nav-link" href="{{ Route("cadastrar") }}">Cadastrar</a>
            </div>
        </div>
        <a href="{{ Route('carrinho') }}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>
    <div class="d-flex justify-content-center">
    <form action="" method="post">
        @csrf
        <br>
        <label for="nome">Nome</label><br>      
            <input class="col-sm-15 col-form-label" type="text" name="nome" placeholder="Ex. Alex da Silva"><br>
            <label for="cep">CEP</label><br>
            <input class="col-sm-15 col-form-label" type="number" name="cep" placeholder="insira o CEP" id="cep"><br>
            <label for="bairro">Bairro</label><br>
            <input class="col-sm-15 col-form-label" type="text" name="bairro" placeholder="Bairro" id="bairro"><br>
            <label for="cidade">Cidade</label><br>
            <input class="col-sm-15 col-form-label" type="text" name="cidade" placeholder="Cidade" id="cidade"><br>
            <label for="logradouro">Logradouro</label><br>
            <input class="col-sm-15 col-form-label" type="text" name="logradouro" placeholder="Logradouro" id="logradouro"><br>
            <label for="estado">Estado</label><br>
            <input class="col-sm-15 col-form-label" type="text" name="estado" placeholder="Estado" id="estado"><br><br>
        </form>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <button type="submit" class="btn btn-primary">Confirmar Endereço</button>
    </div>
</body>
<script>
    
    $('#cep').blur(function(){
        var cep = $('#cep').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: '/carrinho/confirmar/CEP/' + cep,
            method: 'POST',
            dataType: 'json',
            data: cep,
            success: function(response){
                $('#cidade').val(response['cidade']);
                $('#bairro').val(response['bairro']);
                $('#logradouro').val(response['logradouro']);
                $('#estado').val(response['estado']);
            },
            error: function(){
                $('#cidade').val('');
                $('#bairro').val('');
                $('#logradouro').val('');
                $('#estado').val('');
            }
        });
    });

</script>
</html>