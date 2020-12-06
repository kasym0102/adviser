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
    <title>Details of Adviser</title>

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
         <nav  >
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
               </ul>
            </div>
         </nav>
      </div>  

      <div class="col-10">
        <br><br>
          <?php 
              $adviser_id = $_GET['adviserdetails'];
              $query="SELECT * FROM adviser where adviser_id=". $adviser_id;
              $mysqli = new mysqli('localhost', 'root', '', 'adviser') or die(mysqli_error($mysqli));
              $req=mysqli_query($mysqli, $query);
              $result = mysqli_fetch_assoc($req);
              if(empty($result)){
                header("location: admin_advisers.php");
              }
              
          ?>
        <div class="card float-left" style="width: 18rem;">
          <img src="<?php echo $result['adviser_url']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $result['adviser_name']; ?> <?php echo $result['adviser_surname']; ?></h5>
            <p class="card-text">Department: <?php echo $result['adviser_departament']; ?></p>
            <p class="card-text">E-Mail: <?php echo $result['adviser_email']; ?></p>
            <button class="btn btn-success"data-toggle="modal" data-target="#exampleModal">Edit</button>
          </div>
        </div>
         <div class="float-left ml-5" style="width: 70%">      
            <h2>LIST OF GROUPS OF <?php echo $result['adviser_name']; ?> <?php echo $result['adviser_surname']; ?>
            </h2>
            <br>

            <div class="table-responsive">
              <table class="table table-striped table-sm">
                 <thead>
                  <tr>
                    <th>GROUP ID</th>
                    <th>GROUP NAME</th>
                    <th>NUMBER OF STUDENTS</th>
                    <th>ADVISER'S NAME</th>
                     <th>DEPARTMENT</th>
                     <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                             $result6 = $mysqli->query("select * from groups where adviser_id=". $adviser_id) or die(mysqli_error($mysqli));
                                    
                                ?>
                                <?php  
                      while ($row6 = $result6->fetch_assoc()):
                        ?>
                      <tr>
                        <td><?php echo $row6['id']; ?></td>

                        <td><a href="details_group.php?group_id=<?php echo $row6['id']; ?>"><?php echo $row6['name']; ?> </td>
                            


                            <?php 
                             $result8 = mysqli_query($mysqli, "SELECT * FROM students WHERE group_id =". $row6['id']); 
                             // выполняем запрос ($link - подключение к базе)
                              $count = mysqli_num_rows($result8); // количество строк в запросе
                                    
                                ?>

                        <td><?php echo $count ?></td>
                        <td><?php echo $result['adviser_name']; ?> <?php echo $result['adviser_surname']; ?></td>
                        <td><?php echo $row6['department'] ?></td>
                        <td><button class="btn btn-danger">Delete</button></td>

                      </tr>
                    <?php endwhile; ?>
                  
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Adviser</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form class="mt-3" action="process.php" method="post">
                          <div class="form-group">
                            <input type="hidden" name="adviser_id" value="<?php echo $result['adviser_id']; ?>">
                              <input type="text" name="adviser_name" class="form-control" value="<?php echo $result['adviser_name']; ?>" placeholder="Имя">
                          </div>
                          <div class="form-group">
                              <input type="text" name="adviser_surname" class="form-control" value="<?php echo $result['adviser_surname']; ?>" placeholder="Фамилия">
                          </div>
                          <div class="form-group">
                              <input type="text" name="adviser_email" class="form-control" value="<?php echo $result['adviser_email']; ?>" placeholder="email">
                          </div>
                          <div class="form-group">  
                              <input type="password" name = "adviser_password" value="<?php echo $result['adviser_password']; ?>" class="form-control" placeholder="Пароль">
                          </div>
                          <div class="form-group">
                              <input type="text" name="adviser_url" value="<?php echo $result['adviser_url']; ?>" class="form-control" placeholder="URL">
                          </div>
                          <div class="form-group">
                              <input type="radio" name="adviser_gender" value="Male">
                              <label for="male">М</label>
                              <input class="ml-5" type="radio" name="adviser_gender" value="Female">
                              <label for="female">Ж</label>
                          </div>
                          <div class="form-group">
                            <label for="select_dep">Department:</label>
                              <select name= "adviser_departament" class="form-control">
                                <option>CIES</option>
                                <option>MCM</option>
                                <option>IS</option>
                                <option>EB</option>
                                <option>VK</option>
                              </select>
                          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name = "update_adviser" class="btn btn-primary">Update</button>
      </div>
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