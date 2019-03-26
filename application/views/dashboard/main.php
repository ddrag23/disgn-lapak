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
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <style media="screen">
  .text{
    color: black;
  }
  .about-content{
    text-align: center;
  }
  .headPorto{
    text-align: center;
  }
  .cstom{
    overflow: auto;
    height: 370px;
  }
  </style>
  <script type="text/javascript">

  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true
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
      <div class="carousel-item red white-text" href="#one!">
        <h2>First Panel</h2>
        <p class="white-text">This is your first panel</p>
      </div>
      <div class="carousel-item amber white-text" href="#two!">
        <h2>Second Panel</h2>
        <p class="white-text">This is your second panel</p>
      </div>
      <div class="carousel-item green white-text" href="#three!">
        <h2>Third Panel</h2>
        <p class="white-text">This is your third panel</p>
      </div>
      <div class="carousel-item blue white-text" href="#four!">
        <h2>Fourth Panel</h2>
        <p class="white-text">This is your fourth panel</p>
      </div>
    </div>
  </section>
  <!-- carousel end -->
  <!-- about-us start -->
  <section>
    <div class="about-content container">
      <h2>Tentang Kami</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </section>
  <!-- about-us end -->

  <!-- service start -->
  <section>

    <div class="row">
      <div class="col s3 m3 l3">
        <div class="card-panel center cstom">
          <i class="small material-icons">web</i>
          <h3>Web Development</h3>
          <span class="text">I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>
      <div class="col s3 m3 l3">
        <div class="card-panel center cstom">
          <i class="small material-icons">settings</i>
          <h3>service Komputer</h3>
          <span class="text">I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>
      <div class="col s3 m3 l3">
        <div class="card-panel center cstom">
          <i class="small material-icons">brush</i>
          <h3>Desain Grafis</h3>
          <span class="text">I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>
      <div class="col s3 m3 l3">
        <div class="card-panel center cstom ">
          <i class="small material-icons">domain</i>
          <h3>Hosting</h3>
          <span class="text">I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>

  </section>
      </div>
  <!-- service end -->

  <!-- portofolio area start -->
  <section>
    <div class="portofolio container">
      <h3 class="headPorto">portofolio</h3><br><br>
    </div>
    <div class="row">
      <div class="col s4 m4 l4">
        <div class="card">
          <div class="card-image">
            <img src="assets/img/ex1.jpg">
            <span class="card-title black-text">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="col s4 m4 l4">
          <div class="card">
            <div class="card-image">
              <img src="assets/img/ex1.jpg">
              <span class="card-title black-text">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col s4 m4 l4">
            <div class="card">
              <div class="card-image">
                <img src="assets/img/ex1.jpg">
                <span class="card-title black-text">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- portofolio area end -->

        <!-- contact-us area start -->
        <section>
          <div class="container contact-us">
            <h4 class="headPorto">Kontak Kami</h4 ><br>
              <div class="row">
                <form class="col s12 m12 l12">
                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                      <label for="first_name">username</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input disabled value="tulis pesan kamu" id="disabled" type="text" class="validate">
                      <label for="disabled">pesan</label>
                    </div>
                  </div>
                </form>
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
                </button>
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
