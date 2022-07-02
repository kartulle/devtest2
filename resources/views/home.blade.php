<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a6a989f522.js" crossorigin="anonymous"></script>
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
    @if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    <div class="container">
        <div class="row">
            @foreach ($data as $item)
            <div class="col-3 my-5">
                <div class="card">
                    <img src="./images/{{ $item->foto }}" "card-img-top" />
                    <div class="card-body">
                        <h6 class="card-title">{{ $item->nome }}</h6>
                        <h3>{{ $item->valor }}</h3>
                        <form action="{{ Route('store_carrinho', $item->id) }}" method="post">
                        @csrf
                        <input type="number" name="quantidade">
                        <button class="btn btn-sm btn-secondary">Adicionar Item</button>
                    </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>