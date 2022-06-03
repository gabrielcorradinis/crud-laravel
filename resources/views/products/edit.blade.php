<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produto</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<!--<form action="{{route('update_product', ['id'=>$product->id])}}" method="POST">
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
</form>-->

<nav class="navbar navbar-light navbar-expand-md">
    <div class="container"><a class="navbar-brand" href="#"
                              style="background: #ad4900;filter: blur(1px);color: rgba(255,255,255,0.9);">inDev.</a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            </ul>
        </div>
    </div>
</nav>
<section class="d-xl-flex justify-content-xl-center align-items-xl-center position-relative py-4 py-xl-5"
         style="height: 100vH;">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card mb-5">
                    <div class="card-body p-sm-5">
                        <h2 class="text-center mb-4">Edição de Produto</h2>
                        <form action="{{route('update_product', ['id'=>$product->id])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3"><input class="form-control" type="text" id="name-2" name="name"
                                                     placeholder="Nome do produto" value="{{old('name', $product->name)}}"></div>
                            <div class="mb-3"><input class="form-control" type="text" id="name-4" name="price_cost"
                                                     placeholder="Preço de custo" value="{{old('name', $product->price_cost)}}"></div>
                            <div class="mb-3"><input class="form-control" type="text" id="name-5" name="price_sale"
                                                     placeholder="Preço de venda" value="{{old('name', $product->price_sale)}}"></div>
                            <div class="mb-3"><input class="form-control" type="text" id="name-6" name="qtde"
                                                     placeholder="Quantidade" value="{{old('name', $product->qtde)}}"></div>
                            <div>
                                <button class="btn btn-primary d-block w-100" type="submit"
                                        style="background: rgba(173,73,0,0.95);border-style: none;">Editar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="text-center" style="background: #ad4900;">
    <div class="container text-white py-4 py-lg-5">
        <ul class="list-inline">
            <li class="list-inline-item me-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                     class="bi bi-linkedin text-light">
                    <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
                </svg>
            </li>
            <li class="list-inline-item me-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                     class="bi bi-github text-light">
                    <path
                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                </svg>
            </li>
            <li class="list-inline-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                     class="bi bi-instagram text-light">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                </svg>
            </li>
        </ul>
        <p class="mb-0">Gabriel Corradini - 2022</p>
    </div>
</footer>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
