<html>
  <head>
    <title>$Title$</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <style>
          body{ font-family: Dejavu Sans, sans-serif;}
    </style>
  </head>
<body class="bg-secondary">
  <nav class="fixed-top navbar navbar-expand-lg shadow-lg navbar-light bg-light">
    <a href="#" class="navbar-brand d-none d-sm-inline"><span class="site-name d-none d-md-inline">adviser.iitu.kz</span></a>
   
  </nav>
<br><br>

  <div class="container mt-5">
    <div class="row">
      <div class="col-12 pt-3 pb-3">
        <div class="card shadow-lg">
          <div class="card-body">
            <div class="row">
              <div class="col-4">                  
                  <?php 
              $student_id = 6;
              $query="SELECT * FROM students where id=". $student_id;
              $mysqli = new mysqli('localhost', 'root', '', 'adviser') or die(mysqli_error($mysqli));
              $req=mysqli_query($mysqli, $query);
              $result = mysqli_fetch_assoc($req);
              if(empty($result)){
                header("location: admin_students.php");
              }
              
          ?>
          <div class="card shadow-sm" style="width: 22rem; float: left;">
                  <img src="<?php echo $result['picture_url']; ?>" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $result['name']; ?> <?php echo $result['surname']; ?></h5>
                    <p class="card-text"><span class="font-weight-bold"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <rect width="4" height="5" x="1" y="10" rx="1"/>
                      <rect width="4" height="9" x="6" y="6" rx="1"/>
                      <rect width="4" height="14" x="11" y="1" rx="1"/>
                    </svg> GPA: </span>4.00</p>
                    <p class="card-text"><span class="font-weight-bold">Адрес электронной почты: </span><a href="#"><?php echo $result['login']; ?></a></p>
                    <p class="card-text"><span class="font-weight-bold">Город: </span>Алматы</p>
                </div>
              </div>
            </div>
              <div class="col-8">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <table class="table table-striped">
                      <?php  
                          $result10 = $mysqli->query("select * from performances where student_id = ". $student_id ) or die(mysqli_error($mysqli));
                              while ($row = $result10->fetch_assoc()):
                                $query10="select * from courses where id=". $row['course_id'];
                                $req10=mysqli_query($mysqli, $query10);
                                $result69 = mysqli_fetch_assoc($req10);
                            ?>
                      <tbody>
                        <tr>                
                          <td>                        
                            <div class="info"><h3><a href="#"><?php echo $result69['name']; ?>  (<?php echo $result69['teacher_name']; ?>)</a></h3></div>
                            <ul>
                              <li><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </svg> Attendence: <?php echo $row['attendance']; ?></li>
                              <li><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-checklist" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                    <path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                  </svg> RK1: <?php echo $row['rk1']; ?>
                              </li>
                              <li><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-checklist" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                    <path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                  </svg> RK1: <?php echo $row['rk2']; ?>
                              </li>
                            </ul>
                          
                          </td>                        
                        </tr>
                      </tbody>
                      <?php endwhile; ?>
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
</body>
</html>