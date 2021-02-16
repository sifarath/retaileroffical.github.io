<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Shoping</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <!--Custom styles-->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <!-----------------------------------Navigation------------------------------------>

  <div class="container">
    <header>
      <div class="nav-div" id="header">
        <nav id="nav" class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar nav-main-div">
          <div class="container">
            <div class="row" style="width: 130%;">
              <div class="col-2">
                <img src="./img/icons/list.png" height="30" alt="">
              </div>
              <div class="text-center col-md-8 col-6">
                <h4 style="font-weight: 500;">LOGO</h4>
              </div>
              <div class="col-md-2 col-4">
                <span class="float-right"><img src="./img/icons/search.png" height="30" class="pr-2 d-md-none d-inline"
                    alt=""><img src="./img/icons/shopping-cart.png" height="30" alt=""></span>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>

  <!--------------------------------category section------------------------------------------------->


  <div class="container-fluid category-container">
    <div class="row">
      <div class="col-md-6 col-12 category-col">
        <h5><i class="pr-2 fas fa-chevron-right fa-lg category-fa"></i>CATEGORIES </h5>
      </div>
      <div class="col-md-6  text-center d-md-block d-none">
        <form class="d-flex input-group w-auto">
          <input class="form-control" placeholder="SEARCH" aria-label="Search" />
          <button class="btn btn-outline-basic m-0 p-1 " type="button">
            Search
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-------------------------------Product list -------------------------------------------------->

  <div class="container-fluid products-div">
    <div class="row">
      <div class="col-6 featured-col text-center">FEATURED</div>
      <div class="col-6 recent-col text-center">RECENT PRODUCTS</div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <img src="./img/products/sale.png" class="sale-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <div class="old-price-div text-center">
              <small class="before-text">Before</small><br>
              <button class="btn old-price-btn"><del>BHD 19</del> </button>
            </div>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h5>
            <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h6>
          <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h6>
          <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h6>
          <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h6>
          <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h6>
          <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h6>
          <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h6>
          <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h6>
          <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h6>
          <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h6>
          <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-6 image-col p-sm-2 ">
        <div class="card-wrapper">
          <div class="image-div">
            <img src="./img/products/headset.jpg" class="img-responsive fit-image" alt="">
            <button class="btn price-btn">BHD 17 </button>
            <badge class="cart-badge"><i class="fas fa-cart-plus fa-2x cart-fa"></i></badge>
          </div>
        </div>
        <div class="content-div text-center">
          <h6 class="heading mb-0">Boat Headset</h6>
          <p class="description">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>
      </div>
    </div>
  </div>

  <!----------------------------- Footer ------------------------------------------------->


  <div id="footerDiv">
    <footer class="page-footer font-small pt-4">
      <div class="container-fluid text-center text-md-left pb-3">
        <div class="container">
          <div class="row">
            <div class="col text-center"><a href="https://www.facebook.com/" target="_blank"><i
                  class="fab fa-facebook-f contact-icon fa-2x"></i></a></div>
            <div class="col text-center"><span><a href="https://twitter.com/" target="_blank"><i
                    class="fab fa-twitter contact-icon fa-2x"></i></a></span></div>
            <div class="col text-center"><span><a href="https://www.instagram.com/" target="_blank"><i
                    class="fab fa-instagram contact-icon fa-2x"></i></a></span></div>
          </div>
        </div>
      </div>
    </footer>

    <!------------------------------------------------------------------------------------------>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>

</html>