<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrinho</title>
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
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Produto</th>
            <th scope="col">Valor Unitário</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Valor Total</th>
            <th scope="col">Total</th>
            <th scope="col">Deletar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->produto->nome }}</td>
            <td>{{ $item->produto->valor }}</td>
            <td>{{ $item->quantidade }}</td>
            <td>{{ $item->quantidade * $item->produto->valor }}</td>
            <td></td>
            <td>
              <form action="{{ Route('delete', $item->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Deletar</button>
              </form>
            </td>
          </tr>
            @endforeach
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $total }}</td>
            </tr>
        </tbody>
      </table>
      <a href="{{route("confirmar")}}" type="submit" class="btn btn-primary">COMPRAR</a>
      <br><br>
</body>
</html>