<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{ url('public') }}/app/images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>My Flatshoes</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="{{ url('public') }}/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ url('public') }}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('public') }}/css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    @include('client.section.header')
    <!-- end header section -->
  </div>


  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ url('public') }}/app/images/b1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Flat Shoes
              </h5>
              <p>
                Salah satu fashion untuk memaksimalkan penampilan cantik wanita adalah sepatu. Sepatu menjadi hal penting yang perlu diperhatikan sebelum bepergian. Salah satu yang paling digemari adalah flat shoes wanita. Flat shoes banyak disukai karena selain nyaman dikenakan, juga identik dengan wanita. Flat shoes memiliki berbagai macam gaya, bentuk, warna, dan motif. Dari yang polos simpel sampai yang lucu-lucu pun ada. Sepatu ini nyaman digunakan sehari-hari lho, baik untuk ngampus, ke kantor, ke tempat les, hangout, bahkan ke pesta. Selain itu, flatshoes juga cocok dipadupadankan dengan outfit apa pun. Sehingga, supaya makin oke dan pede, kamu perlu memilih merek flat shoes yang bagus.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ url('public') }}/app/images/b2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Flat Shoes
              </h5>
              <p>
                 Salah satu fashion untuk memaksimalkan penampilan cantik wanita adalah sepatu. Sepatu menjadi hal penting yang perlu diperhatikan sebelum bepergian. Salah satu yang paling digemari adalah flat shoes wanita. Flat shoes banyak disukai karena selain nyaman dikenakan, juga identik dengan wanita Flat shoes memiliki berbagai macam gaya, bentuk, warna, dan motif. Dari yang polos simpel sampai yang lucu-lucu pun ada. Sepatu ini nyaman digunakan sehari-hari lho.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ url('public') }}/app/images/b3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Flat Shoes
              </h5>
              <p>
                Salah satu fashion untuk memaksimalkan penampilan cantik wanita adalah sepatu. Sepatu menjadi hal penting yang perlu diperhatikan sebelum bepergian.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- info section -->
  @include('client.section.info')
  <!-- end info_section -->


  <!-- footer section -->
  @include('client.section.footer')
  <!-- footer section -->


  <!-- jQery -->
  <script src="{{ url('public') }}/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="{{ url('public') }}/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="{{ url('public') }}/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>