
@extends('layouts.master')
@section('content')
  <main class="main-dir">
    <section class="dir-top">
        <h2>Mis Direcciones</h2>
        <button>
            Añadir una Direccion
            <img src="../resources/img/add.svg" alt="">
        </button>
    </section>
    <section class="dir-bot">
        <div class="card-dir">
            <h5>Oscar Diaz</h5>
            <p>C. Constitución 404, Zona Centro, 34000 Durango, Dgo.</p>
            <div class="tel">
                <b>Numero de Telefono:</b>
                <p>618 166 9573</p>
            </div>
            <div class="opt">
                <a href="">Editar</a>
                <a href="">Eliminar</a>
            </div>
        </div>
        <div class="card-dir">
            <h5>Oscar Diaz</h5>
            <p>C. Constitución 404, Zona Centro, 34000 Durango, Dgo.</p>
            <div class="tel">
                <b>Numero de Telefono:</b>
                <p>618 166 9573</p>
            </div>
            <div class="opt">
                <a href="">Editar</a>
                <a href="">Eliminar</a>
            </div>
        </div>
    </section>
  </main>

@endsection

