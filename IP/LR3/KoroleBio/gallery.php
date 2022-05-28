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
    <script type="text/javascript" src="assets/js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="assets/js/gallery.js"></script>
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
                     <li><a href="index.php">Главная</a></li>
                  <li><a href="author.php">Об авторе</a></li>
                  <li><a href="hobby.php">Хобби</a></li>
                  <li ><a href="contact.php">Контакты</a></li>
                  <li class="active"><a href="gallery.php">Галерея</a></li>
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
                        
                        <!-- Да -->
                      <div class="block_page-white">                  
                        <div>
                           <div class="gallery">
                            <h1><strong>Добро пожаловать на сайт KorolevBio</strong></h1>
                            <div class="main_gallery">
                              <div class="btn3" onclick="leftChangeImage()">Вперёд</div>
                              <div id = "mainImage">
                              </div>
                              <div class="btn2" onclick="rightChangeImage()">Назад</div>
                            </div>
                          </div>
                        </div>
                      </div>
                         <!-- Да -->

                      </div>

                        <div class="col-lg-3 col-lg-pull-9">
                   
                          <div class="panel panel-info">

                            <div class="panel-heading"><div class="sidebar-header">Личный кабинет</div>
                            </div>

                            <div class="panel-body">
                                <form role="form">
                                    <a class="btn" href="./auth.php">Войти в личный кабинет</a><br>
                                </form>
                              </div>
                            </div>
                             
                                <div class="panel panel-info">
                              <div class="button"><a href="/labs.php">Перейти к выполненным работам</a></div>
                            </div>

                             </div>

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