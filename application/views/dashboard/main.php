<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>lapaks</title>
  <!-- Compiled and minified CSS -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <style media="screen">
  .text{
    color: black;
  }
  .about-content{
    text-align: center;
    margin: 100px;
    display: inline-block;
    background-color: #777eff;
    padding: 50px;
    color: white;
    box-sizing: border-box;
    border-radius: 10px;
  }
  .headPorto{
    text-align: center;
    padding-bottom: 20px;
  }
  .cstom{
    height: 400px;
  }
  .color1{
    background-color:#EE729E;
  }
  .color2{
    background-color:#0c0cad;
  }
  .color4{
    background-color:#07c42a;
  }
  .color3{
    background-color:#3644AF;
  }
  nav{
    background-color: blue;
  }
  .head-is{
    margin-top: 30px;
    margin-bottom: 30px;
  }
  .service-panel{
    margin: 70px 100px 100px 100px;
    }

    .portofolio-panel {
      margin: 30px 100px 100px 100px;
    }
    .container-img {
      position: relative;
    }

    .image {
      display: block;
      width: 100%;
      height: auto;
    }

    .overlay {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
      width: 100%;
      opacity: 0;
      transition: .5s ease;
      background-color: black;
    }

    .container-img:hover .overlay {
      opacity: 0.6;
    }

    .text {
      color: white;
      font-size: 20px;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      text-align: center;
    }
    .btn-all{
      background-color: pink;
      width: 50px;
      box-sizing: border-box;
      border: 1px solid black;
      float: left;
    }
    .page-footer{
      background-color: #000f28;
    }
    .sub{
      padding-bottom: 40px;
    }
    .button-btn{
      margin: 0 0 30px 0;
    }
    .panel-carousel{
      display: none;
      background-color: black;
      opacity: 0.5;
    }
    .btn-edit{
      width: 100%;
      cursor: pointer;
    }
    .contact-us{
      margin-bottom: 100px;
      border-radius: 30px;
      box-sizing: content-box;
    }

  </style>
  <script type="text/javascript">

  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true
    });
    $('.carousel').mouseenter(function(){
        $('.panel-carousel').show(function(){
          $('panel-carousel').fadeOut(1000);
        });

    })
    $('.carousel').mouseleave(function(){
      $('.panel-carousel').hide();
    });
  });
  </script>

</head>
<body>
  <!-- navbar area start -->
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>
  <!-- navbar area end -->

  <!-- carousel start -->
  <section>
    <div class="carousel carousel-slider center">
      <div class="carousel-fixed-item center">
        <a class="btn waves-effect white grey-text darken-text-2">button</a>
      </div>
      <div class="carousel-item" href="#one!">
        <img src="assets/img/car1.jpeg" alt="">
        <h2 class="text panel-carousel">First Panel</h2>
        <p class="text panel-carousel">This is your first panel</p>
      </div>
      <div class="carousel-item" href="#two!">
        <img src="assets/img/car2.jpeg" alt="">
        <h2 class="text panel-carousel">Second Panel</h2>
        <p class="text panel-carousel">This is your second panel</p>
      </div>
    </div>
  </section>
  <!-- carousel end -->
  <!-- about-us start -->
  <section class="about-content z-depth-5">
    <div class="row">
      <div class="col s6 m12 l12">
        <div class="isi-kami">
          <h2>Tentang Kami</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- about-us end -->

  <!-- service start -->
  <section class="service-panel">
    <div class="headPorto">
      <h2>Layanan Kami</h2>
      <p class="sub"><b>Web Development, Service Komputer, Desain Grafis, Hosting</b></p>
    </div>
    <div class="row">
      <div class="col s12 m10 l3">
        <div class="card-panel center cstom color1">
          <span class="">
            <img src="http://lapakdhani.com/wp-content/uploads/2019/03/icon-service-1.png" alt="">
          </span>
          <h5 class="head-is white-text">Web Development</h5>
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>
      <div class="col s12 m10 l3">
        <div class="card-panel center cstom color2">
          <span>
            <img src="http://lapakdhani.com/wp-content/uploads/2019/03/icon-service-3.png" alt="">
          </span>
          <h5 class="head-is white-text">service Komputer</h5>
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>
      <div class="col s12 m10 l3">
        <div class="card-panel center cstom color3">
          <span>
            <img src="http://lapakdhani.com/wp-content/uploads/2019/03/icon-service-2.png" alt="">
          </span>
          <h5 class="head-is white-text">Desain Grafis</h5>
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>
      <div class="col s12 m10 l3 ">
        <div class="card-panel center cstom  color4">
          <span>
            <img src="assets/img/icon/hosting1.png" alt="">
          </span>
          <h5 class="head-is white-text">Hosting</h5>
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>

  </div>
  </section>
  <!-- service end -->

  <!-- portofolio area start -->
  <section class="portofolio-panel">
    <div class="headPorto sub">
      <h2>portofolio</h2>
    </div>
    <div class="button-btn center">
      <a class="waves-effect waves-light btn">button</a>
      <a class="waves-effect waves-light btn">button</a>
      <a class="waves-effect waves-light btn">button</a>
    </div>
    <div class="row">
      <div class="col s12 m10 l4">
        <div class="container-img">
          <img src="assets/img/ex1.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <div class="text">semua portofolio</div>
          </div>
        </div>
      </div>
      <div class="col s12 m10 l4">
        <div class="container-img">
          <img src="assets/img/ex1.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <div class="text">desain</div>
          </div>
        </div>
      </div>
      <div class="col s12 m10 l4">
        <div class="container-img">
          <img src="assets/img/ex1.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <div class="text">web</div>
          </div>
        </div>
      </div>
    </div>
      </section>

      <!-- contact-us area start -->
      <section>
        <div class="container contact-us">
          <h2 class="headPorto ">Kontak Kami</h2 ><br>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <input placeholder="masukkan username anda" id="username" type="text" class="validate">
                    <label for="username">username</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input placeholder="tulis pesan" id="tulisPesan" type="text" class="validate">
                    <label for="tulisPesan">Pesan</label>
                  </div>
                </div>
                <button class="btn waves-effect waves-light btn-edit" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
                </button>
              </form>
            </div>
          </div>
        </section>
        <!-- contact-us area end -->

          <!-- footer area start -->
          <section>
            <footer class="page-footer">
              <div class="container">
                <div class="row">
                  <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                  </div>
                  <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                      <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                      <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                      <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                      <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="footer-copyright">
                <div class="container">
                  © 2014 Copyright Text
                  <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
              </div>
            </footer>
          </section>
          <!-- footer area end -->
        </body>
        </html>
