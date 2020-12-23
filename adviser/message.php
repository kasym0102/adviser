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
                <li class="breadcrumb-item"><a href="home.php">В начало</a></li>
                <li class="breadcrumb-item active"><a href="#">Сообщение</a></li>
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
            <div class="mr-auto"><div class="page-context-header"><div class="page-header-headings"><h1>Messages</h1></div></div></div>
            <?php 
              $mysqli = new mysqli('localhost', 'root', '', 'adviser') or die(mysqli_error($mysqli));
              $result3 = $mysqli->query("select * from messages where adviser_id=1") or die(mysqli_error($mysqli));
              while ($row3 = $result3->fetch_assoc()):  
              $idid = $row3['student_id'];   
              $query = "select * from students where id=". $idid;
              $req=mysqli_query($mysqli, $query);
              $result = mysqli_fetch_assoc($req);
            ?>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?php echo $result['name']; ?> <?php echo $result['surname']; ?></h5>
              </div>
              <p class="mb-1"><?php echo $row3['message']; ?></p>
            </a>
            <?php   
                endwhile;                                        
            ?>
          </div>
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