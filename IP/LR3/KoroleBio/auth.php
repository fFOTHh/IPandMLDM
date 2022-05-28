<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
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
        <form action="inc/signin.php" method="POST">
                      <p>
                        <p><strong>Логин</strong>:</p>
                        <input type="text" name="login">
                      </p>


                      <p>
                        <p><strong>Пароль</strong>:</p>
                        <input type="password" name="password">
                      </p>

                      <p>
                        <button class="btn btn-primary" type="submit">Войти</button>
                      </p>


        <p>
        Нет аккаунта? <a href="./registr.php">Зарегистрируйтесь</a>
        </p>
                    <?php 
            if (isset($_SESSION['message'])) {
                echo '<p class="mes"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
   
                  <div class="margin-8 clear"></div>
                    
                  <div class="clear"></div>
            </div>
      </div>
    </div>
<style>

</style>
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