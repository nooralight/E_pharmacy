<!DOCTYPE html>
<!--
Template Name: Spourmo
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>E-Pharmacy</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{asset("layout/styles/layout.css")}}" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <section id="ctdetails" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong>+00 (xxx) xxx xxxx</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Sun - Sat.:</strong> 24 hours</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></div>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay padtop" style="background-color:  #1777aa ;">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <header id="header" class="hoc clear" style="background: cornsilk;">
    <div id="logo" class="fl_left">
      <!-- ################################################################################################ -->
      <h1 style="color:  #b45e11 ;"><a href="{{route("home")}}">E-Pharmacy</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right">
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a class="drop" href="#" style="color:  #b45e11 ;">Medicines</a>
          <ul>
            <li><a href="{{route("homeTodrug")}}" style="color:black;">Shopping</a></li>
          </ul>
        </li>
        <li><a href="{{route("gotoCart")}}" style="color:  #b45e11 ;">Cart</a></li>
        <li><a href="{{route("contactPage")}}" style="color:  #b45e11 ;">Contact</a></li>
        <li><a href="{{route("logout")}}" style="color:  #b45e11 ;">Logout</a></li>

      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->

    <article class="fl_left">
        <h3 class="heading">E-Pharmacy</h3>
        <p>Welcome to our E-pharmacy shop. We are alive for 24 hours a day to serve out online customers. Enjoy shopping!</p>
        <footer>
          <ul class="nospace inline pushright">
            <li><a class="btn inverse" href="{{route("homeTodrug")}}">Shopping</a></li>

            <li>
        <form action="{{ route('searchByname1') }}" method="GET">

        <input type="text" style="color: black;" name="search" placeholder="search here.." required/>
        <button style="color:black" type="submit">Search</button>
        </form>
        </li>

          </ul>
        </footer>
      </article>
      <article class="fl_right">
        <img src="{{asset("images1/9.png")}}" alt="">
      </article>


    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    @if(!empty($drugs))
    <section id="introblocks">
      <ul class="nospace group grid-3">
        <li class="one_third">
          <figure><img src="{{asset("images/".$drugs[0]->image)}}" alt="">

            <p>{{$drugs[0]->name}}</p>
            <figcaption><a href="{{url("/buy/".$drugs[0]->id."/drug")}}">Buy</a></figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><img src="{{asset("images/".$drugs[1]->image)}}" alt="">

            <p>{{$drugs[1]->name}}</p>
            <figcaption><a href="{{url("/buy/".$drugs[1]->id."/drug")}}">Buy</a></figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><img src="{{asset("images/".$drugs[2]->image)}}" alt="">

            <p>{{$drugs[2]->name}}</p>
            <figcaption><a href="{{url("/buy/".$drugs[2]->id."/drug")}}">Buy</a></figcaption>
          </figure>
        </li>
      </ul>
      <article class="container">
        <h6 style="color: blue;">Our Latest Medicines</h6>
      </article>
    </section>
    @endif
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Our Sponsors and Partnerships</h6>
    </div>
    <figure>

      <ul class="nospace group grid-3">
        <li class="one_third"><img src="{{asset("images1/sponsor.png")}}" alt=""></li>
        <li class="one_third"><img src="{{asset("images1/sponsor.png")}}" alt=""></li>
        <li class="one_third"><img src="{{asset("images1/sponsor1.png")}}" alt=""></li>
      </ul>
    </figure>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Bottom Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear">
      <!-- ################################################################################################ -->

      <!-- ################################################################################################ -->
      <hr class="btmspace-50">
      <!-- ################################################################################################ -->
      <nav>
        <ul class="nospace">
          <li><a href="index.html"><i class="fas fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Disclaimer</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
</div>
<!-- End Bottom Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>