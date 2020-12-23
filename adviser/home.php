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
                <li class="breadcrumb-item active"><a href="#">В начало</a></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </header>

  <div class="row">
    <div class="col-12">
      <div class="card shadow-lg">
        <div class="box py-3 mdl-align ml-3">
           <form action="process.php" id="coursesearch" method="post" class="form-inline">
            <fieldset class="coursesearchbox invisiblefieldset">
                <input name="searchText" id="shortsearchbox" type="text" placeholder="Поиск группы" class="form-control mb-1 mb-sm-0">
                <button class="btn btn-secondary" name="search" type="submit">Применить</button>
            </fieldset>
          </form>
        </div>
        <div class="coursebox clearfix odd first ml-3">
          <h2>Мои группы</h2>
          <br>

            <?php 
            $mysqli = new mysqli('localhost', 'root', '', 'adviser') or die(mysqli_error($mysqli));

            $idd = $user['adviser_id'];

            $result5 = $mysqli->query("select * from groups where adviser_id =". $idd) or die(mysqli_error($mysqli));
                                    
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
</body>
</html>
<?php }
else{
  header('Location:login.php');
  }
 ?>