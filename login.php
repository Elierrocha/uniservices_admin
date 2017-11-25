<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Uniservices.Online</title>
      <link rel="stylesheet" href="css/bootstrap.css"> 
      <link rel="stylesheet" href="css/estilo.css"> 
</head>

<body>
 <div class="container">
     <div class="col-md-6 card" style="margin-top: 10%; margin-left: 25%; ">
         <div style="text-align: center; padding: 10px;">
          <img src="imagenes/seguridad.png" alt="logo Uniservices"> 
         </div>
        <form class="form-signin">
          <h2 class="form-signin-heading" style="text-align: center;">Inicio de Sesion</h2> <br>
          <label for="inputEmail" class="sr-only">Usuario</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus> <br>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Recordarme
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button> <br>
        </form>
      </div>
    </div> <!-- /contenedor -->

</body>
</html>