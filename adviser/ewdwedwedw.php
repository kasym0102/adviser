<?php
  session_start();
  if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
  require_once 'db.php';
?>
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
  <nav class="fixed-top navbar navbar-expand-lg shadow-lg navbar-light bg-light">
    <a href="#" class="navbar-brand d-none d-sm-inline"><span class="site-name d-none d-md-inline">adviser.iitu.kz</span></a>
    <ul class="navbar-nav d-none d-md-flex ">
        <li class="dropdown nav-item">
          <a class="dropdown-toggle nav-link" id="drop-down-5f900323ac5fc5f900323a491d10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" title="Язык" aria-controls="drop-down-menu-5f900323ac5fc5f900323a491d10">
              Русский ‎(ru)‎
          </a>
          <div class="dropdown-menu" role="menu" id="drop-down-menu-5f900323ac5fc5f900323a491d10" aria-labelledby="drop-down-5f900323ac5fc5f900323a491d10">
            <a class="dropdown-item" role="menuitem" href="#" title="Қазақша ‎(kk)‎">Қазақша ‎(kk)‎</a>
            <a class="dropdown-item" role="menuitem" href="#" title="Русский ‎(ru)‎">Русский ‎(ru)‎</a>
            <a class="dropdown-item" role="menuitem" href="#" title="English ‎(en)‎">English ‎(en)‎</a>
          </div>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="d-none d-lg-block"></li>
      <li class="nav-item"></li>
      <li class="nav-item d-flex align-items-center">
      <div class="usermenu">
        <div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-0" data-enhance="moodle-core-actionmenu">
          <div class="menubar d-flex " id="action-menu-0-menubar" role="menubar">
            <div class="action-menu-trigger">
              <div class="dropdown">
                <a href="#" tabindex="0" class="dropdown-toggle icon-no-margin nav-link" id="action-menu-toggle-0" aria-label="Меню пользователя" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-0-menu">
                <span class="userbutton"><span class="usertext mr-1"><?php echo $user['adviser_name']?> <?php echo $user['adviser_surname']?></span><span class="avatars"><span class="avatar current"><img src="https://dl.iitu.kz/theme/image.php/classic/core/1602665137/u/f2" class="userpicture defaultuserpic" width="35" height="35" aria-hidden="true"></span></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-0-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-0" role="menu" data-align="tr-br">
                  <a href="adviser.php" class="dropdown-item menu-action"><span class="menu-action-text" id="actionmenuaction-1">Личный кабинет</span></a>
                  <a href="message.php" class="dropdown-item menu-action"><span class="menu-action-text" id="actionmenuaction-5">Сообщение</span></a>
                  <a href="#" class="dropdown-item menu-action"><span class="menu-action-text" id="actionmenuaction-6">Выход</span></a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </nav>
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
                <input id="shortsearchbox" type="text" placeholder="Поиск группы" class="form-control mb-1 mb-sm-0">
                <button class="btn btn-secondary" name="search" type="submit">Применить</button>
            </fieldset>
          </form>
        </div>
        <div class="coursebox clearfix odd first ml-3">
          <h2>Мои группы</h2>
          <br>

            <?php 
            $mysqli = new mysqli('localhost', 'root', '', 'adviser') or die(mysqli_error($mysqli));
            $id = $user['adviser_id'] 
            //$query = "select * from groups where adviser_id =". $id;
           // $result5=mysqli_query($mysqli, $query);
            //$result5 = getUsersGroup($user['adviser_id']);
            //if ($result5==null) {
           // $result5 = mysqli_fetch_assoc($req);

            //$query="SELECT * FROM courses where id=". $id;
           // $result14 = $mysqli->query("select * from groups where adviser_id=". $group_id) or die(mysqli_error($mysqli));

            $result15 = $mysqli->query("select * from groups where adviser_id = 1"/*. $id*/ ) or die(mysqli_error($mysqli));
             if ($result5==null) {                       
            ?>

             <h1>weferfer</h1> 
           <?php } ?>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>
                  <?php  
                  while ($row2 = $result15->fetch_assoc()):
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
<?php } ?>