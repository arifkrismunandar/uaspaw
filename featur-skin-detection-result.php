<?php require_once("user-auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Skin History Detection - MalilStuff</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/fav.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

          <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="product-search.php"  method="post" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" name="search" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="php.php" class="js-logo-clone">Malilstuff</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
              <ul>
                  <li>
                    <a href="user-profile.php" class="site-cart">
                     <img src="images/user.png" width=18>
                    </a>
                  </li> 
                  <li>
                    <a href="user-setting.php" class="site-cart">
                     <img src="images/setting.png" width=18>
                    </a>
                  </li> 
                  <li>
                    <a href="user-logout.php" class="site-cart" onclick="return confirm('Are you sure? Want to Logout')">
                     <img src="images/logout.png" width=18>
                    </a>
                  </li> 
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
        <ul class="site-menu js-clone-nav d-none d-md-block">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="about.php">About</a>
            </li>
            <li><a href="product.php">Product</a></li>
            <li class="active"><a href="user-profile.php">User</a></li>
            <li><a href="vendor-profile.php">Vendor</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
      <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="user-profile.php">Profile</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Skin History Detection</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 ml-auto">
  	        <div class="p-4 border mb-3">
            <div class="card-body text-center">
                <center><img class="img img-responsive rounded-circle mb-3" width="200" src="user/<?php echo $_SESSION['user']['image'] ?>" /></center>
                  <h2><?php echo  $_SESSION["user"]["fullname"] ?></h2>
                  <p><?php echo $_SESSION["user"]["email"] ?></p>
                  <hr>
                  <ul class="list-group">
                    <li class="list-group-item"><h4>My username is <?php echo $_SESSION["user"]["username"] ?></h4></li>
                    <li class="list-group-item"><h4><?php echo $_SESSION["user"]["city"] ?> +62 <?php echo $_SESSION["user"]["phone"] ?></h4></li>
                    <li class="list-group-item"><h4>I am <?php echo $_SESSION["user"]["gender"] ?></h4></li>
                  </ul>
                  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                  <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User
                      </button>
                      <div class="dropdown-menu" aria-lablelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="user-profile.php">User Profile</button></a>
                        <a class="dropdown-item" href="user-setting.php">User Setting</button></a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-info"><a href="user-logout.php" onclick="return confirm('Are you sure? Want to Logout')"><font color="white">Logout</font></a></button>
                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Skin
                      </button>
                      <div class="dropdown-menu" aria-lablelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="featur-skin-detection.php">Skin Checkup</button></a>
                        <form action="featur-skin-detection-result.php"  method="post">
                          <input type="hidden" name="user_id" class="form-control py-4" value="<?php echo $_SESSION['user']['id']; ?>" placeholder="<?php echo $_SESSION['vendor']['id']; ?>">
                          <input type="submit" class="dropdown-item" name="cek" value="Your Skin">
                        </form>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="p-3 p-lg-5 border">
              

            <?php 
                    if (!empty($_GET['message']) && $_GET['message'] == 'success-delete') {
                      echo '<div class="alert alert-success">Successfully.</div>'; ?>


                      <div class="form-group row">
                        <div class="col-md-6">
                          <a href="featur-skin-detection.php"><button type="button" class="btn btn-sm btn-warning btn-lg btn-block"><font color="#FFFFFF">Check Your Skin</font>
                          </button></a>
                        </div>
                        <div class="col-md-6">
                          <form action="featur-skin-detection-result.php" method="post">
                            <input type="hidden" name="user_id" class="form-control py-4" value="<?php echo $_SESSION['user']['id']; ?>" placeholder="<?php echo $_SESSION['vendor']['id']; ?>">
                            <input type="submit" class="btn btn-sm btn-warning btn-lg btn-block" name="cek" value="Check Result">
                          </form>
                        </div>
                      </div>

                <?php  } ?> 
              

              
                    <?php 

                      if(isset($_POST['cek'])){

                          $link = mysqli_connect("localhost", "root", "", "malilstuff");
                          $user_id = $_POST['user_id'];

                          $result = mysqli_query($link, "select * from skin where user_id like '%".$user_id."%' order by dt DESC");
                            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                    ?>
              

              <font size="2"><?php echo $row["dt"]; ?></font>
              <div class="card mb-3">
              
                <div class="card-body">
                
                  <div class="form-group">
                  
                    <div class="col-md-6">
                      <font size="5"><?php echo $row["type"]; ?> Skin Type</font><font size="2"></font>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="col-md-6">
                          <form action="user-store-detect.php" method="post">
                            <input type="hidden" name="efficacy" class="form-control py-4" value="<?php echo $row["type"]; ?>" placeholder="<?php echo $row["type"]; ?>">
                            <input type="submit" class="btn btn-info" name="cek" value="Product">
                          </form>
                        </div>
                        <div class="col-md-6">
                          <a href="user-skin-history-delete.php?id=<?php echo $row["id"];?>" onclick="return confirm('Are you sure? Want to delete product')"><button type="button" class="btn btn-danger btn-block"><font color="#FFFFFF">Delete</font>
                          </button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
                <?php } } ?>
            </div>
            </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="user-profile.php">Profile</a></li>
                  <li><a href="product-list-view.php">Product List</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="user-setting.php">User Setting</a></li>
                  <li><a href="featur-skin-detection.php">Skin Checkup</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="vendor-login.php">Vendor Login</a></li>
                  <li><a href="user-logout.php" onclick="return confirm('Are you sure? Want to Logout')">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>

          <?php 
            $link = mysqli_connect("localhost", "root", "", "malilstuff");
            $result = mysqli_query($link, "select * from product order by dt DESC limit 1");
            while ($prod = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
          ?>

          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">New product</h3>
              <img src="product/<?php echo $prod["image"];?>" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0"><?php echo $prod["productname"];?></h3>
              <p>Rp.<?php echo $prod["price"];?>,- From <?php echo $prod["vendorname"];?></p>
          </div>

          <?php } ?>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">A.H Nasution 105 St. Cibiru, Bandung, Indonesia</li>
                <li class="phone"><a href="tel://23923929210">+62 857 2160 3080</a></li>
                <li class="email">malilstuff@gmail.com</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> MalilStuff All rights reserved
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>