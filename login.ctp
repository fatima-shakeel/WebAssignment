<!DOCTYPE html>
<html lang="en-US">

<head>
      <!-- Meta tags always come first -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="">
      <!--Mobile Specific Meta  -->
      <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no,shrink-to-fit=no">

      <title>Home Page</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"> 
      <link rel="stylesheet" type="text/css" href="C:/Users/fatim/Desktop/assets/css/bootstrap.min.css">
      <!-- Slick Slider -->
      <link rel="stylesheet" type="text/css" href="C:/Users/fatim/Desktop/assets/css/slick.min.css">
      <link rel="stylesheet" type="text/css" href="C:/Users/fatim/Desktop/assets/css/slick.theme.css">
      <!-- Theme CSS -->
      <link rel="stylesheet" type="text/css" href="C:/Users/fatim/Desktop/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="C:/Users/fatim/Desktop/assets/css/responsive.css">




      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body>
<header class="site-header">
        <div class="site-topbar-bg">
            <div class="container site-topbar">
                <div class="site-logo">
                    <a href="C:/Users/fatim/Desktop/Views/home/index">
                        <img src="C:/Users/fatim/Desktop/assets/img/logo.jpg" alt="">
                    </a>
                </div>
                <div class="site-search">
                    <form action="" class="site-search-form">
                        <div class="search-form-inner">
                            <input type="search" class="input-search" placeholder="Search Trending Videos">
                            <input type="submit" name="search" class="search-btn">
                        </div>
                    </form>
                </div>
                <div class="topbar-dropdown">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                            Users
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/home/signup"><i class="fa fa-user"></i> Sign up</a>
                            <a class="dropdown-item" href="C:/Users/fatim/Desktop/Views/home/login"><i class="fa fa-user"></i> login </a>
                            <a class="dropdown-item" href="/home/editprofile"><i class="fa fa-user"></i> Edit Profile </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.site-topbar-->
        <!-- Navigation -->
        <nav class="site-navbar">
            <div class="container">
                <!-- Mobile Menu Toggler -->
                <div class="mb-menu">
                    <!-- Mobile Search -->
                    <div class="site-search" style="display:none;">
                        <form action="" class="site-search-form">
                            <div class="search-form-inner">
                                <input type="search" class="input-search" placeholder="Search Trending Videos">
                                <input type="submit" name="search" class="search-btn">
                            </div>
                        </form>
                    </div>
                    <button class="navbar-toggler menuTricker collapsed">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <ul class="site-navbar-list">
                    <li class="active"><a href="/home/index">Home</a></li>
                    <li><a href="/home/about">About Us</a></li>
                    <li><a href="/home/contact">Contact</a></li>
                    <li><a href="/home/trending">Trending Vedios</a></li>
                    <li class="nav-dropdown">
                        <a href="javascript:void;">Feature</a>
                        <ul class="sub-menu">
                            <li class="nav-dropdown">
                                <a href="#">Share</a>
                                <ul class="sub-menu">
                                    <li><a href="">Facebook</a></li>
                                    <li><a href="">Twitter</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">Live</a></li>
                        </ul>
                    </li>
                    <li class="nav-dropdown">
                        <a href="javascript:void;">Categories</a>
                        <ul class="sub-menu">
                            <li><a href="/home/category">Education</a></li>
                            <li><a href="/home/drama">Drama</a></li>
                            <li><a href="/home/music">Music</a></li>
                            <li><a href="/home/cooking">Cooking</a></li>
                            <li><a href="/home/news">News</a></li>
                            <li><a href="/home/sports">Sports</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


<main class="site-main">
     <div class="container">
         <div class="singup-wrap bg">
          <h3>Sign Up</h3>
          <form action="">
                <div class="signup-form">


                   <div class="form-row justify-content-between flex-nowrap">
                     <div class="form-group w-100 pl-2 pr-2">
                       <input type="text" class="form-control" placeholder="First Name">
                     </div>
                     <div class="form-group w-100 pl-2 pr-2">
                       <input type="text" class="form-control" placeholder="Last Name">
                     </div>
                   </div>


                   <div class="form-row">
                     <div class="form-group w-100 pl-2 pr-2">
                       <input type="text" class="form-control" placeholder="Email / Phone Number">
                     </div>
                    </div>


                    <div class="form-row">
                     <div class="form-group w-100 pl-2 pr-2">
                       <input type="text" class="form-control" placeholder="Countery">
                     </div>
                    </div>

                     <div class="form-row justify-content-between flex-nowrap">
                       <div class="form-group w-100 pl-2 pr-2">
                         <select name="" id="" class="form-control">
                           <option value="#">Date</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                           <option value="11">11</option>
                           <option value="12">12</option>
                         </select>
                       </div>
                       <div class="form-group w-100 pl-2 pr-2">
                         <select name="" id="" class="form-control">
                           <option value="#">Month</option>
                           <option value="1">JAN</option>
                           <option value="2">FEB</option>
                           <option value="3">MAR</option>
                           <option value="4">APR</option>
                           <option value="5">MAY</option>
                           <option value="6">JUN</option>
                           <option value="7">JUL</option>
                           <option value="8">AUG</option>
                           <option value="9">SEP</option>
                           <option value="10">OCT</option>
                           <option value="11">NOV</option>
                           <option value="12">DEC</option>
                         </select>
                       </div>
                       <div class="form-group w-100 pl-2 pr-2">
                         <select name="" id="" class="form-control">
                           <option value="#">Year</option>
                           <option value="2010">2010</option>
                           <option value="2011">2011</option>
                           <option value="2012">2012</option>
                           <option value="2013">2013</option>
                           <option value="2014">2014</option>
                           <option value="2015">2015</option>
                           <option value="2016">2016</option>
                           <option value="2017">2017</option>
                           <option value="2018">2018</option>
                           <option value="2019">2019</option>
                         </select>
                       </div>
                   </div>


                   <div class="form-row mr-0 ml-0 my-4">
                       <div class="form-check form-check-inline mx-3">
                          <input class="form-check-input" type="radio" name="gender" id="male" >
                          <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline mx-3">
                          <input class="form-check-input" type="radio" name="gender" id="female" >
                          <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>

                    <div class="form-row">
                     <div class="form-group w-100 pl-2 pr-2">
                       <input type="password" class="form-control" placeholder="Password">
                     </div>
                    </div>

                    <div class="form-row">
                     <div class="form-group w-100 pl-2 pr-2">
                       <input type="password" class="form-control" placeholder="Confirm Password">
                     </div>
                    </div>
    
                    
                    <div class="d-flex my-4 justify-content-center">
                      <input type="submit" class="btn btn-lg btn-primary" value="Sign Up">
                    </div>

                    <div class="d-flex my-4">
                      <p>Already have an account? <a href="/home/login">Login</a></p>
                    </div>


                </div>
          </form>
       </div>
     </div>
</main>

<footer class="site-footer">
   <div class="container">
     <div class="footer-inner">
       <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-col">
              <h4>Help center</h4>
              <ul class="footer-links">
                <li><a href="C:/Users/fatim/Desktop/Views/home/index">Home</a></li>
                <li><a href="C:/Users/fatim/Desktop/Views/home/about">About</a></li>
                <li><a href="C:/Users/fatim/Desktop/Views/home/contact">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-col">
              <h4>Whats new</h4>
              <div class="treding-videos">
                  <div class="slide-vd position-relative">
                     <video>
                        <source src="/assets/mov_bbb.mp4" type="video/mp4">
                      </video>
                      <span class="vlog-format-action small"><i class="fa fa-play"></i></span> 
                      <div class="entry-meta">
                         <div class="download-icon">
                           <a href="javascript:void" title="Download"><i class="fa fa-arrow-circle-down"></i></a>
                         </div>
                         <div class="share-icons">
                            Share: 
                            <span><a href="javascript:void"><i class="fa fa-facebook"></i></a></span>
                            <span><a href="javascript:void"><i class="fa fa-twitter"></i></a></span>
                            <span><a href="javascript:void"><i class="fa fa-whatsapp"></i></a></span>
                         </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-col">
              <h4>About US</h4>
              <ul class="footer-links">
                <li><a href="/home/index">Home</a></li>
                <li><a href="/home/about">About</a></li>
                <li><a href="/home/contact">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-col">
              <h4>Contact US</h4>
              <ul class="footer-links">
                <li><a href="/home/index">Home</a></li>
                <li><a href="/home/about">About</a></li>
                <li><a href="/home/contact">Contact</a></li>
              </ul>
            </div>
          </div>
       </div>
     </div>
   </div>
</footer>


<!--=========================Javascript=========================-->
<!-- jQuery first, then Bootstrap JS. -->
<script src="C:/Users/fatim/Desktop/assets/js/jquery-3.2.1.min.js"></script>
<script src="C:/Users/fatim/Desktop/assets/js/bootstrap.min.js"></script>
<script src="C:/Users/fatim/Desktop/assets/js/slick.min.js"></script>
<script src="C:/Users/fatim/Desktop/assets/js/main.js"></script>


</body>
</html>