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
    <nav>
        <img src="../resources/img/Logos (2)/Fundacion-blanco-horizontal.png" alt="" class="logoF">
        <div class="buscador">
            <input type="text" placeholder="Buscar">
            <div class="buscar center">
                <img src="../resources/img/search.svg" alt="">
            </div>
        </div>
        <div class="carrito">
            <a href="">Carrito</a>
            <img src="../resources/img/shopping.svg" alt="">
        </div>
        <div class="direccion">
            <a href="">Direccion</a>
            <img src="../resources/img/distance.svg" alt="">
        </div>
        <div class="pedidos">
            <a href="">pedidos</a>
            <img src="../resources/img/box.svg" alt="">
        </div>
        <div class="usuario">
            <a href="">Hola, identificate</a>
            <img src="../resources/img/account.svg" alt="">
        </div>
    </nav>
    <div class="categories">
        <div><a href="">Ropa</a></div>
        <div><a href="">Oficina</a></div>
        <div><a href="">Accesorios</a></div>
        <div><a href="">Botellas y Termos</a></div>
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
