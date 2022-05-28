<?php
    session_start();
    require_once './inc/connect.php';
    if (!isset($_SESSION['user'])) {
        header('Location: registr.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KorolevBio</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- main style -->
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">

      <div class="row">

        <nav role="navigation" class="navbar navbar-inverse"> 
            <div class="container">

              <div class="navbar-header header">
                <div class="container">
                  
                  <div class="row">
                    <div class="col-lg-12">
                   <h1><a href="#">KorolevBio</a></h1>
                      <p>Платформа для ознакомления с информацией!</p>
                     
                    </div>

                  </div>
                </div>

              <!-- Выдвижной список -->
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
                <ul class="nav nav-pills">
                     <li class="active" ><a href="index.php">Главная</a></li>
                  <li><a href="author.php">Об авторе</a></li>
                  <li><a href="hobby.php">Хобби</a></li>
                  <li ><a href="contact.php">Контакты</a></li>
                  <li ><a href="gallery.php">Галерея</a></li>
                </ul>
              </div>
              <!-- Выдвижной список -->
            </div>


      </naw>

        </div>

    </div>

      <div class="wrapper">
                  
            <div class="container">
                  <div class="row">
                      <div class="col-lg-9 col-lg-push-3">

                        <form role="search" class="visible-xs">
                                <div class="form-group">
                                  <div class="input-group">
                                    <input type= "search" class="form-control input-lg" placeholder="Ваш запрос">
                                        <div class="input-group-btn">
                                          <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                        </div>
                                  </div>
                                </div>
                              </form>
                              </div>

                           </div>
                            </div>
                           
                 <div class="wrapper">
                  
            <div class="container">
                  <div class="row">
       <div class="users">
        <table class="table table-striped">
            <h1>Список пользователей</h1>
                              <thead>
                                <tr>
                                  <th class="text-center">id</th>
                                  <th class="text-center">ФИО</th>
                                  <th class="text-center">Логин</th>
                                  <th class="text-center">Почта</th>
                                  <th class="text-center">Аватар</th>
                                  <th class="text-center">Роль</th>
                                  <th class="text-center">Редактировать</th>
                                  <th class="text-center">Удалить</th>
                                </tr>
                              </thead>
                            
                            <tbody>
                              <?php
                                $query = "SELECT * FROM `users`";
                                $res = mysqli_query($connect, $query);
                                while(($user = mysqli_fetch_array($res))) {
                              ?>
                            <tr>

                            <td class="data text-center vert-align"><?=$user['id']?></td>
                    <td class="data text-center vert-align"><?=$user['full_name']?></td>
                            <td class="data text-center vert-align"><?=$user['login']?></td>
                    <td class="data text-center vert-align"><?=$user['email']?></td>
                    <td class="data col-lg-1 col-md-1 col-xs-2"><img src="<?=$user['avatar']?>" width="100" class="avatarimg img-responsive img-thumbnail" alt="Аватарка"></td>
                    <td class="data text-center vert-align"><?=$user['role']?></td>
                            <td class="data text-center vert-align"><a href="./updatePage.php?id=<?=$user['id']?>"><img src="./IMG/edit.png" width="50" class="edel" alt="Редактировать"></a></td>
                            <td class="data text-center vert-align"><a href="./inc/delete.php?id=<?=$user['id']?>"><img src="./IMG/delete.png" width="50" class="edel" alt="Удалить"></a></td>
                            </tr>
                            </tbody>
                                    <?php
                              }
                            ?>          
        </div>

        </table>
                  <div class="margin-8 clear"></div>
                    
                  <div class="clear"></div>
            </div>
      </div>
    </div>

                <footer>                  
                  <div class="container2232">
                    <p class="text-center">Сайт сделан студентом УЛГТУ Королевым Алексеем</p>                  
                  </div>
                </footer>
        

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>