<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/estilo-login.css">
    <title>Pantalla de Login</title>
  </head>
  <body>
    <div class="container-sides">
      <div class="left-side">
        <img src="../resources/img/Logos (2)/Fundacion-blanco-horizontal.png" alt="Logo">
        <h1>Tienda en Linea</h1>
      </div>
      <div class="right-side">
        <form action="{{url('inicio')}}" method="get">
          <div class="input-log">
            <!-- Aqui va el icono de usuario -->
            <input type="email" name="email" placeholder=" Correo electrónico" />
          </div>
          <div class="input-log">
            <!-- Aqui va el icono de contraseña -->
            <input type="password" name="password" placeholder=" Contraseña" />
          </div>
          <input type="submit" value="Iniciar sesión" >
        </form>
        <a href="{{url('registro')}}">¿Crear una Cuenta?</a>
      </div>
    </div>
  </body>
</html>
