<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produto</title>
</head>
<body>
<form action="{{route('update_product', ['id'=>$product->id])}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Nome</label>
    <br>
    <input type="text" name="name" value="{{old('name', $product->name)}}">
    <br>
    <label for="">Preço de custo</label>
    <br>
    <input type="text" name="price_cost" value="{{old('name', $product->price_cost)}}">
    <br>
    <label for="">Preço de Venda</label>
    <br>
    <input type="text" name="price_sale" value="{{old('name', $product->price_sale)}}">
    <br><label for="">Quantidade</label>
    <br>
    <input type="text" name="qtde" value="{{old('name', $product->qtde)}}">
    <br>
    <button>Editar</button>

</form>
</body>
</html>
