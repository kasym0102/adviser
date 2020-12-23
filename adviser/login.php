<html>
  <head>
    <title>$Title$</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </head>
  <body class="bg-secondary">
  <div class="row justify-content-center mt-5">
  <div class="col-xl-6 col-sm-8">
  <div class="card shadow-lg">
      <div class="card-block">
              <h2 class="card-header text-center">adviser.iitu.kz</h2>
              <?php if(isset($_GET['error'])) {?>
                        <div class="alert alert-danger" role="alert">
                          Authorization Error
                        </div>       
                        <?php } ?>
          <div class="card-body">
              <div class="row justify-content-md-center">
                  <div class="col-md-5">
                      <form class="mt-3" action="process.php" method="post">
                          <div class="form-group">
                              <input type="text" name="username" id="username" class="form-control" value="" placeholder="Логин" autocomplete="username">
                          </div>
                          <div class="form-group">
                              <input type="password" name="password" id="password" value="" class="form-control" placeholder="Пароль" autocomplete="current-password">
                          </div>
                          <div class="rememberpass mt-3">
                              <input type="checkbox" name="rememberusername" id="rememberusername" value="1">
                              <label for="rememberusername">Запомнить логин</label>
                          </div>
                                  <button type="submit" name="loginBtn" class="btn btn-primary btn-block mt-3">Вход</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  </div>
  </body>
</html>