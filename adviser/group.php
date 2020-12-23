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
                <?php 
                $group_id = $_GET['group_id'];  
                 $mysqli = new mysqli('localhost', 'root', '', 'adviser') or die(mysqli_error($mysqli));
                $result4 = $mysqli->query("select * from students where group_id=". $group_id) or die(mysqli_error($mysqli));
                $result3 = $mysqli->query("select * from groups where id=". $group_id) or die(mysqli_error($mysqli));
                while ($row3 = $result3->fetch_assoc()):    ?>
                <li class="breadcrumb-item active"><?php echo $row3['name']; ?></li>
              <?php endwhile; ?>
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
            <div class="mr-auto"><div class="page-context-header"><div class="page-header-headings"><h1>Студенты</h1></div></div></div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Full name</th>
                  <th scope="col">Login</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Get Information</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                while ($row3 = $result4->fetch_assoc()):                                        
            ?>
                <tr>
                  <th scope="row"><?php echo $row3['id']; ?></th>
                  <td><a class="card-link" href="student.php?student_id=<?php echo $row3['id']; ?>"><?php echo $row3['name']; ?> <?php echo $row3['surname']; ?></a></td>
                  <td><?php echo $row3['login']; ?></td>
                  <td><?php echo $row3['gender']; ?></td>
                  <td><a href="genPdf.php" class="btn btn-success">Get Information in PDF</a></td>
                </tr>
                <?php 
                endwhile;                                        
            ?>
              </tbody>
            </table>
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