
@extends('layouts.master')
@section('content')
    <main class="main-prod">
        <section class="top">
            <div class="carru">
                <!-- Container for the image gallery -->
                <div class="contenedor">
                  <!-- Full-width images with number text -->
                  <div class="part1">
                    <div class="mySlides">
                      <div class="numbertext">1 / 6</div>
                      <img src="https://m.media-amazon.com/images/I/61Co01IisgL._AC_UX679_.jpg" class="img-pro">
                    </div>
                    <div class="mySlides">
                      <div class="numbertext">2 / 6</div>
                      <img src="https://m.media-amazon.com/images/I/6190K2Z5sVL._AC_UX679_.jpg" class="img-pro">
                    </div>
                    <div class="mySlides">
                      <div class="numbertext">3 / 6</div>
                      <img src="https://m.media-amazon.com/images/I/51igHCfp8DL._AC_UX679_.jpg" class="img-pro">
                    </div>


                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                  </div>

                  <!-- Thumbnail images -->
                  <div class="row part2">
                    <div class="column img-row-pro">
                      <img class="demo cursor" src="https://m.media-amazon.com/images/I/61Co01IisgL._AC_UX679_.jpg" onclick="currentSlide(1)" alt="The Woods">
                    </div>
                    <div class="column img-row-pro">
                      <img class="demo cursor" src="https://m.media-amazon.com/images/I/6190K2Z5sVL._AC_UX679_.jpg" onclick="currentSlide(2)" alt="Cinque Terre">
                    </div>
                    <div class="column img-row-pro">
                      <img class="demo cursor" src="https://m.media-amazon.com/images/I/51igHCfp8DL._AC_UX679_.jpg" onclick="currentSlide(3)" alt="Mountains and fjords">
                    </div>

                  </div>
                </div>
              </div>
              <div class="desc">
                <h2>Camiseta polo UJED</h2>
                <h3>$ 499.00</h3>
                <select>
                    <option value="ECH">ECH</option>
                    <option value="CH">CH</option>
                    <option value="MD">MD</option>
                    <option value="GR">GR</option>
                    <option value="EG">EG</option>
                  </select>

                <p>Color</p>
                <div class="color-pro">
                    <img src="https://m.media-amazon.com/images/I/61E-h+715GL._AC_UY1100_.jpg" alt="">
                    <img src="https://m.media-amazon.com/images/I/71IShwDzWFL._AC_SX679._SX._UX._SY._UY_.jpg" alt="">
                    <img src="https://m.media-amazon.com/images/I/6160-qw1JAS._AC_SX385_.jpg" alt="">
                </div>
                <div class="buttons">
                    <button>Comprar</button>
                    <button class="addCar">Agregar al Carrito
                        <img src="../resources/img/shopping.svg" alt="">
                    </button>
                </div>
              </div>
        </section>
        <section class="bot">
            <div class="descripcion">
                <h3>Descripcion</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga impedit earum, dolor a recusandae minus mollitia deleniti ducimus ut quod consequatur, dignissimos cumque deserunt qui, quis facere dicta molestias laudantium!</p>
            </div>
            <div class="tallas">
                <h3>Guia de Tallas </h3>
                <img src="https://s3.amazonaws.com/cdn.freshdesk.com/data/helpdesk/attachments/production/66002329013/original/Q9kBS4OabgWLCFcDmiHnhYYHI0dWC3dz9Q.png?1606765333" alt="">
            </div>
        </section>
    </main>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
@endsection
