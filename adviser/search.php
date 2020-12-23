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
                  <a href="logout.php" class="dropdown-item menu-action"><span class="menu-action-text" id="actionmenuaction-6">Выход</span></a>
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
                <li class="breadcrumb-item active"><a href="home.php">В начало</a></li>
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
        <?php 
            $text = $_GET['text'];
            ?>
        <div class="coursebox clearfix odd first ml-3">
          <h2>Results of search: (<?php echo $text ?>)</h2>
          <br>

            <?php 
            $mysqli = new mysqli('localhost', 'root', '', 'adviser') or die(mysqli_error($mysqli));
            $result5 = $mysqli->query("select * from groups where name =". $text) or die(mysqli_error($mysqli));
                                    
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