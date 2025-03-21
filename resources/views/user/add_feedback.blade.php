<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DJoz | Template</title>

      <!-- Google Font -->
      <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Css Styles -->
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/barfiller.css" type="text/css">
<link rel="stylesheet" href="css/nowfont.css" type="text/css">
<link rel="stylesheet" href="css/rockville.css" type="text/css">
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css"> 
</head>
<style>
.rating {
  display: flex;
  justify-content: flex-start;
  padding: 10px 0;
}

.star {
  font-size: 2rem;
  color: gray;
  cursor: pointer;
  transition: color 0.3s;
}

.star.selected {
  color: gold;
}

</style>
<body>



    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   <!-- Header Section Begin -->
 <header class="header header--normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="{{URL::to('/index')}}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                    <ul>
                                <li class="active"><a href="{{URL::to('/index')}}">Home</a></li>
                                <li><a href="{{URL::to('/videos')}}">Videos</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{URL::to('/artist')}}">Popular Artists</a></li>
                                        <li><a href="{{URL::to('/albumpage')}}">Popular Albums</a></li>
                                        <li><a href="{{URL::to('/year')}}">Year</a></li>
                                    </ul>
                                <li><a href="{{URL::to('/contact')}}">Contact</a></li>

    @if(Auth::id())
    <li class="nav-item">
        <x-app-layout>
        </x-app-layout>
    </li>
@else
    <li class="nav-item"><a href="/register" class="nav-link">Sign_up</a></li>
    <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
@endif

                            </ul>
                    </nav>
                   
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header Section End --> 


    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{URL::to('/index')}}"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Map Begin -->
    <div class="map">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd"
                height="585" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__address">
                        <div class="section-title">
                            <h2>Contact info</h2>
                        </div>
                        <p>We are here to assist you with any questions or concerns you may have. Feel free to reach out to us through any of the contact methods provided above. Your feedback is important to us, and we strive to respond to all inquiries promptly. Thank you for getting in touch</p>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <h5>Address</h5>
                                <p>Los Angeles Gournadi, 1230 Bariasl</p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <h5>Hotline</h5>
                                <span>1-677-124-44227</span>
                                <span>1-688-356-66889</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <h5>Email</h5>
                                <p>Support@gamail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                <div class="contact__form">
                    <div class="section-title">
    <h2 class="text-center display-5">Share Your Feedback</h2>
    <p>"Your opinion matters! Let us know how we’
    re doing and what we can do to enhance your experience."</p>
    </div>
   
    <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
        <div class="input_list">
            <input type="text" name="name" placeholder="Name" required >
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="remarks" placeholder="Remarks" required>
        </div>

        <div class="rating">
            <label for="rating">Rating:</label>
            <select name="rating" required>
                <option value="5">★★★★★</option>
                <option value="4">★★★★</option>
                <option value="3">★★★</option>
                <option value="2">★★</option>
                <option value="1">★</option>
            </select>
        </div>

        <textarea name="comment" placeholder="Comment" required></textarea>
        <button type="submit" class="site-btn">Send Feedback</button>
    </form>
</div>
</div>
</div>
</div>
</section>
<!-- Contact Section End -->

     
 

    <!-- Footer Section Begin -->
    <footer class="footer footer--normal spad set-bg" data-setbg="{{ asset('img/footer-bg.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6>1-677-124-44227</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>DJ.Music@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>SOUND</h2>
                        <div class="footer__social__links">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Stay With me</h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="jsfiles/jquery-3.3.1.min.js"></script>
        <script src="jsfiles/bootstrap.min.js"></script>
        <script src="jsfiles/jquery.magnific-popup.min.js"></script>
        <script src="jsfiles/jquery.nicescroll.min.js"></script>
        <script src="jsfiles/jquery.barfiller.js"></script>
        <script src="jsfiles/jquery.countdown.min.js"></script>
        <script src="jsfiles/jquery.slicknav.js"></script>
        <script src="jsfiles/owl.carousel.min.js"></script>
        <script src="jsfiles/main.js"></script>

        <!-- Music Plugin -->
        <script src="jsfiles/jquery.jplayer.min.js"></script>
        <script src="jsfiles/jplayerInit.js"></script>

</body>
<script>
const stars = document.querySelectorAll('.star');

stars.forEach(star => {
  star.addEventListener('click', () => {
    if (star.classList.contains('selected')) {
      star.classList.remove('selected'); 
    } else {
      star.classList.add('selected'); 
    }

    let value = star.getAttribute('data-value'); 
    console.log('Rated: ' + value); 
  });
});

    </script>
 

</html>