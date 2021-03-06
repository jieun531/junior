<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trash NeVer</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    
<!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->
  </head>
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
          <a href="index.html" target="_self">
            <img src="images/project/logo_of_top.png" alt="Home tag" width="200" height="130">
          </a>
                        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="search.html" class="nav-link"><span data-hover="분리수거 물품검색">분리수거 물품검색</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="quiz.html" class="nav-link"><span data-hover="퀴즈 풀기">퀴즈 풀기</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="mypage.html" class="nav-link"><span data-hover="마이페이지">마이페이지</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="loginSystem.php" class="nav-link"><span data-hover="로그인/회원가입">로그인/회원가입</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Color mode
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

  
  <!-- CONTACT 로그인/회원가입 -->

  <section class="contact py-5" id="contact">
    <div class="container">
      <div class="row">


<div class="col-lg-6 col-12">
    <div class="contact-form">
      <br><h2 class="mb-4">Log In</h2>

      <form action="loginAction.php" method="POST">
        <div class="row">
          <div class="col-lg-6 col-12">
            아이디: <input type="text" class="form-control" name="userID" placeholder="ID">
          </div>
          <br>

          <div class="col-lg-6 col-12">
            패스워드: <input type="text" class="form-control" name="userPassword" placeholder="password"><br>
          </div>
          
          <div class="ml-lg-auto col-lg-5 col-12">
            <input type="submit" class="form-control submit-btn" 
                  name="login_btn" value="LogIn">
          </div>
        </div>
      </form>
      
    </div>
  </div>


  
<div class="col-lg-6 col-12">
    <div class="contact-form">
      <br><h2 class="mb-4">Register</h2>

      <form action="register.php" method="POST">
        <div class="row">
          <div class="col-lg-6 col-12">
            아이디: <input type="text" class="form-control" name="userID" placeholder="ID"><br>
          </div>

          <div class="col-lg-6 col-12">
            패스워드: <input type="text" class="form-control" name="userPassword" placeholder="Password">
          </div>

          <div class="col-lg-6 col-12">
            기관 고르기: 
              <select name=institution SIZE=1 class="form-control">
                  <option value=1>노원구청</option>
                  <option value=2>성북구청</option>
                  <option value=3>종로구청</option>
              </select>
            
          </div>

          <div class="ml-lg-auto col-lg-5 col-12">
            <input type="submit" class="form-control submit-btn" 
                   name="register_btn" value="register">
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
</div>
</section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Designed by <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
                        <p class="copyright-text text-center">Edited by 김윤지, 김지은, 최인우, 탁영진</p>
                        <p class="copyright-text text-center">GitHub Link <a rel="nofollow" href="https://github.com/trash-NeVer">TrashNeVer</a></p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
