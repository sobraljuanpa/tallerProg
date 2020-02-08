<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDPI - Login</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="card text-white bg-secondary">
      <div class="card-body">
        <form action="doLogin.php" method="POST">
          <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control" placeholder="ejemplo@ejemplo.ej">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
        <?php
          if(isset($_GET["err"])) {
            echo("<label>Usuario/clave incorrectos.</label>");
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>