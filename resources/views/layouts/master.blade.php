<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="../resources/css/inicio.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse pooo" id="navbarNav">
            <img src="../resources/img/Logos (2)/Fundacion-blanco-horizontal.png" alt="" class="logoF">
            <div class="buscador">
                <input type="text" placeholder="Buscar">
                <div class="buscar center">
                    <img src="../resources/img/search.svg" alt="">
                </div>
            </div>
            <div class="carrito">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Carrito</a>
                <img src="../resources/img/shopping.svg" alt="">
            </div>
            <div class="direccion">
                <a href="{{url('direcciones')}}" ">Direccion</a>
                <img src="../resources/img/distance.svg" alt="">
            </div>
            <div class="pedidos">
                <a href="{{url('pedidos')}}">Pedidos</a>
                <img src="../resources/img/box.svg" alt="">
            </div>
            <div class="usuario">
                <a href="{{url('/')}}">Hola, identificate</a>
                <img src="../resources/img/account.svg" alt="">
            </div>
          </div>
        </div>
      </nav>

      <!-- Button trigger modal -->


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Añadimos la clase "modal-lg" para un ancho más grande -->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Carrito de Compras</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="productosCar">
                    <div class="cardProdu">
                        <div class="imgP">
                            <img src="https://st.depositphotos.com/1372263/4280/i/450/depositphotos_42800789-stock-photo-black-polo-shirt-on-a.jpg" alt="">
                        </div>
                        <div class="det">
                            <h4>Camiseta Polo</h4>
                            <p>Talla: CH</p>
                            <p>Color: negra</p>
                            <div class="cant">
                                <button>
                                    <img src="../resources/img/subtract.svg" alt="">
                                </button>
                                <input type="text">
                                <button>
                                    <img src="../resources/img/add.svg" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="opt">
                            <img src="../resources/img/delete.svg" alt="">
                            <h3>$499</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-foote">
                <div class="subtotal">
                    <h5>Subtotal</h5>
                    <p>$499</p>
                </div>
                <div class="total">
                    <h2>Total</h2>
                    <p>$499</p>
                </div>
                <button type="button" class="btn">Continuar Compra</button>
            </div>
        </div>
    </div>
</div>


    <div class="categories">
        <div><a href="{{url('categoria')}}" ">Ropa</a></div>
        <div><a href="{{url('categoria')}}">Oficina</a></div>
        <div><a href="{{url('categoria')}}">Accesorios</a></div>
        <div><a href="{{url('categoria')}}">Botellas y Termos</a></div>
    </div>
  </header>

  @yield('content')

  <footer>
    <div class="prim">
        <a href="">Preguntas Frecuentes</a>
        <a href="">Metodos de Pago</a>
        <a href="">Facturacion</a>
        <a href="">Contacto</a>
    </div>
    <div class="sec">
        <p>¡Siguenos en las redes sociales de la UJED!</p>
        <div class="redes">
            <img src="../resources/img/redes/facebook.svg" alt="">
            <img src="../resources/img/redes/instagram.svg" alt="">
            <img src="../resources/img/redes/twitter.svg" alt="">
        </div>

    </div>
    <div class="ter center">
        <img src="../resources/img/Logos (2)/Logo UJED.png" alt="">
        <img src="../resources/img/Logos (2)/proujed.png" alt="">
    </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
