<!DOCTYPE html>
<html lang="pt-br">

<head>
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/adminlte/styles/layout.css')}}">

  <title>Pagina de Apresentação</title>
  <!-- Custom styles for this template -->
  <link href="{{asset('css/cover.css')}}" rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    <div id="top" class="clearfix">
      <div id="logo"><img id="logoimage" src="{{asset('vendor/adminlte/images/favicon.png')}}" alt="">
        <h1 id="logotitle">SistemaAtos</h1>
      </div>
      <!--/logo-->
      <nav>
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="login">Login</a></li>
        </ul>
      </nav>
    </div>
    <!--/top-->
    <header>
      <h1>Hello there, I'm <span>&quot;Your Name&quot;</span>. Welcome to my design portfolio!</h1>
      <h2>&ndash; Photographer and Web Developer &ndash;</h2>
    </header>
    <!-- /header -->
    <section id="slideshow">
      <div class="html_carousel">
        <div id="slider" class="clearfix">
          <!-- Replace these images with your own but make sure they are 1200px wide and 313px high or the same ratio -->
          <div class="slide"> <img src="{{asset('vendor/adminlte/images/slideshow/sliderimage1.jpg')}}" alt=""> </div>
          <div class="slide"> <img src="{{asset('vendor/adminlte/images/slideshow/sliderimage2.jpg')}}" alt=""> </div>
          <div class="slide"> <img src="{{asset('vendor/adminlte/images/slideshow/sliderimage3.jpg')}}" alt=""> </div>
        </div>
      </div>
    </section>
    <!-- /section -->
    <aside id="about" class="left">
      <h3>about me</h3>
      <p>Hey there, my name is &quot;Your Name&quot; and I am a photographer and web developer! This is my brand new portfolio. It's super cool because it's completely responsive! That means you can re-size it to whatever size you like and it always looks great. Have a look around and enjoy.</p>
    </aside>
    <!-- /aside -->
    <aside class="right">
      <h3>my work</h3>
      <p>Below, you will be able to find lots of my work. I take loads of pretty pictures and I also make websites. If you like what you see then you can contact me below! Maybe you would like to hire me or just have a chat, either way, I look forward to hearing from you.</p>
    </aside>
    <!-- /aside -->
    <div class="clearfix"></div>
    <section id="work" class="clearfix">
      <!-- Images must be 200px by 150px -->
      <div class="item"> <a href="#"><img src="{{asset('vendor/adminlte/images/work/thumbs/item.jpg')}}" alt=""></a>
        <h3>Skies Of Spain</h3>
        <p>photography</p>
      </div>
      <div class="item"> <a href="#"><img src="{{asset('vendor/adminlte/images/work/thumbs/item2.jpg')}}" alt=""></a>
        <h3>Beautiful Bahrain</h3>
        <p>photography</p>
      </div>
      <div class="item"> <a href="#"><img src="{{asset('vendor/adminlte/images/work/thumbs/item3.jpg')}}" alt=""></a>
        <h3>Wild Stripes</h3>
        <p>photo manipulation</p>
      </div>
      <div class="item"> <a href="#"><img src="{{asset('vendor/adminlte/images/work/thumbs/item4.jpg')}}" alt=""></a>
        <h3>Lazy Days</h3>
        <p>photo manipulation</p>
      </div>
      <div class="item"> <a href="#"><img src="{{asset('vendor/adminlte/images/work/thumbs/item5.jpg')}}" alt=""></a>
        <h3>Trapped</h3>
        <p>photography</p>
      </div>
      <div class="item"> <a href="#"><img src="{{asset('vendor/adminlte/images/work/thumbs/item6.jpg')}}" alt=""></a>
        <h3>Quad-Core</h3>
        <p>photography</p>
      </div>
      <div class="item"> <a href="#"><img src="{{asset('vendor/adminlte/images/work/thumbs/item7.jpg')}}" alt=""></a>
        <h3>Retro Blast</h3>
        <p>illustration</p>
      </div>
      <div class="item"> <a href="#"><img src="{{asset('vendor/adminlte/images/work/thumbs/item8.jpg')}}" alt=""></a>
        <h3>Gates Of The Sun</h3>
        <p>photography</p>
      </div>
      <div class="item"> <a href="#"><img src="{{asset('vendor/adminlte/images/work/thumbs/item9.jpg')}}" alt=""></a>
        <h3>Winter Touch</h3>
        <p>photography</p>
      </div>
      <div class="item"> <a href="#"><img src="{{asset('vendor/adminlte/images/work/thumbs/item10.jpg')}}" alt=""></a>
        <h3>Burn</h3>
        <p>photo manipulation</p>
      </div>
    </section>
    <!-- /section -->
    <section id="bottom">
      <h3>Thanks for looking at my new website!</h3>
    </section>
    <!-- /section -->
  </div>
  <footer id="footer" class="clearfix">
    <div class="wrapper">
      <section class="left">
        <h4>Contact</h4>
        <div id="formwrap">
          <form method="post" id="submitform" action="#">
            <input type="text" class="formstyle" title="Name" name="name">
            <input type="text" class="formstyle" title="Email" name="email">
            <textarea name="message" title="Message"></textarea>
            <input class="formstyletwo" type="submit" value="Send">
          </form>
        </div>
        <div id="error"></div>
      </section>
      <section class="right social clear">
        <!-- Replace with any 32px x 32px icons -->
        <a href="#"><img class="icon" src="{{asset('vendor/adminlte/images/icons/google.png')}}" alt=""></a> <a href="#"><img class="icon" src="{{asset('vendor/adminlte/images/icons/youtube.png')}}" alt=""></a> <a href="#"><img class="icon" src="{{asset('vendor/adminlte/images/icons/facebook.png')}}" alt=""></a> <a href="#"><img class="icon" src="{{asset('vendor/adminlte/images/icons/twitter.png')}}" alt=""></a>
        <!-- /icons -->
      </section>
      <!-- /section -->
      <section id="copyright" class="clearfix">
        <p class="left">Copyright &copy; 2021 - <a href="https://github.com/jAlvarosf/atosgestor">AtosGestor</a>. All Rights Reserved</p>
        <p class="right">Website Template By <a target="_blank" href="http://www.birondesign.com/">Chris Biron</a> &amp; Modified By <a href="http://www.os-templates.com/">OS Templates</a></p>
      </section>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{asset('vendor/adminlte/scripts/jquery-1.7.2.min.js')}}"></script>
  <script src="{{asset('vendor/adminlte/scripts/jquery.carouFredSel-5.5.2.js')}}"></script>
  <script src="{{asset('vendor/adminlte/scripts/jquery.easing.1.3.js')}}"></script>
  <!-- SLIDESHOW SCRIPT START -->
  <script>
    $("#slider")
      .carouFredSel({
        responsive: true,
        scroll: {
          fx: "crossfade",
          easing: "swing",
          duration: 1000,
        },
        items: {
          visible: 1,
          height: "27%"
        }
      });
  </script>
</body>

</html>