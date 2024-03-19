<?php
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        $n="first";
        if ($i%2==1) {
          $n="second";
        }
        echo "<div class=\"col-lg-4 col-md-6 mb-4 portfolio-item $n\">";
        echo '<div class="position-relative mb-2 w-100"><div class="bg-secondary text-center p-4">';
        echo "<h4 class=\"mb-3\">$list[$i]</h4>";
        echo "<p class=\"text-uppercase\">";
        echo file_get_contents("data/".$list[$i]);
        echo "</p></div></div></div>";
      }
    }
    $i = $i + 1;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Nayeon's Farewell Party RSVP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav
      class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5"
    >
      <a href="#" class="navbar-brand d-block d-lg-none">
        <h1 class="font-secondary text-white mb-n2">
          Nayeon<span class="text-primary">'s</span> Farewell
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-between"
        id="navbarCollapse"
      >
        <div class="navbar-nav ml-auto py-0">
          <a href="#home" class="nav-item nav-link active">Home</a>
          <a href="#about" class="nav-item nav-link">About</a>
          <!-- <a href="#story" class="nav-item nav-link">Story</a> -->
          <a href="#gallery" class="nav-item nav-link">Gallery</a>
        </div>
        <a href="#" class="navbar-brand mx-5 d-none d-lg-block">
          <h1 class="font-secondary text-white mb-n2">
            Nayeon<span class="text-primary">'s</span> Farewell
          </h1>
        </a>
        <div class="navbar-nav mr-auto py-0">
          <a href="#event" class="nav-item nav-link">Event</a>
          <a href="#guest" class="nav-item nav-link">Guests</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
      <div
        id="header-carousel"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div
            class="carousel-item position-relative active"
            style="height: 100vh; min-height: 400px"
          >
            <img
              class="position-absolute w-100 h-100"
              src="img/img-bday.jpeg"
              style="object-fit: cover"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">
                  Nayeon's Farewell
                </h1>
                <h1 class="display-1 nanum-gothic text-white mt-n3 mb-md-4">
                  초대장
                </h1>
                <div
                  class="d-inline-block border-top border-bottom border-light py-3 px-4"
                >
                  <h3
                    class="text-uppercase font-weight-normal text-white m-0"
                    style="letter-spacing: 2px"
                  >
                    안녕히 계세요 여러분!👋
                  </h3>
                </div>
                <button
                  type="button"
                  class="btn-play mx-auto"
                  data-toggle="modal"
                  data-src="https://www.youtube.com/embed/qy8rf0SFTDk?si=VI2L1MGHuoyMO7eO"
                  data-target="#videoModal"
                >
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <div
            class="carousel-item position-relative"
            style="height: 100vh; min-height: 400px"
          >
            <img
              class="position-absolute w-100 h-100"
              src="img/img-goaway.jpeg"
              style="object-fit: cover"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">
                  Nayeon's Farewell
                </h1>
                <h1 class="display-1 nanum-gothic text-white mt-n3 mb-md-4">
                  초대장
                </h1>
                <div
                  class="d-inline-block border-top border-bottom border-light py-3 px-4"
                >
                  <h3
                    class="text-uppercase font-weight-normal text-white m-0"
                    style="letter-spacing: 2px"
                  >
                    안녕히 계세요 여러분!👋
                  </h3>
                </div>
                <button
                  type="button"
                  class="btn-play mx-auto"
                  data-toggle="modal"
                  data-src="https://www.youtube.com/embed/qy8rf0SFTDk?si=VI2L1MGHuoyMO7eO"
                  data-target="#videoModal"
                >
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <div
            class="carousel-item position-relative"
            style="height: 100vh; min-height: 400px"
          >
            <img
              class="position-absolute w-100 h-100"
              src="img/img-guam.jpeg"
              style="object-fit: cover"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">
                  Nayeon's Farewell
                </h1>
                <h1 class="display-1 nanum-gothic text-white mt-n3 mb-md-4">
                  초대장
                </h1>
                <div
                  class="d-inline-block border-top border-bottom border-light py-3 px-4"
                >
                  <h3
                    class="text-uppercase font-weight-normal text-white m-0"
                    style="letter-spacing: 2px"
                  >
                    안녕히 계세요 여러분!👋
                  </h3>
                </div>
                <button
                  type="button"
                  class="btn-play mx-auto"
                  data-toggle="modal"
                  data-src="https://www.youtube.com/embed/qy8rf0SFTDk?si=VI2L1MGHuoyMO7eO"
                  data-target="#videoModal"
                >
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev justify-content-start"
          href="#header-carousel"
          data-slide="prev"
        >
          <div class="btn btn-primary px-0" style="width: 68px; height: 68px">
            <span class="carousel-control-prev-icon mt-3"></span>
          </div>
        </a>
        <a
          class="carousel-control-next justify-content-end"
          href="#header-carousel"
          data-slide="next"
        >
          <div class="btn btn-primary px-0" style="width: 68px; height: 68px">
            <span class="carousel-control-next-icon mt-3"></span>
          </div>
        </a>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- Video Modal Start -->
    <div
      class="modal fade"
      id="videoModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src=""
                id="video"
                allowscriptaccess="always"
                allow="autoplay"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Video Modal End -->

    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
      <div class="container py-5">
        <div class="section-title position-relative text-center">
          <h6
            class="text-uppercase text-primary mb-3"
            style="letter-spacing: 3px"
          >
            About
          </h6>
          <h1 class="font-secondary display-4">Me</h1>
          <i class="far fa-heart text-dark"></i>
        </div>
        <div class="row m-0 mb-4 mb-md-0 pb-2 pb-md-0">
          <div class="col-md-6 p-0 text-center text-md-right">
            <div
              class="h-100 d-flex flex-column justify-content-center bg-secondary p-5"
            >
              <h3 class="mb-3">금나연</h3>
              <p>
                안녕하심니까! 금나연입니다! 여러분을 모시게 되어 대단히
                영광입니다!
              </p>
              <div class="position-relative">
                <a
                  class="btn btn-outline-primary btn-square"
                  href="https://www.instagram.com/nayeongold/"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a
                  class="btn btn-outline-primary btn-square mr-1"
                  href="https://github.com/NayeonKeum"
                  ><i class="fab fa-github"></i
                ></a>
                <a
                  class="btn btn-outline-primary btn-square mr-1"
                  href="www.linkedin.com/in/nayeonkeum"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 p-0" style="min-height: 400px">
            <img
              class="position-absolute w-100 h-100"
              src="img/img-cafe.jpeg"
              style="object-fit: cover"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Gallery Start -->
    <div
      class="container-fluid bg-gallery"
      id="gallery"
      style="padding: 120px 0; margin: 90px 0; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/img-gallery2.jpg), no-repeat center center;background-size: cover;"
    >
      <div
        class="section-title position-relative text-center"
        style="margin-bottom: 120px"
      >
        <h6
          class="text-uppercase text-primary mb-3"
          style="letter-spacing: 3px"
        >
          Gallery
        </h6>
        <h1 class="nanum-gothic display-4 text-white">추억 갤러리</h1>
        <i class="far fa-heart text-white"></i>
      </div>
      <div class="owl-carousel gallery-carousel">
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend1.jpg" alt="" />
          <a href="img/img-friend1.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend2.jpg" alt="" />
          <a href="img/img-friend2.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend3.jpg" alt="" />
          <a href="img/img-friend3.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend4.jpg" alt="" />
          <a href="img/img-friend4.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend5.jpg" alt="" />
          <a href="img/img-friend5.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend6.jpg" alt="" />
          <a href="img/img-friend6.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend7.jpg" alt="" />
          <a href="img/img-friend7.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend8.jpg" alt="" />
          <a href="img/img-friend8.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend9.jpg" alt="" />
          <a href="img/img-friend9.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend10.jpg" alt="" />
          <a href="img/img-friend10.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend11.jpg" alt="" />
          <a href="img/img-friend11.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
        <div class="gallery-item">
          <img class="img-fluid w-100" src="img/img-friend12.jpg" alt="" />
          <a href="img/img-friend12.jpg" data-lightbox="gallery">
            <i class="fa fa-2x fa-plus text-white"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- Gallery End -->

    <!-- Event Start -->
    <div class="container-fluid py-5" id="event">
      <div class="container py-5">
        <div class="section-title position-relative text-center">
          <h6
            class="text-uppercase text-primary mb-3"
            style="letter-spacing: 3px"
          >
            Event
          </h6>
          <h1 class="font-secondary display-4">My Farewell Party</h1>
          <i class="far fa-heart text-dark"></i>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <p class="mb-2">테마는 없으나 금지 의류가 존재합니다.</p>
            <h5 class="font-weight-normal text-muted mb-3 pb-3">
              <a href="https://youtu.be/KdyTVoHHIFE?si=ULSNiA0mF-o9Lxik"
                >❌ 🧦회색 후드, 체크 셔츠👔 ❌</a
              >
            </h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 border-right border-primary">
            <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
              <img class="img-fluid mb-4" src="img/img-hi.jpg" alt="" />
              <h4 class="mb-3">Reception</h4>
              <p class="mb-2">
                <a href="https://forms.gle/y5iF3FZnATpzVbHN9">(필수)구글폼</a>
              </p>
              <p class="mb-2">기한: ASAP</p>
              <p class="mb-0">비용: 3만원</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-center text-md-left ml-md-3">
              <img class="img-fluid mb-4" src="img/img-party.jpg" alt="" />
              <h4 class="mb-3">Farewell Party</h4>
              <p class="mb-2">일시: 4/6(토) 7:00PM - 11:00PM</p>
              <p class="mb-2">
                장소:
                <a href="https://naver.me/5Rc8lFx3">RTR 라운지</a><br />(서울
                용산구 녹사평대로46길 1 4층)
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Event End -->

    <!-- Friends & Family Start -->
    <div class="container-fluid py-5" id="guest">
      <div class="container pt-5 pb-3">
        <div class="section-title position-relative text-center">
          <h6
            class="text-uppercase text-primary mb-3"
            style="letter-spacing: 3px"
          >
            Friends
          </h6>
          <h1 class="nanum-gothic display-4">방명록</h1>
          <i class="far fa-heart text-dark"></i>
        </div>
        <div class="row portfolio-container guest-list">
          <?php
          print_list();
          ?>
        </div>
      
        <div class="section-title position-relative text-center">
          <h3 class="nanum-gothic">폼</h3>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center">
              <p>수정을 지원하지 않으니 신중한 작성.. 부탁드립니다 🙏</p>
              <form action="create_process.php" method="post" class="js-form form">
                <div class="form-row">
                  <div class="form-group col-sm-6">
                    <input
                      type="text"
                      class="form-control bg-secondary border-0 py-4 px-3"
                      placeholder="Name"
                      name="title"
                      id="title"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control bg-secondary border-0 py-2 px-3"
                    rows="5"
                    placeholder="Message"
                    name="description"
                    id="description"
                  ></textarea>
                </div>
                <div>
                  <input
                    type="submit"
                    class="btn btn-primary font-weight-bold py-3 px-5"
                    name="submit"
                    value="Submit"
                  />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- RSVP End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-white py-5"
      id="footer"
      style="margin-top: 90px"
    >
      <div class="container text-center py-5">
        <div class="section-title position-relative text-center">
          <h1 class="font-secondary display-3 text-white">Thank You</h1>
          <i class="far fa-heart text-white"></i>
        </div>
        <div class="d-flex justify-content-center py-2">
          <p class="text-white" href="#">rmaskdus0208@gmail.com</p>
          <span class="px-3">|</span>
          <p class="text-white">010-3488-6196</p>
        </div>
        <p class="m-0">
          &copy;
          <a class="text-primary" href="https://github.com/NayeonKeum">NYK</a>.
          Designed by
          <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
        </p>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

  </body>
</html>
