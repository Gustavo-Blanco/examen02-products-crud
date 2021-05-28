<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <title>Products</title>
</head>
<body>
    <main style="height:90vh;">
        <nav class="header-background navbar navbar-expand-lg navbar-light shadow p-2">
            <div class="container-fluid">
                <div class="container d-flex">
                    <a class="navbar-brand text-white" href="/home">Home</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto">
                            {{-- <li class="nav-item">
                                <a class="nav-link text-white active" aria-current="page" href="/products">Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white active" href="/products/create">New Product</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
            @yield('content')
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
            <div class="shadow p-5">
                <div class="col-md-12 text-center border-bottom">
                    <h2>Crud application</h2>
                    <i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque omnis consequatur delectus optio totam quos?</i><br/>
                    <i>Web page made by Elsin Drafuz | Gustavo Blanco | Yeridi Crhis</i>
                    <div class="d-flex justify-content-evenly mt-4">
                        <a href=""><i class="fab fa-facebook-f fs-3"></i></a>
                        <a href=""><i class="fab fa-instagram fs-3"></i></a>
                        <a href=""><i class="fab fa-twitter fs-3"></i></a>
                        <a href=""><i class="fab fa-github fs-3"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    @stack('js')
</body>

</html>
