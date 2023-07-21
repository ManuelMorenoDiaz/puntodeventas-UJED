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
        <h2>¡Registrate!</h2>
        <form action="{{url('inicio')}}" method="get">
          <div class="input-log">
            <input type="text" name="nombre" placeholder="Nombre" />
          </div>
          <div class="input-log-ape">
            <div class="input-lo1">
              <input type="text" name="apellidoP" placeholder=" Apellido Paterno" />
            </div>
            <div class="input-lo1">
              <input type="text" name="apellidoM" placeholder=" Apellido Materno" />
            </div>
          </div>
          <div class="input-log">
            <input type="email" name="email" placeholder=" Correo electrónico" />
          </div>
          <div class="input-log">
            <!-- Aqui va el icono de contraseña -->
            <input type="password" name="password" placeholder=" Contraseña" />
          </div>
          <input type="submit" value="Registrate" >
        </form>
        <a href="{{url('/')}}" class="aL">Ya tengo una cuenta</a>

        <div class="logos">
          <img src="../resources/img/Logos (2)/proujed.png" alt="">
          <img src="../resources/img/Logos (2)/Logo_de_la_Universidad_Juárez_del_Estado_de_Durango.png" alt="">
        </div>
      </div>
    </div>
  </body>
</html>
