<?php  
  $u = "";
  $clave = "";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alto Voltaje</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="banner">
  
  <!--****************************************************************************************************************************************-->
    <div class="login-wrap">
      <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">DATOS</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">INGRESO</label>
        <div class="login-form">
          <!--*****************************************************************  sign-in-htm *************************************************-->
          <form name="frmContacto" method="POST" action="enviarcorreo.php">
            <div class="sign-in-htm">
              <div class="group">
                <label for="cedula" class="label">CÉDULA</label>
                <input id="cedula" type="text" class="input" name="cedula" required autofocus minlength="7" maxlength="8">
              </div>
              <div class="group">
                <label for="nombre" class="label">NOMBRES</label>
                <input id="nombre" type="text" class="input" name="nombres" required minlength="4">
              </div>
              <div class="group">
                <label for="apellido" class="label">APELLIDOS</label>
                <input id="apellido" type="text" class="input" name="apellidos" required minlength="3">
              </div>
              <div class="group">
                <label for="telefono" class="label">TELÉFONO</label>
                <input id="telefono" type="text" class="input" name="telefono" required minlength="11" maxlength="11">
              </div>
              <div class="group">
                <label for="correo" class="label">CORREO</label>
                <input id="correo" type="text" class="input" name="correo" required>
              </div>
              <div class="group">
                <input type="submit" class="button" value="registrar" id="registrar" name="registrar">
              </div>
            </div>
          </form>
          <!--*****************************************************************  sign-in-htm *************************************************-->
          <div class="sign-up-htm"><br><br>
            <form name="frmLogin" method="POST" action="iniciar.php">
              <div class="group">
                <label for="user" class="label">USUARIO</label>
                <input id="user" type="text" class="input" name="u" required>
              </div>
              <div class="group">
                <label for="pass" class="label">CLAVE</label>
                <input id="pass" type="password" class="input" data-type="password" name="c" required>
              </div><br>
              <div class="group">
                <input type="submit" class="button" value="iniciar" id="iniciar" name="iniciar"><br>
              </div><br>
            </form>
          </div><!--sign-up-htm-->
        </div><!--Login-Form-->
      </div><!--Login-html-->
    </div><!--Login-Wrap-->
  <!--****************************************************************************************************************************************-->
    <script>
      function fomContacto(){
          location.reload();
      }
        function formLogin() {  
          location.reload();
      }
    </script>
  </body>

</html>






         