<link rel="stylesheet" href="./css/formularios.css">
<div class="clearfix"></div>


<div class="login-page">
  <div class="form">
    <form method="POST" action="./clases/ingresar.php" class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="?pagina=vistaRegister">Sign In</a></p>
    </form>
    <form class="login-form" method="POST" action="./clases/ingresar.php" class="register-form">
      <input type="text" placeholder="username" name="email"/>
      <input type="password" placeholder="password" name="password"/>
      <button><!--<a href="?pagina=vistaLogin" style="color: white;text-decoration: none;">Iniciar Sesion</a>-->Iniciar Sesion</button>
      <p class="message">No estas registrado? <a href="?pagina=vistaRegister">Create una cuenta</a></p>
    </form>
  </div>
</div>