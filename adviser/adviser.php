<?php
  session_start();
  if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
  require_once 'db.php';
?>
<html>
  <head>
    <title>$Title$</title>
    <?php include('layout.php'); ?>

  </head>
<body class="bg-secondary">
  <?php include('nav.php'); ?>
<br><br>

  <div class="container mt-5">
    <header id="page-header" class="row">
      <div class="col-12 pt-3 pb-3">
        <div class="card shadow-lg">
          <div class="card-body">
            <div class="mr-auto"><div class="page-context-header"><div class="page-header-headings"><h1>adviser.iitu.kz</h1></div></div></div>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="/adviser/home.php">В начало</a></li>
                <li class="breadcrumb-item active"><?php echo $user['adviser_name']?> <?php echo $user['adviser_surname']?></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="row">
      <div class="col-12 pt-3 pb-3">
        <div class="card shadow-lg">
          <div class="card-body">
            <div class="row">
              <div class="col-4">  
          <div class="card shadow-sm" style="width: 22rem; float: left;">
                  <img src="<?php echo $user['adviser_url']?>" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $user['adviser_name']?> <?php echo $user['adviser_surname']?></h5>
                    <p class="card-text"><span class="font-weight-bold">Адрес электронной почты: </span><a href="#"><?php echo $user['adviser_email']?></a></p>
                    <p class="card-text"><span class="font-weight-bold">Кафедра: </span><a href="#"><?php echo $user['adviser_departament']?></a></p>
                </div>
              </div>
            </div>
              <div class="col-8">
                <div class="card shadow-lg">
                  <div class="card-body"> 
                                <?php 
                      $mysqli = new mysqli('localhost', 'root', '', 'adviser') or die(mysqli_error($mysqli));

                      $result5 = $mysqli->query("select * from groups where adviser_id = 1") or die(mysqli_error($mysqli));
                                              
                      ?>
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td>
                            <?php  
                            while ($row2 = $result5->fetch_assoc()):
                              $result8 = mysqli_query($mysqli, "SELECT * FROM students WHERE group_id =". $row2['id']); 
                                       // выполняем запрос ($link - подключение к базе)
                                        $count = mysqli_num_rows($result8); // количество строк в запросе
                            ?>
                            <div class="info"><h3><a class="#" href="group.php?group_id=<?php echo $row2['id']; ?>"><?php echo $row2['name']; ?></a></h3></div>
                            <div class="content">
                              <ul>
                                <li>Number of students: <?php echo $count; ?></li>
                                <li>Department: <?php echo $row2['department']; ?></li>
                              </ul>
                            </div>
                          </td>
                          <?php endwhile; ?>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="mt-3" action="#" method="post">
            <div class="form-group">
              <label >Username</label>
              <input type="text" name="username" id="username" class="form-control" value="sanzhar.kaldanov@gmail.com"   autocomplete="username">
            </div>
            <div class="form-group">
              <label >Password</label>
              <input type="password" name="password" id="password" value="sanzhar" class="form-control" autocomplete="current-password">
            </div>
            <div class="form-group">
              <label >Re-Password</label>
              <input type="password" name="password" id="re_password" value="sanzhar" class="form-control" autocomplete="current-password">
            </div>
            <div class="form-group">
              <label >City</label>
              <input type="text" name="city" id="city" value="Almaty" class="form-control" autocomplete="current-password">
            </div>
            <div class="form-group">
              <label >Image URL</label>
              <input type="text" name="url" id="url" value="https://pbs.twimg.com/profile_images/913861131005022209/iaBdZZn1.jpg" class="form-control" autocomplete="current-password">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php }
else{
  header('Location:login.php');
  }
 ?>