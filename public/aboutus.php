<?php
require_once("./config.php");
include("./includes/header.php");
?>
<body>
    <style>
    .site-section{
        padding:4em 0;
    }

    .details{
        background-color:grey !important;
    }

    p,ul{
        color:grey;
    }

    li{
        margin-left:20px;
    }

    h2{
        font-family:Sofia;
    }

    h3{
        font-family:Sofia;
    }

    .imgt{
        color:red;
    }

    .circle-border{
     border-radius: 50%;
    }

    a .fa-facebook-square.social-bordered, .fa-facebook-square.social-bordered{
     border-color: #3b5999;
     color: #3b5999;
     background-color: rgba(59,89,153,0);
     -webkit-transition: color .7s, background-color .7s;
     transition: color .7s, background-color .7s;
}
 a .fa-facebook-square.social-bordered:hover, .fa-facebook-square.social-bordered:hover{
     color: #fff;
     background-color: #3b5999;
}

a .fa-github.social-bordered, .fa-github.social-bordered{
     border-color: #333;
     color: #333;
     background-color: rgba(59,89,153,0);
     -webkit-transition: color .7s, background-color .7s;
     transition: color .7s, background-color .7s;
}
 a .fa-github.social-bordered:hover, .fa-github.social-bordered:hover{
     color: #fff;
     background-color: #333;
}

a .fa-linkedin.social-bordered, .fa-linkedin.social-bordered{
     border-color: #4078c0;
     color: #4078c0;
     background-color: rgba(59,89,153,0);
     -webkit-transition: color .7s, background-color .7s;
     transition: color .7s, background-color .7s;
}
 a .fa-linkedin.social-bordered:hover, .fa-linkedin.social-bordered:hover{
     color: #fff;
     background-color: #4078c0;
}

    </style>
  <header id="home">
      <?php include("./includes/navbar.php"); ?>
    </div>
  </header>
  <div class="site-section bg-light">
    <div class="container ">
        <div class="row align-items-center">
            <div class= "col-md-6 mb-5">
                <p><img src="https://www.telegraph.co.uk/content/dam/Travel/hotels/2020/march/soneva-jani-water-retreat--bedroom-with-sea-view-pool-by-.jpg" width=450 height=350></p>
            </div>
            <div class= "col-md-6 mb-5">
                <div>
                    <h2>About Us</h2>
                    <hr>
                </div> 
                <p>
                Offering top quality services that every customer deserves. We are an industry leader with our brand renowned across all of the seven continents. We aim to focus on:
                <ul>
                <li>Core Values and Heritage</li>
                <li>Diversity and Inclusion</li>
                <li>Sustainability and Social Impact</li>
                </ul></p>
                <p>
                Our main goal is to provide the best experience to every customer and make their stay memorable. So become part of an ever growing family at Five Elements.
                </p>
            </div>
        </div>
    </div>
  </div>
  <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h2>Meet Our Team</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="details text-center bg-light">
                        <div class="p-5">
                            <h3>Tất Thái Bảo</h3>
                            <p>48.01.104.012</p>
                            <div class="row">
                                <div class="col">
                                    <a href="https://TThaiBao0510.github.io/"><i class="fa fa-github social-bordered circle-border"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="details text-center bg-light">
                        <div class="p-5">
                            <h3>Nguyễn Tuyết Nhi</h3>
                            <p>48.01.104.102</p>
                            <div class="row">
                                <div class="col">
                                    <a href="https://child-04.github.io/"><i class="fa fa-github social-bordered circle-border"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="details text-center bg-light">
                        <div class="p-5">
                            <h3>Bùi Hải Yến</h3>
                            <p>48.01.104.152</p>
                            <div class="row">
                                <div class="col">
                                    <a href="https://HighYen.github.io/"><i class="fa fa-github social-bordered circle-border"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="details text-center bg-light center-content">
                        <div class="p-5">
                            <h3>Nguyễn Chấn Nam Doanh</h3>
                            <p>48.01.104.028</p>
                            <div class="row">
                                <div class="col">
                                    <a href="[YOUR_GITHUB_LINK]"><i class="fa fa-github social-bordered circle-border"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="details text-center bg-light center-content">
                        <div class="p-5">
                            <h3>Ngũ Nguyễn Hoàng Ngọc</h3>
                            <p>48.01.104.097</p>
                            <div class="row">
                                <div class="col">
                                    <a href="https://ngunguyenhoangngoc07072004.github.io/NguNguyenHoangNgoc07072004/"><i class="fa fa-github social-bordered circle-border"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="site-section bg-light">
    <div class="container ">
    <div class="row">
            <div class="col-md-6 mx-auto text-center ">
                <h2>Hotel Features</h2>
                <hr>
            </div>
        </div>
    <div class="row text-center">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img src="https://img.icons8.com/pastel-glyph/64/FF0000/swimming-pool.png"/>
            </div>
            <p><h5>Swimming Pool</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img src="https://img.icons8.com/ios/64/FF0000/beach.png"/>
            </div>
            <p><h5>Beach View</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img src="https://img.icons8.com/ios-filled/64/FF0000/emergency-exit.png"/>
            </div>
            <p><h5>Fire Exit</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img src="https://img.icons8.com/pastel-glyph/64/FF0000/parking--v1.png"/>
            </div>
            <p><h5>Car Parking</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img src="https://img.icons8.com/pastel-glyph/64/FF0000/hair-dryer--v1.png"/>
            </div>
            <p><h5>Hair Dryer</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img src="https://img.icons8.com/ios-filled/64/FF0000/mini-bar.png"/>
            </div>
            <p><h5>Mini Bar</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img src="https://img.icons8.com/ios/64/FF0000/cocktail.png"/>
            </div>
            <p><h5>Drinks</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img src="https://img.icons8.com/ios-filled/64/FF0000/car.png"/>
            </div>
            <p><h5>Car Airport</h5></p>
        </div>
    </div>
  </div>
  </div>
  <?php include("./includes/footer.php"); ?>
  <script>
    $(document).ready(function () {
        $("nav").eq(0).addClass("bg-dark");
        $("nav").eq(0).addClass("navbar-dark");
    });
  </script>
</body>
</html>