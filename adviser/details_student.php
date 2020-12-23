<!DOCTYPE html>
<!-- saved from url=(0050)file:///C:/Users/Kasym/Desktop/adviser/admin.html# -->
<html lang="en">
<head>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- CSS only -->
<link rel="stylesheet" href="./admin_files/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="./admin_files/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="./admin_files/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./admin_files/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Detaiks of Adviser</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="file:///C:/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="file:///C:/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="file:///C:/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="file:///C:/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="file:///C:/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="file:///C:/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="file:///C:/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="file:///C:/Users/Kasym/Desktop/adviser/dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

<body>

    <div class="row">
       <div class="col">
         <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow pt-3 pb-3">
          <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">ADMIN PANEL</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"  aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
              <li class="nav-item text-nowrap">
               <a class="nav-link" href="#">Sign out</a>
             </li>
            </ul>
          </nav>
       </div>
    </div>


    <div class="row" >
      <div class="col-2"style="background-color:#DFDADA; height: 700px;">
            <div class="sidebar-sticky pt-3">
              <ul class="nav flex-column">

                <li class="nav-item">
                   <a class="nav-link active" href="admin_advisers.php">
                      <svg width="24" height="24" viewBox="0 0 24 24" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                         </svg>
                         Advisers <span class="sr-only">(current)</span>
                   </a>
                 </li>
          
         
                <li class="nav-item">
                  <a class="nav-link" href="admin_groups.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    Groups
                  </a>
                </li>
                <li class="nav-item">
            <a class="nav-link" href="admin_students.php">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
              </svg>
              Students
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_courses.php">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>
              Courses
            </a>
          </li>
               </ul>
            </div>
         </nav>
      </div>  

      <div class="col-10">
        <br><br>
        <div>
           <?php 
              $student_id = $_GET['student_id'];
              $query="SELECT * FROM students where id=". $student_id;
              $mysqli = new mysqli('localhost', 'root', '', 'adviser') or die(mysqli_error($mysqli));
              $req=mysqli_query($mysqli, $query);
              $result = mysqli_fetch_assoc($req);
              if(empty($result)){
                header("location: admin_students.php");
              }
              
          ?>
          <div class="card shadow-sm" style="width: 18rem; float: left;">
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Edit 
                    </button>

                  </div>
                </div>

         <div class="float-left ml-5" style="width: 70%">      
            <h2>LIST OF COURSES</h2>
      <button class="btn btn-success float-left" data-toggle="modal" data-target="#exampleModal">+ ADD NEW</button>
      <br>
      <br>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>COURSE ID</th>
              <th>NAME</th>
              <th>TEACHER NAME</th>
              <th>ATTENDENCE</th>
              <th>RK1</th>
              <th>RK2</th>
              <th>FINAL</th>
              <th>OPERATIONS</th>
            </tr>
          </thead>
          <tbody>
            <?php 

               $result10 = $mysqli->query("select * from performances where student_id = ". $student_id ) or die(mysqli_error($mysqli));
              ?>
              <?php  
                while ($row = $result10->fetch_assoc()):
                  $query10="select * from courses where id=". $row['course_id'];
                  $req10=mysqli_query($mysqli, $query10);
                  $result69 = mysqli_fetch_assoc($req10);
                  if(!empty($result69)){
              ?>
            <tr>
              <td><?php echo $result69['id']; ?></td>
              <td><a href="details_course.php?course_id=<?php echo $result69['id']; ?>"><?php echo $result69['name']; ?></td>
              <td><?php echo $result69['teacher_name']; ?></td>
              <td><?php echo $row['attendance']; ?></td>
              <td><?php echo $row['rk1']; ?></td>
              <td><?php echo $row['rk2']; ?></td>
              <td><?php echo $row['final']; ?></td>
              <td><a class="btn btn-danger">Delete</a> <a href="edit_performance.php?course_id=<?php echo $row['course_id']; ?>&student_id=<?php echo $row['student_id']; ?>" class="btn btn-primary">Edit</a></td>
            </tr>

          <?php }endwhile; ?>
             
            </tr>
          </tbody>
        </table>
      </div>
      </div>
      </div>
    </div>





<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="mt-3" action="process.php" method="post">
                          <div class="form-group">
                              <input type="text" name="name" value="<?php echo $result['name']; ?>"  class="form-control" placeholder="Имя">
                              <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                          </div>
                          <div class="form-group">
                              <input type="text" name="surname" id="surname" value="<?php echo $result['surname']; ?>" class="form-control"  placeholder="Фамилия" >
                          </div>
                          <div class="form-group">
                              <input type="text" name="login" id="username" value="<?php echo $result['login']; ?>" class="form-control" placeholder="Логин" >
                          </div>
                          <div class="form-group">
                              <input type="password" name="password" value="<?php echo $result['password']; ?>" id="password" class="form-control" placeholder="Пароль" >
                          </div>
                          <div class="form-group">
                              <input type="password" name="re_password" value="<?php echo $result['password']; ?>" id="re_password" class="form-control" placeholder="Повторите пароль">
                          </div>
                          <div class="form-group">
                              <input type="text" name="picture_url"class="form-control" value="<?php echo $result['picture_url']; ?>" placeholder="Link to photo...">
                          </div>
                          <div class="form-group">
                              <input type="radio" name="gender" id="gender" value="male">
                              <label for="male">М</label>
                              <input class="ml-5" type="radio" name="gender" id="gender" value="female">
                              <label for="female">Ж</label>
                          </div>
                          <label class="">Select Group:</label>

                          <?php 
                             $mysqli = new mysqli('localhost', 'root', '', 'adviser') or die(mysqli_error($mysqli));
                             $result = $mysqli->query("select * from groups") or die(mysqli_error($mysqli));
                                    
                                ?>
                            
                          <select id="select_group" class="form-control" name="group_id">

                             <?php  
                      while ($row = $result->fetch_assoc()):
                        ?>
                          <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                      
                        
                          <?php endwhile; ?>
                          </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updateStudent" class="btn btn-primary">Save</button>
       </form>

      </div>
    </div>
  </div>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>

</body>

  </html>