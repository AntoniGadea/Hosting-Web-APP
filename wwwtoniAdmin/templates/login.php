<div class="login text-center bg-light p-5">
<form action="../src/procesarLogin.php" method="POST">
  <div class="form-group">
    <label for="email">Email: </label>
    <input name="email" type="text" class="form-control" placeholder="email@domain.com" required>
  </div>
  <div class="form-group">
    <label for="password">Contraseña: </label>
    <input name="password" type="password" class="form-control" placeholder="******" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>